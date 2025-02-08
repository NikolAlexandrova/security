<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Surveillance systems</title>

</head>
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
    .modern-button {
        background: linear-gradient(90deg, #6b6c4d, #8b8c6d);
        padding: 10px 20px; /* Reduced padding */
        font-size: 1rem; /* Reduced font size */
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
<body class="font-sans bg-gray-100">

<nav class="fixed top-0 w-full z-50 bg-white shadow">
    <div class="flex justify-between items-center py-4 px-6">
        <div class="logo">
            <img src="images/security_logo-removebg-preview.png" alt="Your Logo" class="w-24">
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

<section class="relative parallax" style="background-image: url('images/pexels-lukas-669283.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <section class="text-center z-10">
            <h1 class="text-5xl font-bold text-white text-outline">Surveillance Systems</h1>
        </section>
    </div>
</section>


<section class="relative py-16 bg-gradient-to-br from-[#6b6c4d] via-gray-300 to-gray-200">
    <div class="absolute inset-0 bg-gray-200 opacity-80"></div>
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center text-gray-800">
            <h2 class="text-5xl font-bold tracking-wide leading-tight">Our Premium Surveillance Systems</h2>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Secure your assets with our state-of-the-art surveillance systems that are tailored to fit your specific needs.
            </p>
        </div>
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Service 1 -->
            <div class="bg-white bg-opacity-90 shadow-lg rounded-xl p-8 transform transition hover:scale-105">
                <div class="text-center">
                    <img src="{{ asset('images/pexels-brett-sayles-20783671.jpg') }}" alt="24/7 Monitoring" class="w-full h-56 object-cover rounded-t-lg">
                    <h3 class="text-2xl font-bold text-[#6b6c4d] mt-4">24/7 Monitoring</h3>
                    <p class="mt-3 text-gray-500">Our continuous surveillance ensures that your property is monitored around the clock, providing immediate response in case of any incidents.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="bg-white bg-opacity-90 shadow-lg rounded-xl p-8 transform transition hover:scale-105">
                <div class="text-center">
                    <img src="{{ asset('images/pexels-dom-j-7304-354062.jpg') }}" alt="CCTV Installation" class="w-full h-56 object-cover rounded-t-lg">
                    <h3 class="text-2xl font-bold text-[#6b6c4d] mt-4">CCTV Installation</h3>
                    <p class="mt-3 text-gray-500">We provide expert CCTV installation that ensures comprehensive coverage of your property with high-definition surveillance equipment.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="bg-white bg-opacity-90 shadow-lg rounded-xl p-8 transform transition hover:scale-105">
                <div class="text-center">
                    <img src="{{ asset('images/pexels-jakubzerdzicki-27662879.jpg') }}" alt="Remote Access Systems" class="w-full h-56 object-cover rounded-t-lg">
                    <h3 class="text-2xl font-bold text-[#6b6c4d] mt-4">Remote Access Systems</h3>
                    <p class="mt-3 text-gray-500">Monitor your property remotely from any device, anywhere, with real-time alerts and control over your security systems.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-bold text-gray-800 leading-tight">Why Choose Us?</h2>
            <p class="mt-4 text-gray-600 max-w-xl mx-auto">Our surveillance solutions go beyond standard security, offering cutting-edge technology and a dedicated support team for your peace of mind.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mt-8">
            <div class="flex items-start space-x-4">
                <div class="bg-[#6b6c4d] text-white p-4 rounded-full shadow-lg">
                    <i class="fas fa-tools text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-2xl font-bold text-gray-800">Custom Solutions</h4>
                    <p class="mt-2 text-gray-600">We offer personalized surveillance systems to meet the unique demands of each client, whether for homes, businesses, or large-scale operations.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="bg-[#6b6c4d] text-white p-4 rounded-full shadow-lg">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-2xl font-bold text-gray-800">Top-Notch Security</h4>
                    <p class="mt-2 text-gray-600">With years of experience, we specialize in providing the most reliable security solutions available, backed by the latest technologies.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="bg-[#6b6c4d] text-white p-4 rounded-full shadow-lg">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-2xl font-bold text-gray-800">Expert Team</h4>
                    <p class="mt-2 text-gray-600">Our highly trained professionals are here to assist with every step of the installation, ensuring a smooth and effective security solution.</p>
                </div>
            </div>
            <div class="flex items-start space-x-4">
                <div class="bg-[#6b6c4d] text-white p-4 rounded-full shadow-lg">
                    <i class="fas fa-check-circle text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-2xl font-bold text-gray-800">Proven Results</h4>
                    <p class="mt-2 text-gray-600">Our clients enjoy unparalleled protection, with effective surveillance solutions that have proven successful in real-world scenarios.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-16 bg-gradient-to-r from-[#6b6c4d] to-gray-500 text-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-bold">What Our Clients Say</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white bg-opacity-10 rounded-xl p-6 shadow-lg">
                <p class="text-lg italic">“Global Security AHS provided us with unmatched service and continuous monitoring that keeps our business secure at all times. Their team is professional and the system works flawlessly.”</p>
                <p class="mt-4 text-right font-bold">- Alex H., CEO of Prime Industries</p>
            </div>
            <div class="bg-white bg-opacity-10 rounded-xl p-6 shadow-lg">
                <p class="text-lg italic">“From installation to real-time monitoring, everything was top-notch. The remote access feature has been incredibly convenient while I’m away. I feel safer knowing Global Security AHS is watching over my property.”</p>
                <p class="mt-4 text-right font-bold">- Melissa W., Homeowner</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-5xl font-bold mb-6">Let Us Protect What Matters Most</h2>
        <p class="mb-8 max-w-2xl mx-auto">Contact Global Security AHS today to discuss how we can help secure your property with our advanced surveillance systems. Our experts are here to guide you every step of the way.</p>
        <a href="{{ url('/contact') }}" class="modern-button">Request a Free Consultation</a>
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
