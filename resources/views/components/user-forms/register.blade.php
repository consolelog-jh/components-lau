<x-forms.sample
    {{ $attributes }}
    up-fail-target="form"
    up-submit
    action="{{-- {{ route('register') }} --}}"
>

    {{-- you have a role model for use this --}}
    {{-- input select for role 
    <x-inputs.select 
        placeholder="Selectionner un role" 
        name="role" 
        :entities="$roles"
    /> --}}
    
    {{-- firstName 
    <x-inputs.sample
        name="firstName"
        type="text"
        value="{{ old('firstName') }}"
        placeholder="Votre prénom"
        required
        class-div="mb-2"
    /> --}}

    {{-- lastName 
    <x-inputs.sample
        name="lastName"
        type="text"
        value="{{ old('lastName') }}"
        placeholder="Votre nom"
        required
        class-div="mb-2"
    /> --}}

    {{-- pseudo 
    <x-inputs.sample
        name="pseudo"
        type="text"
        value="{{ old('pseudo') }}"
        placeholder="Entrer un pseudo"
        class-div="mb-2"
    /> --}}

    {{-- name --}}
    <x-inputs.sample
        name="name"
        type="text"
        value="{{ old('name') }}"
        placeholder="Votre nom"
        required
        class-div="mb-2"
    />

    {{-- address 
    <x-inputs.sample
        name="address"
        type="text"
        value="{{ old('address') }}"
        placeholder="Votre adresse"
        class-div="mb-2"
    /> --}}

    {{-- codePost 
    <x-inputs.sample
        name="codePost"
        type="text"
        value="{{ old('codePost') }}"
        placeholder="Votre code postale"
        class-div="mb-2"
    /> --}}

    {{-- city 
    <x-inputs.sample
        name="city"
        type="text"
        value="{{ old('city') }}"
        placeholder="Votre ville"
        class-div="mb-2"
    /> --}}

    {{-- phone 
    <x-inputs.sample
        name="phone"
        type="text"
        value="{{ old('phone') }}"
        placeholder="Votre téléphone"
        class-div="mb-2"
    /> --}}

    {{-- email --}}
    <x-inputs.sample
        name="email"
        type="email"
        value="{{ old('email') }}"
        placeholder="Votre e-mail"
        required
        class-div="mb-2"
    />

    {{-- password --}}
    <x-inputs.sample
        name="password"
        type="password"
        placeholder="Votre mot de passe"
        required
        class-div="mb-2"
    />

    {{-- password_confirmation  --}}
    <x-inputs.sample
        name="password_confirmation"
        type="password"
        placeholder="Confirmer votre mot de passe"
        required
        class-div="mb-2"
    />
    <x-btns.btn-form class-div="flex justify-end">S'inscrire</x-btns.btn-form>
</x-forms.sample>