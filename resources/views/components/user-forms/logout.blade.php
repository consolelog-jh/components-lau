<x-forms.sample 
    up-fail-target="form"
    up-submit
    action="{{-- {{ route('logout') }} --}}"
    class="flex items-center"
>
    <button {{ $attributes }} type="submit">
        {{ $slot }}
    </button>
</x-forms.sample>