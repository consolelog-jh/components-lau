<div class="{{ $classDiv }}">
    <button 
    {{ $attributes }}
    type={{ $type ?? 'button' }}
    class="
    text-tbtnsample 
    hover:text-tbtnsampleh
    dark:text-tbtnsampled 
    dark:hover:text-tbtnsamplehd 
    bg-bgbtnsample 
    hover:bg-bgbtnsampleh 
    dark:bg-bgbtnsampled 
    dark:hover:bg-bgbtnsamplehd
    text-s-btnsample
    {{ $classBtn }}
    {{-- add your custom class --}}
    "
    >
        {{ $slot }}
    </button>
</div>