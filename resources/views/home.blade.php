<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Global Security</title>
    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- PNG Favicons -->
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">


    <!-- Apple Touch Icon (for iOS) -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

    <!-- Web Manifest -->
    <link rel="manifest" href="/site.webmanifest">

    <style>
        .hover-card:hover {
            transform: scale(1.05);
        }

        .hover-card {
            transition: transform 0.3s ease;
        }

        .fade {
            animation: fadeEffect 1.5s;
        }

        @keyframes fadeEffect {
            from {
                opacity: 0.4;
            }

            to {
                opacity: 1;
            }
        }

        .social-icons {
            position: absolute;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .social-icons a {
            display: block;
            width: 40px;
            height: 40px;
            color: black;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            background: transparent;
            transition: background 0.3s ease;
            font-size: 24px;
        }

        .social-icons a:hover {
            background: rgba(0, 0, 0, 0.1);
        }

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

        .nav-link {
            position: relative;
        }

        .nav-link:hover::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: black;
            bottom: -2px;
            left: 0;
            transition: width 0.3s;
        }

        .modern-button {
            background: linear-gradient(90deg, #6b6c4d, #8b8c6d);
            padding: 14px 28px;
            font-size: 1.25rem;
            font-weight: bold;
            color: white;
            border: none;
            border-radius: 50px;
            transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
        }

        .modern-button:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(107, 108, 77, 0.5);
            background: linear-gradient(90deg, #8b8c6d, #6b6c4d);
        }

        /* Navbar Styling */
        nav {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        nav.scrolled {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }

        /* Active link indicator */
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
            transition: width 0.3s ease-in-out;
        }

        .nav-link:hover::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: black;
            bottom: -2px;
            left: 0;
            transition: width 0.3s;
        }

        /* Contact Us Button */
        .bg-gradient-to-r {
            background: linear-gradient(90deg, rgba(13, 110, 253, 1) 0%, rgba(0, 191, 255, 1) 100%);
        }

        .bg-gradient-to-r:hover {
            background: linear-gradient(90deg, rgba(0, 191, 255, 1) 0%, rgba(13, 110, 253, 1) 100%);
        }

        nav.scrolled a.nav-link {
            color: black;
        }

        nav.scrolled .text-white {
            color: white;
        }

        .divider {
            margin: 20px 0;
            border-top: 3px solid white;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }
        .parallax {
            height: 70vh;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .small-button {
            padding: 8px 16px; /* Smaller padding */
            font-size: 1rem; /* Smaller font size */
            border-radius: 25px; /* Adjust radius if needed */
        }

        /* Contact Button Styles */
        .contact-button {
            background-color: #27ae60;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: bold;
            transition: background-color 0.3s ease-in-out, transform 0.3s ease;
        }

        .contact-button:hover {
            background-color: #1e8449;
            transform: scale(1.05);
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="font-sans bg-white">

<nav class="fixed top-0 w-full z-50 bg-white shadow-md">
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
        <div class="hidden md:flex space-x-4 items-center">
            <a href="{{ url('/') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('/') ? 'active-link' : '' }}">Home</a>
            <a href="{{ url('/about') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('about') ? 'active-link' : '' }}">About</a>
            <a href="{{ url('/services') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('services') ? 'active-link' : '' }}">Services</a>
            <a href="{{ url('/faq') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('faq') ? 'active-link' : '' }}">FAQ</a>
            <a href="{{ url('/contact') }}" class="modern-button small-button">Contact Us</a>
        </div>
    </div>
    <div id="menu" class="hidden md:hidden">
        <a href="{{ url('/') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Home</a>
        <a href="{{ url('/about') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">About</a>
        <a href="{{ url('/services') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Services</a>
        <a href="{{ url('/contact') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Contact Us</a>
        <a href="{{ url('/faq') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">FAQ</a>
    </div>
</nav>

<div id="menu" class="hidden md:hidden">
    <a href="{{ url('/') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Home</a>
    <a href="{{ url('/about') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">About</a>
    <a href="{{ url('/services') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Services</a>
    <a href="{{ url('/contact') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Contact Us</a>
    <a href="{{ url('/faq') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">FAQ</a>
</div>
</nav>

<!-- Slideshow Section -->
<section class="main-section relative h-screen bg-cover bg-center">
    <div class="slideshow-container absolute inset-0">
        <div class="mySlides fade absolute inset-0">
            <img src="{{ asset('images/mainimage.jpeg') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="mySlides fade absolute inset-0">
            <img src="{{ asset('images/1e5b30d4-2bf2-4eba-b780-88080e827c6a.jpeg') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="mySlides fade absolute inset-0">
            <img src="{{ asset('images/6712c3ca-de7e-4c62-8c66-73080665fb7b.jpeg') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white px-4 md:px-12 z-10">
            <div class="overlay-text">
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Global Security Advising</h1>
                <h1 class="text-5xl md:text-6xl font-bold mb-4">Homeland Solutions</h1>
                <p class="text-xl md:text-2xl mb-8">
                    <span class="font-bold">Your</span> Security, <span class="font-bold">Our</span> Priority
                </p>
                <div class="divider"></div>
                <a href="{{ url('/contact') }}" class="modern-button">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section bg-gray-100 py-12" id="aboutSection">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6 md:px-12">
        <div class="about-content md:w-1/2 mb-8 md:mb-0 md:pr-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">About Us</h2>
            <p class="text-gray-700 mb-4">Global Security AHS, founded in 2007 by Israeli security experts, operates throughout Latin America with offices in the Dominican Republic and the U.S. Our company specializes in tailored physical security solutions for sensitive facilities and events, leveraging extensive experience from Israel's intelligence units to meet the unique needs of each client. We focus on integrating security seamlessly into business environments to enhance efficiency and standards.</p>
            <div class="divider"></div>
            <a href="{{ url('/about') }}" class="modern-button">Learn More</a>
        </div>
        <div class="about-image md:w-1/2 slide-in-from-right visible">
            <img src="{{ asset('images/1e5b30d4-2bf2-4eba-b780-88080e827c6a.jpeg') }}" alt="About Us Image" class="rounded-lg shadow-lg">
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="help-section py-8">
    <div class="container mx-auto text-center px-4 md:px-10">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">How We Can Help You</h2>
        <p class="text-gray-700 mb-8">At Global Security AHS, we provide tailored security solutions for your unique needs. Our experts specialize in safeguarding facilities and events, offering services like risk assessments, security planning, and on-site management. Whether protecting airports, power plants, hotels, or offices, we ensure top-tier security with a proactive, integrated approach. Our strategies enhance your business operations and provide peace of mind, allowing your business to thrive securely.</p>

        <div class="image-gallery grid grid-cols-1 md:grid-cols-3 gap-3 mb-3">
            <div class="hover-card rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('Images/WhatsApp Image 2025-02-06 at 13.57.04.jpeg') }}" alt="Image 1" class="w-full h-full object-cover">
            </div>
            <div class="hover-card rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('Images/WhatsApp Image 2025-02-06 at 13.57.05 (2).jpeg') }}" alt="Image 2" class="w-full h-full object-cover">
            </div>
            <div class="hover-card rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('Images/WhatsApp Image 2025-02-06 at 13.57.05.jpeg') }}" alt="Image 3" class="w-full h-full object-cover">
            </div>
        </div>

        <div class="divider"></div>
        <a href="{{ url('/contact') }}" class="modern-button">Learn More</a>
    </div>
</section>

<!-- Footer -->
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
                    <span>Dominican Republic, Santo Domingo</span>
                </div>
                <div class="mb-4">
                    <i class="fas fa-phone mr-2"></i>
                    <span>+1(849) 455-7733</span>
                </div>
                <div>
                    <i class="fas fa-envelope mr-2"></i>
                    <a href="mailto:zelig.ron@gmail.com" class="hover:text-gray-400">zelig.ron@gmail.com</a>
                </div>
            </div>

            <div class="w-full md:w-1/3">
                <h4 class="font-bold mb-2">About the company</h4>
                <p class="text-gray-400">Global Security AHS was created in 2007 by a team of Israeli experts who graduated from the special intelligence and security units of the state of Israel. Global Security AHS with its offices in Mexico and the US, operates throughout Latin America.</p>

            </div>
        </div>
    </div>
</footer>

<!-- JavaScript for Scroll and Navbar Effect -->
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex - 1].style.display = "block";
    }

    document.addEventListener("DOMContentLoaded", function () {
        window.addEventListener("scroll", function () {
            var nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }

            // Check for elements to animate on scroll
            var elementsToShow = document.querySelectorAll('.appear-on-scroll, .slide-in-from-right');
            elementsToShow.forEach(function (element) {
                if (isElementInViewport(element)) {
                    element.classList.add('visible');
                }
            });
        });

        document.getElementById('menu-toggle').onclick = function () {
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

</body>

</html>
