<a 
    {{ $attributes }}
    class="
    {{ $textSize ?? 'text-s-linktextsample' }}
    text-linktextsample
    dark:text-linktextsampled
    cursor-pointer
    {{-- add your custom class --}}
    {{ $classA }}
    "
>
    {{ $slot }}
</a>