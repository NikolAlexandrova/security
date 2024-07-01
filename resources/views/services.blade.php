<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Our Services</title>
    <style>
        .hover-card:hover {
            transform: scale(1.05);
        }

        .hover-card {
            transition: transform 0.3s ease;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .scrolled {
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .scrolled .logo img {
            width: 80px;
        }

        .active-link {
            color: darkblue;
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
            animation: slideIn 0.3s forwards;
        }

        @keyframes slideIn {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        .nav-link {
            position: relative;
        }

        .nav-link:hover::after {
            content: '';
            position: absolute;
            height: 2px;
            background-color: black;
            left: 0;
            bottom: -2px;
            animation: slideIn 0.3s forwards;
        }

        .parallax {
            height: 70vh;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="font-sans bg-gray-100">

<nav class="fixed top-0 w-full z-50 bg-white shadow">
    <div class="flex justify-between items-center py-4 px-6">
        <div class="logo">
            <img src="{{ asset('images/security_logo-removebg-preview.png') }}" alt="Your Logo" class="w-24">
        </div>
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <div class="hidden md:flex space-x-4">
            <a href="{{ url('/') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('/') ? 'active-link' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('about') ? 'active-link' : '' }}">About</a>
            <a href="{{ url('/services') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('services') ? 'active-link' : '' }}">Services</a>
            <a href="{{ url('/contact') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('contact') ? 'active-link' : '' }}">Contact Us</a>
            <a href="{{ url('/faq') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('faq') ? 'active-link' : '' }}">FAQ</a>
        </div>
    </div>
    <div id="menu" class="hidden md:hidden">
        <a href="{{ url('/') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Home</a>
        <a href="{{ url('/about') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 {{ Request::is('about') ? 'active-link' : '' }}">About</a>
        <a href="{{ url('/services') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 {{ Request::is('services') ? 'active-link' : '' }}">Services</a>
        <a href="{{ url('/contact') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 {{ Request::is('contact') ? 'active-link' : '' }}">Contact Us</a>
        <a href="{{ url('/faq') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 {{ Request::is('faq') ? 'active-link' : '' }}">FAQ</a>
    </div>
</nav>

<section class="relative parallax" style="background-image: url('{{ asset('images/pexels-lukas-669283.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50 flex items-center justify-center">
        <section class="text-center text-white">
            <h1 class="text-5xl font-bold">Our Services</h1>
        </section>
    </div>
</section>

<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-6 md:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="hover-card bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/6712c3ca-de7e-4c62-8c66-73080665fb7b.jpeg') }}" alt="Service Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">IT Security</h3>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada, leo nec faucibus aliquam.</p>
                    <a href="#" class="text-teal-500 hover:underline">Learn More</a>
                </div>
            </div>
            <div class="hover-card bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/fingerprint-2904774_1280.jpg') }}" alt="Service Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Data Protection</h3>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada, leo nec faucibus aliquam.</p>
                    <a href="#" class="text-teal-500 hover:underline">Learn More</a>
                </div>
            </div>
            <div class="hover-card bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('images/kidnapping.jpeg') }}" alt="Service Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Risk Analysis</h3>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada, leo nec faucibus aliquam.</p>
                    <a href="#" class="text-teal-500 hover:underline">Learn More</a>
                </div>
            </div>
            <div class="hover-card bg-white rounded-lg shadow-lg overflow-hidden fade-in">
                <img src="{{ asset('images/defense.jpeg') }}" alt="Service Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Physical Security</h3>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada, leo nec faucibus aliquam.</p>
                    <a href="#" class="text-teal-500 hover:underline">Learn More</a>
                </div>
            </div>
            <div class="hover-card bg-white rounded-lg shadow-lg overflow-hidden fade-in">
                <img src="{{ asset('images/85e4311d-87a6-4221-826e-8d0184691b58.JPG') }}" alt="Service Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Security Training</h3>
                    <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada, leo nec faucibus aliquam.</p>
                    <a href="#" class="text-teal-500 hover:underline">Learn More</a>
                </div>
            </div>
            <div class="hover-card bg-white rounded-lg shadow-lg overflow-hidden fade-in">
                <img src="{{ asset('images/85e4311d-87a6-4221-826e-8d0184691b58.JPG') }}" alt="Service Image" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Surveillance Systems</h4>
                        <p class="text-gray-700 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas malesuada, leo nec faucibus aliquam.</p>
                        <a href="#" class="text-teal-500 hover:underline">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

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
                <p class="text-gray-400 mt-4">Global Security AHS ©️ 2007</p>
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
        window.addEventListener("scroll", function () {
            var nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }

            // Check for elements to animate on scroll
            var elementsToShow = document.querySelectorAll('.fade-in');
            elementsToShow.forEach(function (element) {
                if (isElementInViewport(element)) {
                    element.classList.add('visible');
                }
            });
        });

        document.getElementById('menu-toggle').onclick = function() {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        };

        // Add active class based on current page
        const navLinks = document.querySelectorAll('.nav-link');
        const currentPath = window.location.pathname.split('/').pop();

        navLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active-link');
            }
        });
    });

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
