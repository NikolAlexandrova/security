<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Contact Us - Global Security</title>
    <style>
        .active-link {
            position: relative;
            font-weight: 600;
        }

        .active-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: black;
            bottom: -2px;
            left: 0;
        }

        .parallax-section {
            position: relative;
            height: 70vh; /* Adjusted height to make it smaller */
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        .parallax-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .content-section {
            background-color: white;
            padding-top: 6rem;
            padding-bottom: 6rem;
        }
    </style>
</head>

<body class="font-sans bg-gray-100">

<nav class="fixed top-0 w-full z-50 bg-white shadow">
    <div class="flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('images/security_logo-removebg-preview.png') }}" alt="Your Logo" class="w-24">
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-4">
            <a href="{{ url('/') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('/') ? 'active-link' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('about') ? 'active-link' : '' }}">About</a>
            <a href="{{ url('/services') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('services') ? 'active-link' : '' }}">Services</a>
            <a href="{{ url('/contact') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('contact') ? 'active-link' : '' }}">Contact Us</a>
            <a href="{{ url('/faq') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('faq') ? 'active-link' : '' }}">FAQ</a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="menu" class="hidden md:hidden">
        <a href="{{ url('/') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 {{ Request::is('/') ? 'active-link' : '' }}">Home</a>
        <a href="{{ url('/about') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 {{ Request::is('about') ? 'active-link' : '' }}">About</a>
        <a href="{{ url('/services') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 {{ Request::is('services') ? 'active-link' : '' }}">Services</a>
        <a href="{{ url('/contact') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 {{ Request::is('contact') ? 'active-link' : '' }}">Contact Us</a>
        <a href="{{ url('/faq') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 {{ Request::is('faq') ? 'active-link' : '' }}">FAQ</a>
    </div>
</nav>


<section class="relative parallax-section" style="background-image: url('{{ asset('images/pexels-lukas-669283.jpg') }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <section class="parallax-content text-center text-white">
            <h1 class="text-5xl font-bold">Contact Us</h1>
        </section>
    </div>
</section>

<div class="container mx-auto my-12 p-6 bg-white shadow-lg flex flex-col md:flex-row">
    <div class="left-col md:w-1/2 flex items-center justify-center">
        <img src="{{ asset('images/1e5b30d4-2bf2-4eba-b780-88080e827c6a.jpeg') }}" alt="Contact Us" class="rounded-lg shadow-lg w-full h-full object-cover">
    </div>
    <div class="right-col md:w-1/2 p-6">
        <h1 class="text-3xl font-bold mb-4">Get In Touch</h1>
        <p class="mb-6">Please ensure that all required fields marked with a red asterisk (*) are filled out.</p>

        @if(session('success'))
            <div class="bg-green-100 border-t border-b border-green-500 text-green-700 px-4 py-3" role="alert">
                <p class="font-bold">Success</p>
                <p class="text-sm">{{ session('success') }}</p>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3" role="alert">
                <p class="font-bold">Error</p>
                <p class="text-sm">{{ session('error') }}</p>
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="post" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-gray-700">Full name <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" placeholder="Your Full Name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
            </div>
            <div>
                <label for="email" class="block text-gray-700">Email Address <span class="text-red-500">*</span></label>
                <input type="email" id="email" name="email" placeholder="Your Email Address" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
            </div>
            <div>
                <label for="message" class="block text-gray-700">Message <span class="text-red-500">*</span></label>
                <textarea rows="6" placeholder="Your Message" id="message" name="message" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"></textarea>
            </div>
            <button type="submit" class="w-full px-4 py-2 bg-teal-500 text-white rounded-lg hover:bg-teal-700 transition duration-300">Send</button>
        </form>
    </div>
</div>

<footer class="footer-distributed bg-gray-800 text-white py-6">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <h3 class="text-2xl font-bold mb-4">Global<span class="text-teal-500">Security</span></h3>
                <p class="footer-links flex flex-col space-y-2">
                    <a href="{{ url('/') }}" class="hover:text-gray-400">Home</a>
                    <a href="{{ url('/about') }}" class="hover:text-gray-400">About</a>
                    <a href="{{ url('/services') }}" class="hover:text-gray-400">Services</a>
                    <a href="{{ url('/contact') }}" class="hover:text-gray-400">Contact</a>
                </p>
                <p class="text-gray-400 mt-4">Global Security AHS © 2007</p>
            </div>

            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <div class="mb-4">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>444 S. Cedros Ave, Solana Beach, California</span>
                </div>
                <div class="mb-4">
                    <i class="fas fa-phone mr-2"></i>
                    <span>+1 (849) 629-6056</span>
                </div>
                <div>
                    <i class="fas fa-envelope mr-2"></i>
                    <a href="mailto:support@company.com" class="hover:text-gray-400">support@company.com</a>
                </div>
            </div>

            <div class="w-full md:w-1/3">
                <h4 class="font-bold mb-2">About the company</h4>
                <p class="text-gray-400">Global Security AHS was created in 2007 by a team of Israeli experts who graduated from the special intelligence and security units of the state of Israel. Global Security AHS with its offices in Mexico and the US, operates throughout Latin America.</p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" target="_blank" class="text-white hover:text-gray-400">
                        <img src="{{ asset('images/facebook.jpeg') }}" alt="Facebook Icon" class="w-8 h-8">
                    </a>
                    <a href="#" target="_blank" class="text-white hover:text-gray-400">
                        <img src="{{ asset('images/instagram.jpeg') }}" alt="Instagram Icon" class="w-8 h-8">
                    </a>
                    <a href="#" target="_blank" class="text-white hover:text-gray-400">
                        <img src="{{ asset('images/linkedin.jpeg') }}" alt="LinkedIn Icon" class="w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const currentLocation = window.location.href;
        const menuItems = document.querySelectorAll('nav a');
        const menuLength = menuItems.length;
        for (let i = 0; i < menuLength; i++) {
            if (menuItems[i].href === currentLocation) {
                menuItems[i].classList.add("active-link");
            }
        }
        document.getElementById('menu-toggle').onclick = function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        };
    });

</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
