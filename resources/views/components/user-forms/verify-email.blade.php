<x-forms.sample
    {{ $attributes }}
    up-fail-target="form"
    up-submit
    action="{{-- {{ route('verification.send') }} --}}"
>
    <x-btns.btn-form>Renvoyer l'email de vérification</x-btns.btn-form>
</x-forms.sample>