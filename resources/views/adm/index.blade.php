@extends('layouts.adm')

@section('content')
<div class="space"></div>
<!--- naujos prekes --->
<div class="new_arrivals">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_title">
                    <h2>Admin</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!--- benefits --->
<div class="benefit">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 mb-3">
                <a href="{{ route('prekes-index')}}" class="btn btn-outline-secondary benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Prekių valdymas</h6>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="{{ route('kategorijos-index')}}" class="btn btn-outline-secondary benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-sitemap"></i></div>
                    <div class="benefit_content">
                        <h6>Kategorijų valdymas</h6>
                    </div>
                </a>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-6 mb-3">
                <a href="{{ route('user-index')}}" class="btn btn-outline-secondary benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Vartotojų valdymas</h6>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="{{ route('profile.admEdit')}}" class="btn btn-outline-secondary benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Mano paskyra</h6>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-3">
                <a href="{{ url('/')}}" class="btn btn-outline-secondary benefit_item d-flex flex-row align-items-center">
                    <div class="benefit_icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    <div class="benefit_content">
                        <h6>Vartotojo vaizdas</h6>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection