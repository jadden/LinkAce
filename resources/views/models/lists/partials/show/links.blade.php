<section class="list-links my-4">
    @if($links->isNotEmpty())
        <div class="d-flex align-items-center">
            <x-models.open-all class="ms-auto"/>
            <x-models.link-display-toggles class="ms-3"/>
            <x-models.link-order-dropdown class="ms-3"/>
        </div>
        <div class="link-wrapper">
            @if(usersettings('link_display_mode') === Link::DISPLAY_CARDS)
                @include('models.links.partials.list-cards')
            @elseif(usersettings('link_display_mode') === Link::DISPLAY_LIST_SIMPLE)
                @include('models.links.partials.list-simple')
            @else
                @include('models.links.partials.list-detailed')
            @endif
        </div>

    @else

        <div class="alert alert-info">
            @lang('linkace.no_results_found', ['model' => trans('link.links')])
        </div>

    @endif

    @if($links->isNotEmpty())
        {!! $links->onEachSide(1)->withQueryString()->links() !!}
    @endif
</section>
