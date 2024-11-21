<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Risk Analysis</title>
    <style>
        .scrolled .logo img {
            width: 80px;
        }

        .text-outline {
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
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

        /* Animations */
        [data-aos] {
            opacity: 0;
            transition-property: transform, opacity;
        }

        [data-aos].aos-animate {
            opacity: 1;
        }

        [data-aos="fade-up"] {
            transform: translateY(20px);
        }

        [data-aos].aos-animate[data-aos="fade-up"] {
            transform: translateY(0);
        }

        .fade-up {
            animation: fadeUp 1s ease-out;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
        <a href="{{ url('/contact') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Contact Us</a>
        <a href="{{ url('/faq') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">FAQ</a>
    </div>
</nav>

<!-- Hero Section -->
<section class="relative h-[70vh] parallax bg-cover bg-center" style="background-image: url('Images/pexels-lukas-669283.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <section class="text-center z-10">
            <h1 class="text-5xl font-bold text-white">Comprehensive Risk Analysis</h1>
            <p class="text-xl text-white mt-4">Identify, Assess, and Mitigate Security Risks with Expert Precision</p>
        </section>
    </div>
</section>



<!-- What is Risk Analysis Section -->
<section class="relative py-20 bg-white text-gray-800">
    <div class="container mx-auto px-6 md:px-12 text-center" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-6">What is Risk Analysis?</h2>
        <p class="text-lg max-w-2xl mx-auto mb-10">
            Risk Analysis is the process of identifying, assessing, and managing risks to safeguard your business assets and operations. It's the foundation of effective security.
        </p>
    </div>
</section>

<!-- Risk Identification, Assessment, and Mitigation (Cards) -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 md:px-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-aos="fade-up">
            <div class="bg-white p-8 rounded-lg shadow-md text-center transition-transform transform hover:scale-105">
                <img src="images/identification-icon.png" alt="Risk Identification" class="w-12 h-12 mx-auto mb-4">
                <h3 class="text-2xl font-bold mb-2">Risk Identification</h3>
                <p class="text-gray-700">Identify vulnerabilities in your business that could lead to security breaches or operational risks.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md text-center transition-transform transform hover:scale-105">
                <img src="images/assessment-icon.png" alt="Risk Assessment" class="w-12 h-12 mx-auto mb-4">
                <h3 class="text-2xl font-bold mb-2">Risk Assessment</h3>
                <p class="text-gray-700">Evaluate the potential impact of each risk on your business and prioritize based on severity.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md text-center transition-transform transform hover:scale-105">
                <img src="images/mitigation-icon.png" alt="Risk Mitigation" class="w-12 h-12 mx-auto mb-4">
                <h3 class="text-2xl font-bold mb-2">Risk Mitigation</h3>
                <p class="text-gray-700">Implement solutions to minimize or eliminate risks, ensuring the safety of your assets and personnel.</p>
            </div>
        </div>
    </div>
</section>

<!-- Vertical Flow Without Arrows -->
<section class="py-16 bg-gray-800 text-white">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h2 class="text-5xl font-bold mb-8">Key Components of Our Risk Analysis</h2>
        <p class="text-2xl mb-12 max-w-3xl mx-auto">
            We offer a comprehensive range of risk analysis components designed to safeguard your business and its assets through a systematic approach.
        </p>

        <!-- Vertical Flow with No Arrows -->
        <div class="relative mx-auto max-w-4xl space-y-10">
            <div class="flex items-center space-x-6">
                <div class="flex-1 bg-gray-700 p-8 rounded-full text-center transition-transform transform hover:scale-105 hover:bg-gray-600">
                    <h3 class="text-3xl font-bold">Risk Assessment</h3>
                    <p class="text-gray-300 text-lg">We analyze potential risks that could affect your business operations and assets.</p>
                </div>
            </div>

            <div class="flex items-center space-x-6">
                <div class="flex-1 bg-gray-700 p-8 rounded-full text-center transition-transform transform hover:scale-105 hover:bg-gray-600">
                    <h3 class="text-3xl font-bold">Vulnerability Identification</h3>
                    <p class="text-gray-300 text-lg">We identify weaknesses that may be exploited and lead to significant security breaches or loss.</p>
                </div>
            </div>

            <div class="flex items-center space-x-6">
                <div class="flex-1 bg-gray-700 p-8 rounded-full text-center transition-transform transform hover:scale-105 hover:bg-gray-600">
                    <h3 class="text-3xl font-bold">Mitigation Strategies</h3>
                    <p class="text-gray-300 text-lg">We develop actionable strategies to mitigate risks, ensuring business continuity and safety.</p>
                </div>
            </div>
        </div>
    </div>
</section>





        <!-- Diagonal Divider at the bottom -->
    <div class="absolute inset-x-0 bottom-0 -mb-12 h-12 bg-gray-100 clip-diagonal-flip"></div>
</section>

<!-- Clip Path CSS for diagonal sections -->
<style>
    .clip-diagonal {
        clip-path: polygon(0 100%, 100% 0, 100% 100%, 0 100%);
    }

    .clip-diagonal-flip {
        clip-path: polygon(0 0, 100% 100%, 100% 0, 0 0);
    }
</style>


<!-- Our Risk Analysis Process -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h2 class="text-5xl font-bold mb-8">Our Risk Analysis Process</h2>
        <p class="text-xl mb-12 max-w-3xl mx-auto">
            Our methodical approach ensures comprehensive identification, assessment, and mitigation of risks to protect your business and its assets.
        </p>

        <!-- Process Flow -->
        <div class="relative mx-auto max-w-5xl">
            <div class="flex flex-wrap items-center justify-between space-y-8 md:space-y-0">
                <!-- Step 1 -->
                <div class="flex-1 text-center">
                    <div class="w-20 h-20 mx-auto bg-gray-700 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        1
                    </div>
                    <h3 class="text-2xl font-semibold mt-4">Identify Risks</h3>
                    <p class="text-gray-600 mt-2 text-lg">We begin by identifying potential risks and vulnerabilities across your operations.</p>
                </div>

                <!-- Arrow -->
                <div class="hidden md:block mx-4">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>

                <!-- Step 2 -->
                <div class="flex-1 text-center">
                    <div class="w-20 h-20 mx-auto bg-gray-700 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        2
                    </div>
                    <h3 class="text-2xl font-semibold mt-4">Assess Risks</h3>
                    <p class="text-gray-600 mt-2 text-lg">We evaluate the likelihood and potential impact of the identified risks.</p>
                </div>

                <!-- Arrow -->
                <div class="hidden md:block mx-4">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>

                <!-- Step 3 -->
                <div class="flex-1 text-center">
                    <div class="w-20 h-20 mx-auto bg-gray-700 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        3
                    </div>
                    <h3 class="text-2xl font-semibold mt-4">Mitigate Risks</h3>
                    <p class="text-gray-600 mt-2 text-lg">We implement solutions to reduce or eliminate identified risks, safeguarding your operations.</p>
                </div>

                <!-- Arrow -->
                <div class="hidden md:block mx-4">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>

                <!-- Step 4 -->
                <div class="flex-1 text-center">
                    <div class="w-20 h-20 mx-auto bg-gray-700 text-white rounded-full flex items-center justify-center text-2xl font-bold">
                        4
                    </div>
                    <h3 class="text-2xl font-semibold mt-4">Continuous Monitoring</h3>
                    <p class="text-gray-600 mt-2 text-lg">We provide ongoing monitoring and adjustments to ensure sustained risk protection.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
    });
</script>

</body>

</html>
