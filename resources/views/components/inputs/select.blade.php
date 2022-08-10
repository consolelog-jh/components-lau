<div class="text-black mt-4 mb-8">
    {{-- if label exist --}}
    @if($label)
        <label class="text-lg" for="{{ $label . $name }}">{{ $label }}</label>
    @endif

    <div class="mt-2 relative bg-inputbg dark:bg-inputbgd rounded-lg">
        {{-- selected for input --}}
        <select 
        {{ $attributes }} 
            class="
            block 
            appearance-none 
            bg-inputbg 
            dark:bg-inputbgd
            py-2 
            px-4 
            w-full  
            outline-none
            " 
            name="{{ $name }}" 
            id="{{ $label . $name }}"
        >
            <option class="py-4 px-4 text-lg" value="">{{ $placeholder }}</option>
            @if ($entities)
                @foreach ($entities as $key => $entitie)
                    <option 
                        @if($selected == $entitie->libelle) selected @endif 
                        class="py-4 px-4 text-lg" 
                        value="{{ $entitie->id }}"
                    >
                        {{ $entitie->libelle }}
                    </option>
                @endforeach
            @endif 
        </select>

        {{-- icon arrow --}}
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
    </div>
</div>