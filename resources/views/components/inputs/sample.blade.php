<div class="{{ $classDiv }}">
    {{-- label --}}
    @if ($label)
        <label 
            for="{{ $label . $name }}" 
            class="
            block 
            mb-2 
            text-labelinput
            dark:text-labelinputd
            text-s-labelinput
            {{-- custom label here --}}
            {{ $classLabel }}
        "
        >
            {{ $label }}
        </label>
    @endif

    {{-- input --}}
    <div class="relative">
        {{-- icon before --}}
        @if ($iconName == 'user')
            <x-icons.user classdiv="absolute top-2 pl-2 text-inputiconfront dark:text-inputiconfront"/>
        @elseif ($iconName == 'password')
            <x-icons.lock classdiv="absolute top-2 pl-2 text-inputiconfront dark:text-inputiconfront"/>
        @endif

        <input
            {{ $attributes }}
            @if ($label) id="{{ $label . $name }}" @endif
            @if ($name) name="{{ $name }}" @endif
            class="
            w-full 
            block 
            py-2 
            px-4 
            bg-inputbg
            dark:bg-inputbgd
            outline-none 
            {{-- custom input here --}}
            {{ $iconName ? 'pl-12' : '' }}"
        />
    </div>

    {{-- message error of input --}}
    @error($name)
        <div class="fit flex items-center">
            {{-- icon error --}}
            <x-icons.error 
                classdiv="
                text-inputerror 
                dark:text-inputerrord
                {{-- custom icon error here --}}
                " 
                w="w-4" 
                h="w-4"
            />

            {{-- message --}}
            <p class="
            text-inputerror 
            dark:text-inputerrord
            text-s-inputerror
            {{-- custom message here --}}
            "
            >
                {{ $message }}
            </p>
        </div>
    @enderror
</div>