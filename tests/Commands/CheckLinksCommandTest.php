<?php

namespace Tests\Commands;

use App\Models\Link;
use App\Models\User;
use App\Notifications\LinkCheckNotification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class CheckLinksCommandTest extends TestCase
{
    use RefreshDatabase;

    public function testCheckWith200Response(): void
    {
        Http::fake([
            '*' => Http::response('', 200),
        ]);

        Notification::fake();

        Link::factory()->create();

        $this->artisan('links:check');

        Notification::assertNothingSent();
    }

    public function testCheckWith204Response(): void
    {
        Http::fake([
            '*' => Http::response('', 204),
        ]);

        Notification::fake();

        Link::factory()->create();

        $this->artisan('links:check');

        Notification::assertNothingSent();
    }

    public function testCheckWithMovedOrBrokenLinks(): void
    {
        Http::fake([
            'example.com/okay' => Http::response(),
            'example.com/moved' => Http::response(status: 300),
            'example.com/failed' => Http::response(status: 503),
            'test.com/okay' => Http::response(),
            'test.com/moved1' => Http::response(status: 302),
            'test.com/moved2' => Http::response(status: 302),
            'test.com/failed1' => Http::response(status: 503),
            'test.com/failed2' => Http::response(status: 503),
        ]);

        Notification::fake();

        $user = User::factory()->create();
        Link::factory()->for($user)->create(['url' => 'https://example.com/okay']);
        Link::factory()->for($user)->create(['url' => 'https://example.com/moved']);
        Link::factory()->for($user)->create(['url' => 'https://example.com/failed']);

        $anotherUser = User::factory()->create();
        Link::factory()->for($anotherUser)->create(['url' => 'https://test.com/okay']);
        Link::factory()->for($anotherUser)->create(['url' => 'https://test.com/moved1']);
        Link::factory()->for($anotherUser)->create(['url' => 'https://test.com/moved2']);
        Link::factory()->for($anotherUser)->create(['url' => 'https://test.com/failed1']);
        Link::factory()->for($anotherUser)->create(['url' => 'https://test.com/failed2']);

        $this->artisan('links:check');

        Notification::assertSentTo(
            $user,
            LinkCheckNotification::class,
            fn(LinkCheckNotification $notification, $channels) => count($notification->movedLinks) === 1
                && count($notification->brokenLinks) === 1
        );

        Notification::assertSentTo(
            $anotherUser,
            LinkCheckNotification::class,
            fn(LinkCheckNotification $notification, $channels) => count($notification->movedLinks) === 2
                && count($notification->brokenLinks) === 2
        );
    }

    public function testCheckWithoutLinks(): void
    {
        Notification::fake();

        $this->artisan('links:check');

        Notification::assertNothingSent();
    }

    public function testCheckWithException(): void
    {
        Http::fake([
            '*' => function () {
                throw new ConnectionException('Unable to connect to host');
            },
        ]);

        Notification::fake();

        $user = User::factory()->create();
        Link::factory()->for($user)->create();

        $this->artisan('links:check');

        Notification::assertSentTo(
            $user,
            LinkCheckNotification::class,
            fn(LinkCheckNotification $notification, $channels) => count($notification->brokenLinks) === 1
        );
    }

    public function testCheckWithLimit(): void
    {
        Http::fake([
            '*' => Http::response(status: 404),
        ]);

        Notification::fake();

        $user = User::factory()->create();
        Link::factory()->for($user)->count(10)->create();

        $this->artisan('links:check', ['--limit' => 5]);

        Notification::assertSentTo(
            $user,
            LinkCheckNotification::class,
            fn(LinkCheckNotification $notification, $channels) => count($notification->brokenLinks) === 5
        );
    }
}
