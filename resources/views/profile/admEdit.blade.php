@extends('layouts.adm')

@section('content')
<div class="space"></div>
<div class="row">
    <div class="col-lg-4 benefit_col">
        <div class="m-2 p-4 sm:p-8 bg-dark light:bg-gray-800 shadow sm:rounded-lg">
            @include('profile.partials.update-admin-profile-information-form')
        </div>
    </div>
    <div class="col-lg-4 benefit_col">
        <div class="m-2 p-4 sm:p-8 bg-dark light:bg-gray-800 shadow sm:rounded-lg">
            @include('profile.partials.update-password-form')
        </div>
    </div>
    <div class="col-lg-4 benefit_col">
        <div class="m-2 p-4 sm:p-8 bg-dark light:bg-gray-800 shadow sm:rounded-lg">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</div>
@endsection