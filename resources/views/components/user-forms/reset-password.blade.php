<x-forms.sample
    {{ $attributes }}
    up-fail-target="form"
    up-submit
    action="{{-- {{ route('password.update') }} --}}"
>
    {{-- token --}}
    <x-inputs.sample
        name="token"
        class-div="hidden"
        value="{{-- {{ request()->route('token') }} --}}"
    />

    {{-- email --}}
    <x-inputs.sample
        name="email"
        type="email"
        placeholder="Votre e-mail"
        class-div="mb-2"
        required
    />

    {{-- password --}}
    <x-inputs.sample
        name="password"
        type="password"
        placeholder="Nouveau mot de passe"
        class-div="mb-2"
        required
    />

    {{-- password_confirmation  --}}
    <x-inputs.sample
        name="password_confirmation"
        type="password"
        placeholder="Confirmer le mot de passe"
        class-div="mb-2"
        required
    />

    <x-btns.btn-form class-div="flex justify-end">Modifier mon mot de passe</x-btns.btn-form>
</x-forms.sample>