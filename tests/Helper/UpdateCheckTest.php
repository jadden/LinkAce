<?php

namespace Tests\Helper;

use App\Helper\UpdateHelper;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class UpdateCheckTest extends TestCase
{
    /*
     * Test the checkForUpdates() helper function with a new update available.
     * Must return the given version string.
     */
    public function test_successful_check(): void
    {
        Http::fake([
            '*' => Http::response('v100.0.0'),
        ]);

        $result = UpdateHelper::checkForUpdates();

        $this->assertEquals('v100.0.0', $result);
    }

    /*
     * Test the checkForUpdates() helper function with no update available.
     * Must return true.
     */
    public function test_successful_check_without_version(): void
    {
        Http::fake([
            '*' => Http::response('v0.0.0'),
        ]);

        $result = UpdateHelper::checkForUpdates();

        $this->assertTrue($result);
    }

    /*
     * Test the checkForUpdates() helper function, but trigger a network / http error.
     * Must return false.
     */
    public function test_update_check_with_network_error(): void
    {
        Http::fake([
            '*' => Http::response('', 404),
        ]);

        $result = UpdateHelper::checkForUpdates();

        $this->assertFalse($result);
    }

    /*
     * Test if the UpdateHelper correctly returns a version from the package.json file.
     */
    public function test_version_from_package(): void
    {
        Storage::fake('root')->put('package.json', '{"version":"0.0.39"}');

        $version = UpdateHelper::currentVersion();

        $this->assertEquals('v0.0.39', $version);
    }

    /*
     * The UpdateHelper should return null if there is no version field.
     */
    public function test_version_from_package_with_invalid_file(): void
    {
        Storage::fake('root')->put('package.json', '{"foo":"bar"}');

        $version = UpdateHelper::currentVersion();

        $this->assertNull($version);
    }

    /*
     * The UpdateHelper should return null if no package.json file was found.
     */
    public function test_version_from_package_with_missing_file(): void
    {
        Storage::fake('root');

        $version = UpdateHelper::currentVersion();

        $this->assertNull($version);
    }
}
