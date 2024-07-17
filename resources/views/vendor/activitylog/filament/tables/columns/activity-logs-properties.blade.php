<div class="my-2 text-sm tracking-tight">
    @foreach($getState() as $key => $value)
        <span class="font-medium inline-block p-1 mr-1 rounded-md whitespace-normal text-gray-700 bg-gray-500/10">
            {{ $key }}
        </span>

        @unless(is_array($value))
            {{ $value }}
        @else
            <span class="divide-x whitespace-normal divide-solid divide-gray-200">
                @foreach ($value as $nestedKey => $nestedValue)
                    {{$nestedKey}}: {{$nestedValue}}
                @endforeach
            </span>
        @endunless
    @endforeach
</div>
