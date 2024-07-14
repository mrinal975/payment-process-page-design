@extends('master')
@section('page-specific-css')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
          <style>
        .progress-bar-container {
            display: flex;
            align-items: center;
            margin-top: 0.25rem;
        }
        .progress-bar {
            flex-grow: 1;
            height: 0.5rem;
            border-radius: 0.25rem;
            background-color: #e5e7eb; /* gray-200 */
            position: relative;
        }
        .progress-bar-fill {
            height: 100%;
            border-radius: 0.25rem;
            background-color: #ef4444; /* red-500 */
            width: 0;
            transition: width 0.3s ease-in-out;
        }
        .lock-icon {
            margin-left: 0.5rem;
        }
          </style>
@endsection

@section('body')

 <div class="bg-cover-custom ">
    <div class="backdrop-blur flex justify-center items-start min-h-screen pt-10">
        <div class="bg-white p-5 shadow-md max-w-xs md:max-w-md lg:max-w-lg w-full relative z-10 pt-8">
            <h1 class="text-3xl font-bold mb-4">Create Account</h1>
            <p class="text-gray-400 mb-4">Enter your information below to create your account.</p>
            <form class="pb-4">
                <label for="email" class="block text-gray-700 mb-2">Email</label>
                <input type="email" id="email" name="email" class="border border-gray-300 p-2 w-full rounded mb-4" placeholder="Email" autocomplete="email">

                <label for="first-name" class="block text-gray-700 mb-2">First Name</label>
                <input type="text" id="first-name" name="first-name" class="border border-gray-300 p-2 w-full rounded mb-4" placeholder="First Name">

                <label for="last-name" class="block text-gray-700 mb-2">Last Name</label>
                <input type="text" id="last-name" name="last-name" class="border border-gray-300 p-2 w-full rounded mb-4" placeholder="Last Name">

                <label for="password" class="block text-gray-700 mb-2">Password</label>
                <div class="relative mb-4">
                    <input type="password" id="password" autocomplete="new-password" name="password" class="border border-gray-300 p-2 w-full rounded pr-10"
                    oninput="checkPasswordStrength()" placeholder="Password">
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" onclick="togglePasswordVisibility('password')">
                        <i class="fas fa-eye text-gray-500"></i>
                    </span>

                </div>
                <div class="progress-bar-container pb-2">
                    <div class="progress-bar">
                        <div id="password-strength-bar" class="progress-bar-fill"></div>
                    </div>
                    <span id="password-lock-icon" class="lock-icon text-red-500">
                        <i class="fas fa-lock-open"></i>
                    </span>
                </div>
                <label for="confirm-password" class="block text-gray-700 mb-2">Confirm Password</label>
                <div class="relative mb-4">
                    <input type="password" id="confirm-password" name="confirm-password" class="border border-gray-300 p-2 w-full rounded pr-10"
                    autocomplete="new-password"
                    >
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" onclick="togglePasswordVisibility('confirm-password')">
                        <i class="fas fa-eye-slash text-gray-500"></i>
                    </span>
                </div>
                <div class="">
                    <p class="text-gray-500 pb-2">Accept Therms and Conditions</p>
                </div>

                <div class="flex items-start mb-4">
                    <input type="checkbox" id="terms" name="terms" class="mt-1">
                    <label for="terms" class="ml-2 text-gray-700">I accept the <a href="#" class="text-primary">Terms of Service</a>, <a href="#" class="text-primary">Terms and Conditions</a>, and <a href="#" class="text-primary">Privacy Policy</a></label>
                </div>

                <button type="submit" class="bg-primary text-white py-1 px-4 rounded w-full">Submit</button>
            </form>

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
        function checkPasswordStrength() {
            const password = document.getElementById('password').value;
            const strengthBar = document.getElementById('password-strength-bar');
            let strength = 0;

            if (password.length >= 6) strength += 1;
            if (password.match(/[a-z]+/)) strength += 1;
            if (password.match(/[A-Z]+/)) strength += 1;
            if (password.match(/[0-9]+/)) strength += 1;
            if (password.match(/[\W_]+/)) strength += 1;

            switch (strength) {
                case 0:
                    strengthBar.style.width = '0%';
                    strengthBar.className = 'h-full rounded bg-red-500';
                    break;
                case 1:
                    strengthBar.style.width = '20%';
                    strengthBar.className = 'h-full rounded bg-red-500';
                    break;
                case 2:
                    strengthBar.style.width = '40%';
                    strengthBar.className = 'h-full rounded bg-yellow-500';
                    break;
                case 3:
                    strengthBar.style.width = '60%';
                    strengthBar.className = 'h-full rounded bg-yellow-500';
                    break;
                case 4:
                    strengthBar.style.width = '80%';
                    strengthBar.className = 'h-full rounded bg-green-500';
                    break;
                case 5:
                    strengthBar.style.width = '100%';
                    strengthBar.className = 'h-full rounded bg-green-500';
                    break;
            }
            if(strength > 4) {
                document.querySelector('#password-lock-icon i').classList.remove('fa-lock-open');
                document.querySelector('#password-lock-icon i').classList.add('fa-lock');
                document.getElementById('password-lock-icon').classList.remove('text-red-500');
                document.getElementById('password-lock-icon').classList.add('text-green-500');
            }
        }

    </script>

@endsection
