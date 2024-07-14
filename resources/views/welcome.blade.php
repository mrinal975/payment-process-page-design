@extends('master')
@section('page-specific-css')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        .bg-cover-custom {
            background-image: url('assets/img/bg.jpg');
            background-size: cover;
            background-position: center;
        }
        .backdrop-blur {
            backdrop-filter: blur(8px);
        }
    </style>
@endsection

@section('body')


<div class="bg-cover-custom ">
    <div class="backdrop-blur flex justify-center items-start min-h-screen pt-10">
        <div class="bg-white p-5 shadow-md max-w-md w-full relative z-10 pt-8">
            <h1 class="text-4xl font-bold mb-4">Enroll in your complimentary ID Theft Protection</h1>
            <p class=" mb-4">
                <span class="text-gray-400">Please enter your 16-digit card number to confirm your eligibility.</span>
                <span class=" text-gray-500 font-semibold">We do not store your card number, and you will not be charged for this service.</span>
            </p>
            <form>
                <label for="card-number" class="block text-gray-700 mb-2">16-Digit Card Number</label>
                <input type="text" id="card-number" name="card-number" maxlength="16" class="border border-red-500 p-2 w-full rounded mb-4" placeholder="****************">
                <button type="submit" class="bg-red-500 text-white py-1 px-4 rounded w-full mb-3">Verify</button>
            </form>
            <div class="">
                <p class="text-gray-700 pb-2">Already have an account?</p>
                <div class="text-center border-2 border-red-300 rounded w-full">
                    <button class="font-semibold mt-1 mb-1 text-red-300">Log In</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-specific-js')
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

@endsection
