<x-forms.sample
    {{ $attributes }}
    up-fail-target="form"
    up-submit
    action="{{-- {{ route('user-profile-information.update') }} --}}"
    other-method="PUT"
>
    {{-- role user 
    <div>
        <p class="font-light text-xl mb-2">Type de compte :</p>
        @if (auth()->user()->role->libelle == 'root' || auth()->user()->role->libelle == 'admin')
            <x-inputs.select-role selected="{{ auth()->user()->role->libelle }}"/>
        @else
            <p class="font-medium text-lg">{{ auth()->user()->role->libelle}}</p>
        @endif
    </div> --}}

    {{-- info general --}}
    <div>
        {{-- firstName 
        <x-inputs.sample
            name="firstName"
            type="text"
            value="{{ auth()->user()->firstName ?? old('firstName') }}"
            placeholder="Votre prénom"
            required
            class-div="mb-2"
        /> --}}

        {{-- lastName 
        <x-inputs.sample
            name="lastName"
            type="text"
            value="{{ auth()->user()->lastName ?? old('lastName') }}"
            placeholder="Votre nom"
            required
            class-div="mb-2"
        /> --}}

        {{-- pseudo 
        <x-inputs.sample
            name="pseudo"
            type="text"
            value="{{ auth()->user()->pseudo ?? old('pseudo') }}"
            placeholder="Entrer un pseudo"
            class-div="mb-2"
        /> --}}
        
        {{-- name --}}
        <x-inputs.sample
        name="name"
        value="{{ auth()->user()->name ?? old('name') }}"
        placeholder="Votre nom, prénom"
        class-div="mb-2"
        requried
        />

        {{-- address 
        <x-inputs.sample
            name="address"
            type="text"
            value="{{ auth()->user()->address ?? old('address') }}"
            placeholder="Votre adresse"
            class-div="mb-2"
        /> --}}

        {{-- codePost 
        <x-inputs.sample
            name="codePost"
            type="text"
            value="{{ auth()->user()->codePost ?? old('codePost') }}"
            placeholder="Votre code postale"
            class-div="mb-2"
        /> --}}

        {{-- city 
        <x-inputs.sample
            name="city"
            type="text"
            value="{{ auth()->user()->city ?? old('city') }}"
            placeholder="Votre ville"
            class-div="mb-2"
        /> --}}

        {{-- phone 
        <x-inputs.sample
            name="phone"
            type="text"
            value="{{ auth()->user()->phone ?? old('phone') }}"
            placeholder="Votre téléphone"
            class-div="mb-2"
        /> --}}

        {{-- email --}}
        <x-inputs.sample
            name="email"
            type="email"
            value="{{ auth()->user()->email ?? old('name') }}"
            placeholder="Votre adresse e-mail"
            requried
        />
    </div>

    <x-btns.btn-form class-btn="mt-12" class-div="flex justify-end">Modifier</x-btns.btn-form>
</x-forms.sample>