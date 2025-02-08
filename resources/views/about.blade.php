<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>About Us</title>
    <style>
        .hover-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .hover-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
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

        .active-link {
            color: #3f51b5;
            position: relative;
            font-weight: 600;
        }

        .active-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #3f51b5;
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
            background-color: #3f51b5;
            bottom: -2px;
            left: 0;
            transition: width 0.3s;
        }

        .card-shadow {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .fade-in-box {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s forwards;
        }
        .small-button {
            padding: 8px 16px; /* Smaller padding */
            font-size: 1rem; /* Smaller font size */
            border-radius: 25px; /* Adjust radius if needed */
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .title {
            font-size: 2rem;
            font-weight: 700;
            color: white;
            margin-bottom: 1rem;
        }

        .subtitle {
            font-size: 1.25rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .text-container h2 {
            margin-bottom: 1rem;
        }

        .parallax {
            height: 70vh;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
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
        }
        /* Reuse styles from the Home page */
        .modern-button {
            background: linear-gradient(90deg, #6b6c4d, #8b8c6d); /* Color from Home page */
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

        /* Add a smaller version */
        .small-button {
            padding: 8px 16px; /* Smaller padding */
            font-size: 1rem;  /* Reduced font size */
            border-radius: 25px; /* Adjust radius */
        }
    </style>
</head>

<body class="font-sans bg-gray-50">
<!-- Navigation Bar -->
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

<!-- Upper Image Section -->
<section class="relative parallax" style="background-image: url('{{ asset('images/pexels-lukas-669283.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-5xl font-bold text-white">ABOUT US</h1>
    </div>
</section>

<section class="bg-white py-12">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-6 lg:px-12">
        <div class="lg:w-1/2 relative mb-8 lg:mb-0 overflow-hidden rounded-lg shadow-lg hover-card fade-in-box" style="animation-delay: 0.2s; margin-left: -10px;">
            <div class="rounded-lg overflow-hidden">
                <img src="{{ asset('images/security about.jpeg') }}" alt="Person Image" class="w-full lg:w-full transition duration-300 ease-in-out transform hover:scale-110" style="width: 105%;">
            </div>
            <div class="absolute top-0 left-0 bg-gradient-to-b from-transparent to-black w-full h-full opacity-50 transition duration-300 ease-in-out"></div>
        </div>

        <div class="lg:w-2/3 lg:pl-10 fade-in-box" style="animation-delay: 0.4s;">
            <div class="text-container bg-white rounded-lg p-6 lg:p-8 card-shadow">
                <p class="text-gray-800 leading-relaxed"><strong>Who We Are</strong><br>
                    Global Security AHS was created in 2007 by a team of Israeli experts who graduated from the special intelligence and security units of the State of Israel. Global Security AHS, with its offices in the Dominican Republic and the U.S., operates throughout Latin America. Its experts, in addition to years in the security service of the State of Israel, have extensive international experience in the civil context, adapting solutions to the specific needs of each client.
                </p>
                <p class="text-gray-800 leading-relaxed mt-4"><strong>Physical Security</strong><br>
                    Our physical security group plans and manages the protection of sensitive facilities and events around the world, from airports to power plants and from hotels to individual office buildings.
                </p>
                <p class="text-gray-800 leading-relaxed mt-4"><strong>Our Methodology</strong><br>
                    We view security as a business enabler and help create security environments that support our clients' unique businesses, needs, and cultures. Our process begins with the maintenance of the business and the functional continuity of the same, maintaining proactive and integrated. By incorporating planning and design into physical security designs and procedures, we create enhanced, easy-to-use security that maximizes efficiency and improves standards.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Video section -->
<!-- Video Section -->
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-6">Watch Our Introductory Video</h2>
        <div class="flex justify-center">
            <div class="relative w-full max-w-4xl aspect-video bg-black rounded-lg overflow-hidden shadow-lg">
                <!-- Local Video with Subtitles -->
                <video class="w-full rounded-lg" controls>
                    <source src="{{ asset('videos/6d756dd7-6a04-4f7c-8b66-3bf3ad7bbec8.MP4') }}" type="video/mp4">
                    <track src="{{ asset('videos/subtitles.vtt') }}" kind="subtitles" srclang="en" label="English">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <p class="text-center text-gray-600 mt-4">Explore who we are and what we do through this engaging short video.</p>
    </div>
</section>





<!-- Call to Action Section -->
<section class="bg-[#404A66] text-white py-12">
    <div class="container mx-auto text-center px-6">
        <h2 class="title text-3xl mb-4">Ready to Secure Your Future?</h2>
        <p class="mb-8">Contact us today to discuss how Global Security AHS can help protect your assets and ensure the safety of your operations.</p>
        <a href="{{ url('/contact') }}" class="bg-white text-blue-500 font-bold py-3 px-6 rounded-full hover:bg-gray-200 transition duration-300">Contact Us</a>
    </div>
</section>

<!-- Mission, Vision, Values Section -->
<div class="container mx-auto px-6 lg:px-12 py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <div class="bg-white p-6 rounded-lg shadow hover-card card-shadow fade-in-box" style="animation-delay: 0.2s;">
        <h2 class="subtitle">Our Mission</h2>
        <p class="text-gray-700">Our mission is to achieve a safe and reliable environment for our customers, with minimal interference in their daily lives, but ensuring maximum control of their security...</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow hover-card card-shadow fade-in-box" style="animation-delay: 0.4s;">
        <h2 class="subtitle">Our Vision</h2>
        <p class="text-gray-700">We have a different way of seeing things and approaching everyday life. We cannot invent what already exists, but we can see it in the right way, and break away from classic, often obsolete frameworks...</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow hover-card card-shadow fade-in-box" style="animation-delay: 0.6s;">
        <h2 class="subtitle">Our Values</h2>
        <p class="text-gray-700">Integrity and Confidentiality: At the heart of our operations lies a staunch commitment to ethical conduct and maintaining the confidentiality of our clients...</p>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-6 lg:px-12">
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

            </div>
        </div>
    </div>
</footer>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
    // Toggle mobile menu
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

    // Check for elements to animate on scroll
    window.addEventListener("scroll", function () {
        var elementsToShow = document.querySelectorAll('.fade-in-box');
        elementsToShow.forEach(function (element) {
            if (isElementInViewport(element)) {
                element.classList.add('visible');
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
