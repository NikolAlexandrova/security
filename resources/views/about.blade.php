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
            color: #404A66;
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
    </style>
</head>

<body class="font-sans bg-gray-50">
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
        <div class="lg:w-1/2 relative mb-8 lg:mb-0 overflow-hidden rounded-lg shadow-lg hover-card fade-in-box" style="animation-delay: 0.2s;">
            <div class="rounded-lg overflow-hidden">
                <img src="{{ asset('images/defense.jpeg') }}" alt="Person Image" class="w-full transition duration-300 ease-in-out transform hover:scale-110">
            </div>
            <div class="absolute top-0 left-0 bg-gradient-to-b from-transparent to-black w-full h-full opacity-50 transition duration-300 ease-in-out"></div>
            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center transition duration-300 ease-in-out opacity-0 hover:opacity-100">
                <h2 class="title text-white text-center">Meet John Doe</h2>
            </div>
        </div>
        <div class="lg:w-2/3 lg:pl-20 fade-in-box" style="animation-delay: 0.4s;">
            <div class="text-container bg-white rounded-lg p-6 lg:p-8 card-shadow">
                <h2 class="title">Title</h2>
                <p class="text-gray-800 leading-relaxed">John Doe is an esteemed figure in the realm of security, boasting an illustrious career spanning more than a decade. With a proven track record of success, John has navigated the complexities of the security landscape with finesse and precision. Throughout his tenure, he has spearheaded a myriad of high-stakes endeavors, deploying innovative strategies to mitigate risks and safeguard assets.</p>
                <p class="text-gray-800 leading-relaxed mt-4">Renowned for his unwavering commitment to excellence, John approaches each project with meticulous attention to detail and an unwavering dedication to achieving optimal outcomes. His expertise extends beyond traditional security paradigms, encompassing a holistic understanding of emerging threats and vulnerabilities.</p>
                <p class="text-gray-800 leading-relaxed mt-4">A consummate professional, John is revered for his ability to forge strong relationships with clients, earning their trust through transparent communication and proactive problem-solving. His innate ability to anticipate challenges and devise effective solutions has earned him accolades within the industry, positioning him as a trusted advisor and confidant to businesses of all sizes.</p>
            </div>
        </div>
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
        <p class="text-gray-700">At GSAHS, our mission is to ensure the safety and security of your operations, assets, and people. We believe that a secure environment is the foundation of any successful enterprise, and we are dedicated to providing advanced security solutions that safeguard against today’s ever-evolving threats. Our team of highly trained professionals brings decades of experience in intelligence, counter-terrorism, and security operations to the table, enabling us to handle complex security challenges with unmatched expertise.</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow hover-card card-shadow fade-in-box" style="animation-delay: 0.4s;">
        <h2 class="subtitle">Our Vision</h2>
        <p class="text-gray-700">Our vision is to be the world's leading provider of strategic security solutions, recognized for our unwavering integrity, innovative approaches, and enduring commitment to our clients' safety. We aim to continuously evolve our services to stay ahead of global security trends and to provide peace of mind in an uncertain world.</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow hover-card card-shadow fade-in-box" style="animation-delay: 0.6s;">
        <h2 class="subtitle">Our Values</h2>
        <p class="text-gray-700">Integrity and Confidentiality: At the heart of our operations lies a staunch commitment to ethical conduct and maintaining the confidentiality of our clients. Reliability: We pride ourselves on the consistency and dependability of our services, ensuring you can rely on us when it matters most. Proactivity: Our proactive approach in assessing threats and planning accordingly ensures that we stay ahead of risks, providing security that is as dynamic as the world around us.</p>
    </div>
</div>

<!-- Additional Sections -->
<div class="container mx-auto px-6 lg:px-12 py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    <div class="bg-white p-6 rounded-lg shadow hover-card card-shadow fade-in-box" style="animation-delay: 0.8s;">
        <h2 class="subtitle">Quality Assurance</h2>
        <p class="text-gray-700">We guarantee high standards in all our services, ensuring reliability and efficiency.</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow hover-card card-shadow fade-in-box" style="animation-delay: 1s;">
        <h2 class="subtitle">Client Focus</h2>
        <p class="text-gray-700">We are committed to meeting the specific needs of our clients, ensuring their utmost satisfaction.</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow hover-card card-shadow fade-in-box" style="animation-delay: 1.2s;">
        <h2 class="subtitle">Innovation</h2>
        <p class="text-gray-700">We embrace innovation, continuously seeking out new ways to enhance security and service delivery.</p>
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
