@extends('layouts.template')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@endsection

@section('content')
<div class='container'>
    <p class='pt-4 pb-2'>Group near Los Angeles</p>

    <!-- meetup1 start -->
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/10/16/13/44/young-woman-1745173__340.jpg" alt="">
            </div>

            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>Meetup in Long Beach</p>
                    <p>Language A: Japanese</p>
                    <p>Language B: English</p>
                    <p>Capacity: 10</p>
                </div>
            </div>
        </div>
    </div>
    <!-- meetup1 end -->

    <!-- meetup2 start -->
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/08/16/19/07/los-angeles-1598750__340.jpg" alt="">
            </div>

            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>Meetup in DT Los Angeles</p>
                    <p>Language A: Korean</p>
                    <p>Language B: English</p>
                    <p>Capacity: 16</p>
                </div>
            </div>
        </div>
    </div>
    <!-- meetup2 end -->

    <!-- meetup3 start -->
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/08/16/17/32/hollywood-sign-1598473__340.jpg" alt="">
            </div>

            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>Meetup in HollyWood</p>
                    <p>Language A: English</p>
                    <p>Language B: Spanish</p>
                    <p>Capacity: 8</p>
                </div>
            </div>
        </div>
    </div>
    <!-- meetup3 end -->


    <!-- meetup4 start -->
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2015/10/12/22/01/lake-985226__340.jpg" alt="">
            </div>

            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>Meetup in Irvine</p>
                    <p>Language A: Japanese</p>
                    <p>Language B: Spanish</p>
                    <p>Capacity: 4</p>
                </div>
            </div>
        </div>
    </div>
    <!-- meetup4 end -->


    <!-- meetup5 start -->
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-5 col-6 d-flex justify-content-center align-items-center'>
                <img class="avator-meetup" src="https://cdn.pixabay.com/photo/2016/09/09/18/25/usa-1657783__340.jpg" alt="">
            </div>

            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>Meetup in Santa Monica</p>
                    <p>Language A: English</p>
                    <p>Language B: Spanish</p>
                    <p>Capacity: 20</p>
                </div>
            </div>
        </div>
    </div>
    <!-- meetup5 end -->

</div>

<div class='container'>
    <p class='pt-4 pb-2'>Members</p>

    <!-- user1 start -->
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                <img class="avator" src="https://i.pravatar.cc/150?img=2" alt="">
            </div>

            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>Shannon B.</p>
                    <p>Native language: Japanese</p>
                    <p>Nnown Languages: Chinese</p>
                    <p>Target Languages: English, French </p>
                </div>
            </div>
        </div>
    </div>
    <!-- user1 end -->

    <!-- user2 start -->
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                <img class="avator" src="https://i.pravatar.cc/150?img=12" alt="">
            </div>

            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>Robert</p>
                    <p>Native language: English</p>
                    <p>Nnown Languages: None</p>
                    <p>Target Languages: Japanese </p>
                </div>
            </div>
        </div>
    </div>
    <!-- user2 end -->

    <!-- user3 start -->
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                <img class="avator" src="https://i.pravatar.cc/150?img=51" alt="">
            </div>

            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>Toby T.</p>
                    <p>Native language: Spanish</p>
                    <p>Nnown Languages: None</p>
                    <p>Target Languages: Japanese </p>
                </div>
            </div>
        </div>
    </div>
    <!-- user3 end -->


    <!-- user4 start -->
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                <img class="avator" src="https://i.pravatar.cc/150?img=35" alt="">
            </div>

            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>Izzi Z.</p>
                    <p>Native language: Spanish</p>
                    <p>Nnown Languages: English</p>
                    <p>Target Languages: Japanese</p>
                </div>
            </div>
        </div>
    </div>
    <!-- user4 end -->


    <!-- user5 start -->
    <div class="card col-lg-8 my-1">
        <div class="card-body d-flex px-0">
            <div class='col-lg-2 col-3 d-flex justify-content-center align-items-center'>
                <img class="avator" src="https://i.pravatar.cc/150?img=25" alt="">
            </div>

            <div class='d-flex align-items-center'>
                <div>
                    <p class='fw-bold'>Chang K.</p>
                    <p>Native language: Chinese</p>
                    <p>Nnown Languages: Japanese</p>
                    <p>Target Languages: English</p>
                </div>
            </div>
        </div>
    </div>
    <!-- user5 end -->
</div>
@endsection