<div>
    @if(isset($data['url']))
        <img alt="{{ $data['alt'] }}" src="{{ asset('storage/'.$data['url']) }}">
    @endif
</div>
