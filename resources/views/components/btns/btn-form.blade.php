<div class="{{ $classDiv }}">
    <button 
        {{ $attributes }}
        type={{ $type ?? 'submit' }}
        class="
        px-4 
        py-2 
        rounded-lg 
        text-tbtnform 
        hover:text-tbtnformh
        dark:text-tbtnformd 
        dark:hover:text-tbtnformhd 
        bg-bgbtnform 
        hover:bg-bgbtnformh 
        dark:bg-bgbtnformd 
        dark:hover:bg-bgbtnformhd
        text-s-btnform
        {{ $classBtn }}
        {{-- add your custom class --}}
        "
    >
        {{ $slot }}
    </button>
</div>