@extends('layouts.header')
@section('title', 'About Us')

@section('content')
    <h1 class="text-center mb-5 line">About Us</h1>
    <div class="row my-5 align-items-center">
        <div class="col-md-5 offset-md-1">
            <img src="{{ asset('img/aboutUs.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-4">
            <h3 class="mb-4">Blog Tourism of Indonesia</h3>
            <p class="text-justify">Blog Tourism of Indonesia is a blog for users to write their travelling experience when
                enjoying Indonesia
                tourism. There are so many categories such as Beach, Forest, and Mountain.</p>

            <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, ut ea. Facilis eius
                commodi unde non veniam quas iste, quaerat cumque sequi consequatur quos nostrum nobis laborum, fugit enim
                eveniet? Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatum nobis eligendi
                architecto, tempora commodi facilis voluptates maiores deserunt sapiente labore sequi quae quam ad vel
                exercitationem aliquam similique. Minus.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7 offset-md-1">
            <h2 class="mb-3 line">Goals & Mission</h2>
            <ul>
                <li>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit perferendis, quae
                        porro dolorum natus nemo facere officia reiciendis minima reprehenderit consectetur sapiente eum
                        doloribus assumenda voluptatibus officiis earum! Laborum, veritatis!</p>
                </li>
                <li>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit perferendis, quae
                        porro dolorum natus nemo facere officia reiciendis minima reprehenderit consectetur sapiente eum
                        doloribus assumenda voluptatibus officiis earum! Laborum, veritatis!</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="my-5">
        <img src="{{ asset('img/break.jpg') }}" class="img-fluid" alt="">
    </div>

    <h1 class="text-center my-5 line">My Profile</h1>
    <div class="row">
        <div class="col-md-5 offset-md-4 row">
            <div class="col-md-6">
                <p><Strong>Name</Strong></p>
                <p><Strong>NIM</Strong></p>
                <p><Strong>Class</Strong></p>
                <p><Strong>Phone Number</Strong></p>
                <p><Strong>Email</Strong></p>
                <p><Strong>Lecturer</Strong></p>
            </div>
            <div class="col-md-6">
                <p>: ALBERT</p>
                <p>: 2201751064</p>
                <p>: LI01</p>
                <p>: 081362673324</p>
                <p>: albert025@binus.ac.id</p>
                <p>: JUNITA JUWITA SIREGAR</p>
            </div>
        </div>
    </div>
@endsection
