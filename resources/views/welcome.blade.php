@extends('layouts.app')

@section('app-content')
    <x-titles.h1>Accueil</x-titles.h1>

    <x-titles.h2>Utilisateur formulaire</x-titles.h2>
    <x-user-forms.register/>
    <x-user-forms.login/>
    <x-user-forms.logout>Deconnection</x-user-forms.logout>
    <x-user-forms.verify-email/>
    <x-user-forms.update-profil/>
    <x-user-forms.reset-password/>
    <x-user-forms.forgot-password/>
@endsection