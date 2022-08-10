<form 
    {{ $attributes }} 
    @if($action) action="{{ $action }}" @endif
    method="{{ $method }}"
>
    {{-- other method for send --}}
    @if($otherMethod)
        @method($otherMethod)
    @endif

    {{-- hack --}}
    @csrf

    {{-- content form --}}
    {{ $slot }}
</form>