<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Physical Security</title>
    <style>
        /* Parallax background effect */
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .scrolling-logos-wrapper {
            position: relative;
            height: 150px; /* Increased height for larger logos */
            overflow: hidden;
        }

        .scrolling-logos {
            display: flex;
            animation: scroll 60s linear infinite; /* Speed up animation */
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .logo-item {
            flex: 0 0 auto;
            margin-right: 3rem; /* Adjusted margin for spacing */
        }

        .logo-item img {
            width: 200px; /* Increased width */
            height: 200px; /* Increased height */
            object-fit: contain; /* Ensures images maintain their aspect ratio */
        }

        .services-container {
            display: flex;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scroll-snap-type: x mandatory;
            position: relative;
        }

        .service-card {
            scroll-snap-align: start;
            flex: 0 0 auto;
            width: 300px; /* Set a fixed width for each card */
            margin-right: 1rem;
            background-color: #6b6c4d; /* Green color for all cards */
        }

        .border-green {
            border-top: 2px solid #6b6c4d;
        }

        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: #6b6c4d;
            cursor: pointer;
            z-index: 10;
        }

        .arrow-left {
            left: 0;
        }

        .arrow-right {
            right: 0;
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
            <a href="{{ url('/contact') }}" class="contact-button">Contact Us</a>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="menu" class="hidden md:hidden bg-white shadow-md">
        <a href="{{ url('/') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Home</a>
        <a href="{{ url('/about') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">About</a>
        <a href="{{ url('/services') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Services</a>
        <a href="{{ url('/contact') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Contact Us</a>
        <a href="{{ url('/faq') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">FAQ</a>
    </div>
</nav>



<section class="relative h-[70vh] parallax bg-cover bg-center" style="background-image: url('Images/pexels-lukas-669283.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <section class="text-center z-10">
            <h1 class="text-5xl font-bold text-white text-outline">Physical Security</h1>
        </section>
    </div>
</section>

<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 md:px-12 text-center relative">
        <h3 class="text-3xl font-bold mb-12">Our Physical Security Services Include</h3>
        <div class="arrow arrow-left" id="arrow-left">&#9664;</div>
        <div class="services-container" id="services-container">
            <!-- Service Card 1 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Security Study</h4>
                    <p class="text-gray-200">Comprehensive analysis and assessment of security needs.</p>
                </div>
            </div>
            <!-- Service Card 2 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Loss Prevention Risk Analysis</h4>
                    <p class="text-gray-200">Strategies to prevent loss and manage risks effectively.</p>
                </div>
            </div>
            <!-- Service Card 3 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Gap Analysis Master Planning</h4>
                    <p class="text-gray-200">Identify and bridge gaps in current security measures.</p>
                </div>
            </div>
            <!-- Service Card 4 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Design of Security Details</h4>
                    <p class="text-gray-200">Detailed design and implementation of security protocols.</p>
                </div>
            </div>
            <!-- Service Card 5 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Security Training Control & Audit Implementation</h4>
                    <p class="text-gray-200">Comprehensive training programs and audit controls.</p>
                </div>
            </div>
            <!-- Service Card 6 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Risk Management</h4>
                    <p class="text-gray-200">Effective strategies to manage and mitigate risks.</p>
                </div>
            </div>
            <!-- Service Card 7 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">End-to-End Solutions</h4>
                    <p class="text-gray-200">Comprehensive security solutions from start to finish.</p>
                </div>
            </div>
            <!-- Service Card 8 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Executive Security</h4>
                    <p class="text-gray-200">Personalized security services for executives.</p>
                </div>
            </div>
            <!-- Service Card 9 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Facility Security IT</h4>
                    <p class="text-gray-200">IT security solutions for facilities.</p>
                </div>
            </div>
            <!-- Service Card 10 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Security Infidelity Checks</h4>
                    <p class="text-gray-200">Investigation and verification services.</p>
                </div>
            </div>
            <!-- Service Card 11 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Private/Government Escort Training Courses</h4>
                    <p class="text-gray-200">Specialized training for escort services.</p>
                </div>
            </div>
            <!-- Service Card 12 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Safety Manager Training</h4>
                    <p class="text-gray-200">Training programs for safety managers.</p>
                </div>
            </div>
            <!-- Service Card 13 -->
            <div class="service-card rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <h4 class="text-xl font-semibold mb-2 text-white">Training of High-Risk Individuals</h4>
                    <p class="text-gray-200">Specialized training for high-risk individuals.</p>
                </div>
            </div>
        </div>
        <div class="arrow arrow-right" id="arrow-right">&#9654;</div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-8">Who do we provide our services for?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-center">
            <ul class="text-xl md:text-2xl text-gray-700 list-disc list-inside space-y-2">
                <li>Critical Infrastructure</li>
                <li>Aviation</li>
                <li>Governments</li>
                <li>Hotels</li>
            </ul>
            <ul class="text-xl md:text-2xl text-gray-700 list-disc list-inside space-y-2">
                <li>Schools / Universities</li>
                <li>Protection VIP</li>
                <li>Sport Events Protection</li>
            </ul>
        </div>
    </div>
</section>


<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h3 class="text-3xl font-bold mb-12">Alliances</h3>
        <div class="scrolling-logos-wrapper">
            <div class="scrolling-logos flex space-x-12">
                <div class="logo-item"><img src="Images/MER_Group_logo.png" alt="MER Group"></div>
                <div class="logo-item"><img src="Images/iafis.jpg" alt="IAFIS"></div>
                <div class="logo-item"><img src="Images/orad.png" alt="ORAD"></div>
                <div class="logo-item"><img src="Images/1578846.png" alt="IAI"></div>
                <div class="logo-item"><img src="Images/integrity.png" alt="Integrity Meter"></div>
                <div class="logo-item"><img src="Images/kazuar.png" alt="Benchmark"></div>
                <div class="logo-item"><img src="Images/MER_Group_logo.png" alt="MER Group"></div>
                <div class="logo-item"><img src="Images/iafis.jpg" alt="IAFIS"></div>
                <div class="logo-item"><img src="Images/orad.png" alt="ORAD"></div>
                <div class="logo-item"><img src="Images/1578846.png" alt="IAI"></div>
                <div class="logo-item"><img src="Images/integrity.png" alt="Integrity Meter"></div>
                <div class="logo-item"><img src="Images/kazuar.png" alt="Benchmark"></div>
            </div>
        </div>
    </div>
</section>




<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h3 class="text-3xl md:text-4xl font-bold mb-6">Our Project Circle</h3>
        <p class="text-gray-700 mb-8 text-lg md:text-xl">Here's how we work with organizations to create a proactive security plan that covers all bases:</p>
        <div class="flex flex-col md:flex-row justify-center">
            <div class="w-full md:w-32 h-32 bg-[#6b6c4d] text-white rounded-full flex items-center justify-center mb-4 md:m-4">
                <span class="text-lg md:text-base">Assessment</span>
            </div>
            <div class="w-full md:w-32 h-32 bg-[#6b6c4d] text-white rounded-full flex items-center justify-center mb-4 md:m-4">
                <span class="text-lg md:text-base">Consultant</span>
            </div>
            <div class="w-full md:w-32 h-32 bg-[#6b6c4d] text-white rounded-full flex items-center justify-center mb-4 md:m-4">
                <span class="text-lg md:text-base">Investigations</span>
            </div>
            <div class="w-full md:w-32 h-32 bg-[#6b6c4d] text-white rounded-full flex items-center justify-center mb-4 md:m-4">
                <span class="text-lg md:text-base">Training</span>
            </div>
            <div class="w-full md:w-32 h-32 bg-[#6b6c4d] text-white rounded-full flex items-center justify-center mb-4 md:m-4">
                <span class="text-lg md:text-base">Operation</span>
            </div>
        </div>
    </div>
</section>



<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h3 class="text-3xl font-bold mb-6">Global Security Consulting Audits & Designs</h3>
        <ul class="text-left text-xl text-gray-700 list-disc list-inside max-w-3xl mx-auto space-y-2">
            <li><strong>Basic Security Review</strong></li>
            <li><strong>Security Audit</strong></li>
            <li><strong>Strategic Consulting</strong></li>
            <li><strong>Crisis Management & Support</strong></li>
            <li><strong>Business Continuity Management</strong></li>
        </ul>
    </div>
</section>

<footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <h3 class="text-2xl font-bold mb-4">Global<span class="text-teal-500">Security</span></h3>
                <p class="flex flex-col space-y-2 text-gray-300">
                    <a href="{{ url('/') }}" class="hover:text-gray-400">Home</a>
                    <a href="{{ url('/about') }}" class="hover:text-gray-400">About</a>
                    <a href="{{ url('/services') }}" class="hover:text-gray-400">Services</a>
                    <a href="{{ url('/contact') }}" class="hover:text-gray-400">Contact</a>
                </p>
                <p class="text-gray-400 mt-4">Global Security AHS ©️ 2007</p>
            </div>

            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <div class="flex items-center mb-4">
                    <i class="fas fa-map-marker-alt mr-2"></i>
                    <span>444 S. Cedros Ave, Solana Beach, California</span>
                </div>
                <div class="flex items-center mb-4">
                    <i class="fas fa-phone mr-2"></i>
                    <span>+1 (849) 629-6056</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-envelope mr-2"></i>
                    <a href="mailto:support@company.com" class="hover:text-gray-400">support@company.com</a>
                </div>
            </div>

            <div class="w-full md:w-1/3">
                <h4 class="font-bold mb-2">About the company</h4>
                <p class="text-gray-400">Global Security AHS was created in 2007 by a team of Israeli experts who graduated from the special intelligence and security units of the state of Israel. Global Security AHS with its offices in Mexico and the US, operates throughout Latin America.</p>
                <div class="flex space-x-4 mt-4">
                    <a href="#" target="_blank" class="text-white hover:text-gray-400">
                        <img src="images/facebook.jpeg" alt="Facebook Icon" class="w-8 h-8">
                    </a>
                    <a href="#" target="_blank" class="text-white hover:text-gray-400">
                        <img src="images/instagram.jpeg" alt="Instagram Icon" class="w-8 h-8">
                    </a>
                    <a href="#" target="_blank" class="text-white hover:text-gray-400">
                        <img src="images/linkedin.jpeg" alt="LinkedIn Icon" class="w-8 h-8">
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
        });

        document.getElementById('menu-toggle').onclick = function () {
            var menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        };

        const servicesContainer = document.getElementById('services-container');
        const leftArrow = document.getElementById('arrow-left');
        const rightArrow = document.getElementById('arrow-right');

        leftArrow.addEventListener('click', () => {
            servicesContainer.scrollBy({
                left: -300,
                behavior: 'smooth'
            });
        });

        rightArrow.addEventListener('click', () => {
            servicesContainer.scrollBy({
                left: 300,
                behavior: 'smooth'
            });
        });
    });
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
