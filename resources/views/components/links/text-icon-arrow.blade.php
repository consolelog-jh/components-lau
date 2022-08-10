<a 
    {{ $attributes }} 
    class="
    {{ $classA }} 
    relative 
    flex 
    items-center 
    text-s-linkiconarrow 
    text-linkiconarrow 
    dark:text-linkiconarrowd
    cursor-pointer 
    hover:underline
    {{-- add your custom class --}}
    "
>
    {{-- icon front --}}
    @if ($isIconFront)
        <x-icons.arrow-left w="w-4" h="h-4" classdiv="pr-2"/>
    @endif

    <span>
        {{ $slot }}
    </span>

    {{-- icon back --}}
    @if ($isIconBack)
        <x-icons.arrow-right w="w-4" h="h-4" classdiv="pl-2"/>
    @endif
</a>