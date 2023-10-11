@extends('layouts.bakery')

@section('content')
    <div class='main-bg d-flex justify-content-center align-items-center'>
        <div class='container py-5 px-5 d-flex justify-content-center align-items-center'>

            <div class='col-8 py-5 text-center'>
                <h1 class='rem3 pb-3 text-white fw-bold'>WORLD-FAMOUS, DELICIOUSLY DECADENT COOKIES</h1>
                
                <a href="/menu">
                    <button type="button" class="mt-3 btn btn-primary btn-lg">SHOP NOW</button>
                </a>
            </div>

        </div>
    </div>

    <!-- promotion start -->
    <div class='promo-bg container my-5 py-5 text-white'>

        <div class='text-center'>
            <h2>COOKIES DAY SALE</h2>
            <p class='mt-3 rem4 promo-highlight fw-bold'><u>UP TO 50% OFF</u></p>
            <p class='rem1p5'>August 4 is National Chocolate Chip Cookie Day.</p>
        </div>

    </div>
    <!-- promotion end -->
@endsection