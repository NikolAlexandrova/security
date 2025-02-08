<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Security Training</title>
    <style>
        .scrolled .logo img {
            width: 80px;
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

        .text-outline {
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
        }

        .accordion-button::after {
            content: '\002B';
            font-size: 1.5rem;
            float: right;
        }

        .accordion-button.active::after {
            content: '\2212';
        }

        .accordion-button {
            background-color: #6b6c4d;
            color: white;
        }

        .accordion-button:hover {
            background-color: #8c8d69; /* Lighter green color for hover */
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
            transform: scale(1.05);}
        /* Modern button style (Home page color) */
        .modern-button {
            background: linear-gradient(90deg, #6b6c4d, #8b8c6d); /* Gradient color from Home page */
            padding: 14px 28px; /* Original padding */
            font-size: 1.25rem; /* Font size */
            font-weight: bold;
            color: white;
            border: none;
            border-radius: 50px;
            transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
        }

        .modern-button:hover {
            transform: scale(1.1); /* Hover effect */
            box-shadow: 0 10px 20px rgba(107, 108, 77, 0.5);
            background: linear-gradient(90deg, #8b8c6d, #6b6c4d); /* Hover color effect */
        }

        /* Smaller button variant */
        .small-button {
            padding: 8px 16px; /* Reduced padding for smaller size */
            font-size: 1rem; /* Smaller font size */
            border-radius: 25px; /* Adjusted border radius */
        }
    </style>
</head>

<body class="font-sans bg-gray-100">

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
        <a href="{{ url('/contact') }}" class="modern-button small-button">Contact Us</a>
        <a href="{{ url('/faq') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">FAQ</a>
    </div>
</nav>

<section class="relative parallax" style="background-image: url('images/pexels-lukas-669283.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <section class="text-center z-10">
            <h1 class="text-5xl font-bold text-white text-outline">Security Training</h1>
        </section>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h2 class="text-3xl font-bold mb-8">Security Training and Qualification Division</h2>
        <p class="text-gray-700 mb-12 max-w-3xl mx-auto">The Security Training and Qualification Division specializes in training security agents and units for a variety of missions, including VIP security, sensitive installations, aviation, maritime security, and more. We serve organizations globally, providing top-tier training tailored to specific needs.</p>
    </div>
</section>

<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 md:px-12">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-3xl font-bold mb-6 text-center">Our Training Programs</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/84e42356-6fac-4dc5-a127-c78d768bb2d8.jpg') }}" alt="Security Training" class="rounded-lg shadow-lg mb-4 w-full h-64 object-cover">
                    <h4 class="text-xl font-semibold mb-2">Comprehensive Security Training</h4>
                    <p class="text-gray-700 text-center">Our programs equip security personnel with the skills needed for top-notch protection and risk management.</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('Images/tacticall.jpeg') }}" alt="Tactical Training" class="rounded-lg shadow-lg mb-4 w-full h-64 object-cover">
                    <h4 class="text-xl font-semibold mb-2">Tactical Training</h4>
                    <p class="text-gray-700 text-center">Specialized training for tactical operations, including SWAT and special unit tactics, for high-stakes situations.</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/6712c3ca-de7e-4c62-8c66-73080665fb7b.jpeg') }}" alt="Sniper Training" class="rounded-lg shadow-lg mb-4 w-full h-64 object-cover">
                    <h4 class="text-xl font-semibold mb-2">Sniper Training</h4>
                    <p class="text-gray-700 text-center">Intensive sniper training programs for precision and accuracy, essential for high-stakes operations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12">
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
            <h3 class="text-3xl font-bold mb-6 text-center">Detailed Training Programs</h3>
            <button class="accordion-button w-full text-left py-4 px-6 bg-[#6b6c4d] hover:bg-[#8c8d69] text-white rounded-t-lg mb-2">SWAT Course (Sw56)</button>
            <div class="accordion-panel hidden bg-white p-4 rounded-b-lg mb-4">
                <p><strong>Course duration</strong> – Eight weeks</p>
                <p><strong>Purpose</strong> – training for all special units</p>
                <p><strong>Designed</strong> – special units, police units</p>
                <p><strong>Application Requirements</strong> – Passage and approval testing, Success in physical exams.</p>
            </div>

            <button class="accordion-button w-full text-left py-4 px-6 bg-[#6b6c4d] hover:bg-[#8c8d69] text-white rounded-t-lg mb-2">Special Tactics Units Training (sp28)</button>
            <div class="accordion-panel hidden bg-white p-4 rounded-b-lg mb-4">
                <p><strong>Course duration</strong> – Four weeks</p>
                <p><strong>Purpose</strong> – training for all police units</p>
                <p><strong>Designed</strong> – special units, police units</p>
                <p><strong>Application Requirements</strong> – Passage and approval testing, Success in physical exams.</p>
            </div>

            <button class="accordion-button w-full text-left py-4 px-6 bg-[#6b6c4d] hover:bg-[#8c8d69] text-white rounded-t-lg mb-2">Snipers Course (S14)</button>
            <div class="accordion-panel hidden bg-white p-4 rounded-b-lg mb-4">
                <p><strong>Course duration</strong> – Two weeks</p>
                <p><strong>Purpose</strong> – training for snipers</p>
                <p><strong>Designed</strong> – special units, police units, security units, army units.</p>
                <p><strong>Application Requirements</strong> – Passage and approval testing, Success in physical exams.</p>
            </div>

            <button class="accordion-button w-full text-left py-4 px-6 bg-[#6b6c4d] hover:bg-[#8c8d69] text-white rounded-t-lg mb-2">Refresher Snipers Course (S5)</button>
            <div class="accordion-panel hidden bg-white p-4 rounded-b-lg mb-4">
                <p><strong>Course duration</strong> – Five days</p>
                <p><strong>Purpose</strong> – training for advanced snipers</p>
                <p><strong>Designed</strong> – special units, police units, security units, army units.</p>
                <p><strong>Application Requirements</strong> – Passage and approval testing, Success in physical exams.</p>
            </div>

            <button class="accordion-button w-full text-left py-4 px-6 bg-[#6b6c4d] hover:bg-[#8c8d69] text-white rounded-t-lg mb-2">Combat Rappelling Course – "Monkeys" (Sn14)</button>
            <div class="accordion-panel hidden bg-white p-4 rounded-b-lg mb-4">
                <p><strong>Course duration</strong> – Two weeks</p>
                <p><strong>Purpose</strong> – training for combat with rappelling</p>
                <p><strong>Designed</strong> – special units, police units</p>
                <p><strong>Application Requirements</strong> – Passage and approval testing, Success in physical exams.</p>
            </div>

            <button class="accordion-button w-full text-left py-4 px-6 bg-[#6b6c4d] hover:bg-[#8c8d69] text-white rounded-t-lg mb-2">Refresher Combat Rappelling Course – "Monkeys" (Sn5)</button>
            <div class="accordion-panel hidden bg-white p-4 rounded-b-lg mb-4">
                <p><strong>Course duration</strong> – Five days</p>
                <p><strong>Purpose</strong> – training for combat with rappelling</p>
                <p><strong>Designed</strong> – special units, police units</p>
                <p><strong>Application Requirements</strong> – Passage and approval testing, Success in physical exams.</p>
            </div>
        </div>
    </div>
</section>

<footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <h3 class="text-2xl font-bold mb-4">Global<span class="text-teal-500">Security</span></h3>
                <p class="footer-links flex flex-col space-y-2">
                    <a href="index.html" class="hover:text-gray-400">Home</a>
                    <a href="about.html" class="hover:text-gray-400">About</a>
                    <a href="services.html" class="hover:text-gray-400">Services</a>
                    <a href="contact.html" class="hover:text-gray-400">Contact</a>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        window.addEventListener("scroll", function() {
            var nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }

            // Check for elements to animate on scroll
            var elementsToShow = document.querySelectorAll('.fade-in');
            elementsToShow.forEach(function(element) {
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

        // Accordion functionality
        var acc = document.getElementsByClassName("accordion-button");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                panel.classList.toggle("hidden");
            });
        }
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
