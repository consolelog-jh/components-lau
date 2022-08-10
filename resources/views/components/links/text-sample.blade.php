<a 
    {{ $attributes }}
    class="
        {{ $classA }}
        text-s-linktextsample
        text-linktextsample
        dark:text-linktextsampled
        cursor-pointer
        hover:underline
        {{-- add your custom class --}}
    "
>
    {{ $slot }}
</a>