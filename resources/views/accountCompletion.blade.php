@extends('master')
@section('page-specific-css')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
@endsection

@section('body')

 <div class="bg-cover-custom ">
    <div class="bg-cover-custom flex justify-center items-start min-h-screen p-4">
        <div class="bg-white p-8 rounded shadow-md max-w-md md:max-w-md lg:max-w-lg w-full mt-4">
            <h1 class="text-4xl font-bold mb-4">Welcome to your new Identity Protection Program!</h1>
            <p class="text-gray-400 mb-4">We are now monitoring the following information:</p>
            <ul class="mb-4">
                <li class="flex items-center mb-2">
                    <i class="fas fa-check-circle mr-2" style="color: #afd440"></i>
                    <span class="text-gray-700">Name:</span>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-check-circle  mr-2" style="color: #afd440"></i>
                    <span class="text-gray-700">Username:</span>
                </li>
            </ul>
            <div class=" p-4 rounded mb-4" style="background-color: #E7E5DF">
                <h2 class="text-2xl font-semibold mb-2">What's next?</h2>
                <p class="text-gray-400 mb-4">To further enhance your protection, add more monitoring items.</p>
                <button class="bg-primary text-white py-1 px-3 rounded w-full">Add Monitoring Items</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-specific-js')
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        function togglePasswordVisibility(id) {
            const passwordField = document.getElementById(id);
            const eyeIcon = passwordField.nextElementSibling.querySelector('i');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.add('fa-eye');
                eyeIcon.classList.remove('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.add('fa-eye');
                eyeIcon.classList.remove('fa-eye-slash');
            }
        }
    </script>

@endsection
