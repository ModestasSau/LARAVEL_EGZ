@extends('layouts.app')

@section('content')
<div class="space"></div>
<x-auth-card>
    <x-slot name="logo">
    </x-slot>
    <div class="text-white m-2 text-center text-lg">Slaptažodžio atstatymas</div>
    <div class="mb-4 text-sm text-white dark:text-gray-400">
        {{ __('Pamiršote slaptažodį? Įveskite savo el. pašto adresą ir mes atsiųsime į jį slaptažodžio atkūrimo nuorodą, kurią paspaudus galėsite susikurti naują slaptažodį.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('El. Pašto adresas')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Atstatyti slaptažodį') }}
            </x-primary-button>
        </div>
    </form>
    <a class="underline text-sm text-white dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
        {{ __('Grįžti') }}
    </a>
</x-auth-card>
@endsection