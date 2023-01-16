@extends('layouts.app')

@section('content')
<div class="space"></div>
<x-auth-card>
    <x-slot name="logo">
    </x-slot>
    <div class="text-white m-2 text-center text-lg">El. pašto adreso patvirtinimas</div>
    <div class="mb-4 text-sm text-white dark:text-gray-400">
        {{ __('Prašome patvirtinti el. pašto adresą. Patvirtinimo nuorodą išsiųsta į jūsų el. pašto adresą. Jeigu patvirtinimo laiško negavote, atsiųsime jums iš naujo.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600 dark:text-green">
        {{ __('Naujas patvirtinimo laiškas buvo sėkmingai išsiųstas į jūsų el. pašto adresą.') }}
    </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Išsiųsti naują patvirtinimo laišką ') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-auth-card>
@endsection