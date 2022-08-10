<x-forms.sample
    {{ $attributes }}
    up-fail-target="form"
    up-submit
    action="{{-- {{ route('password.email') }} --}}"
>
    {{-- email --}}
    <x-inputs.sample
        name="email"
        type="email"
        placeholder="Renseigner votre e-mail"
        class-div="mb-2"
        required
    />

    <x-btns.btn-form>Faire une demande</x-btns.btn-form>
</x-forms.sample>