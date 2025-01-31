<x-filament::page>
    @if($dashLayout->widgets !== null)
        <div class="grid grid-cols-12 gap-2 w-full px-2">
            @foreach (config('zeus-dynamic-dashboard.models.Columns')::all() as $column)
                @if(isset($dashLayout->widgets[$column->key]))
                    @php
                        $widgetsItems = collect($dashLayout->widgets[$column->key])->sortBy('data.sort')->toArray();
                    @endphp
                    <div class="{{ $column->class }}">
                        @if(count($widgetsItems) !== 0)
                            @foreach($widgetsItems as $data)
                                @if(class_exists($data['data']['widget']))
                                    @php
                                        $getWidget = new $data['data']['widget'];
                                    @endphp
                                    <div class="my-10">
                                        @if($data['data']['title'])
                                            <h5 class="mb-2 bg-gray-100 border border-primary-200 rounded-3xl ltr:rounded-tl-none rtl:rounded-tr-none absolute -mt-8 px-4 py-2 shadow font-bold text-sm lg:text-lg text-primary-600">
                                                {{ $data['data']['title'] }}
                                            </h5>
                                        @endif
                                        <div class="@if($data['data']['title']) pt-4 @endif">
                                            {!! $getWidget->renderWidget($data['data']) !!}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                @endif
            @endforeach
        </div>
    @endif
</x-filament::page>
