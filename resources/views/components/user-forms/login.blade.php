<x-forms.sample
    {{ $attributes }}
    up-fail-target="form"
    up-submit
    action="{{-- {{ route('login') }} --}}"
>
    {{-- email --}}
    <x-inputs.sample
        name="email"
        type="email"
        placeholder="Identifiant"
        icon-name="user"
        class-div="mb-2"
        requried
    />

    {{-- password --}}
    <x-inputs.sample
        name="password"
        type="password"
        placeholder="Mot de passe"
        icon-name="password"
        class-div="mb-2"
        requried
    />

    {{-- link password forget --}}
    <div class="mb-6 flex justify-end">
        <x-links.text-sample 
            text-size="text-xs"
            up-target="[main-public]" 
            href="{{-- {{ route('password.request') }} --}}"
        >
            Mot de passe oublié ?
        </x-links.text-sample>
    </div>

    <x-btns.btn-form class-div="flex justify-end">Se connecter</x-btns.btn-form>
</x-forms.sample>