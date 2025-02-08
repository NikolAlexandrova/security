<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Data Protection</title>
    <style>
        .scrolled .logo img {
            width: 80px;
        }

        /* Timeline styles */
        .timeline {
            position: relative;
            margin: 2rem 0;
            padding: 2rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            width: 2px;
            background-color: #4A90E2;
            top: 0;
            bottom: 0;
            transform: translateX(-50%);
        }

        .timeline-step {
            position: relative;
            margin: 2rem 0;
            padding: 1rem 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 45%;
        }

        .timeline-step:nth-child(even) {
            left: 55%;
        }

        .timeline-step:nth-child(odd) {
            left: 0;
        }

        .timeline-step::before {
            content: '';
            position: absolute;
            top: 1rem;
            left: -10px;
            width: 12px;
            height: 12px;
            background-color: #4A90E2;
            border-radius: 50%;
        }

        .progress-bar-container {
            position: relative;
            background-color: #f3f3f3;
            border-radius: 25px;
            padding: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .progress-bar {
            height: 20px;
            border-radius: 25px;
            background-color: #4A90E2;
        }

        .stat-percentage {
            font-weight: bold;
            color: #1F2937;
        }

        .facts-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-top: 2rem;
        }

        .fact-item {
            background-color: #f9f9f9;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .fact-item h4 {
            font-size: 1.2rem;
            color: #4A90E2;
            margin-bottom: 0.5rem;
        }

        .fact-item p {
            font-size: 1rem;
            color: #555;
        }

        .random-facts-list {
            margin-top: 2rem;
            padding-left: 1rem;
        }

        .random-facts-list li {
            font-size: 1.1rem;
            color: #4A90E2;
            margin-bottom: 1rem;
            list-style-type: disc;
        }

        /* CTA Button */
        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4A90E2;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }

        .cta-button:hover {
            background-color: #357ABD;
        }

        .best-practices-container {
            margin-top: 30px;
            padding: 20px;
            border: 1px solid #E5E7EB;
            border-radius: 10px;
            background-color: #F9FAFB;
        }

        .best-practices-container ul {
            margin-top: 20px;
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

<section class="relative h-[70vh] parallax bg-cover bg-center" style="background-image: url('Images/pexels-lukas-669283.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <section class="text-center z-10">
            <h1 class="text-5xl font-bold text-white text-outline">Data Protection</h1>
        </section>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h2 class="text-5xl font-extrabold text-blue-800 mb-6 transition-all duration-700 ease-in-out hover:text-blue-600">
            What is Data Protection?
        </h2>
        <p class="text-gray-700 text-xl md:text-2xl mb-12 max-w-4xl mx-auto leading-relaxed transition-all duration-700 ease-in-out hover:text-gray-900">
            Data Protection involves securing sensitive information from unauthorized access, corruption, or loss. With modern digital solutions, safeguarding data is critical for organizations, ensuring compliance with regulations like GDPR, HIPAA, and CCPA.
        </p>

        <!-- Interactive Circles -->
        <div class="flex justify-center items-center space-x-8 mt-12">
            <!-- Circle 1 (GDPR) -->
            <div class="relative group w-32 h-32 rounded-full bg-blue-600 text-white flex items-center justify-center cursor-pointer hover:bg-blue-500 transition-all duration-500 ease-in-out transform hover:scale-110" onclick="openModal('gdpr')">
                <p class="absolute inset-0 flex items-center justify-center text-2xl font-bold group-hover:opacity-0 transition-opacity duration-300">GDPR</p>
                <p class="text-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">Read more</p>
            </div>

            <!-- Circle 2 (HIPAA) -->
            <div class="relative group w-32 h-32 rounded-full bg-green-600 text-white flex items-center justify-center cursor-pointer hover:bg-green-500 transition-all duration-500 ease-in-out transform hover:scale-110" onclick="openModal('hipaa')">
                <p class="absolute inset-0 flex items-center justify-center text-2xl font-bold group-hover:opacity-0 transition-opacity duration-300">HIPAA</p>
                <p class="text-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">Read more</p>
            </div>

            <!-- Circle 3 (CCPA) -->
            <div class="relative group w-32 h-32 rounded-full bg-red-600 text-white flex items-center justify-center cursor-pointer hover:bg-red-500 transition-all duration-500 ease-in-out transform hover:scale-110" onclick="openModal('ccpa')">
                <p class="absolute inset-0 flex items-center justify-center text-2xl font-bold group-hover:opacity-0 transition-opacity duration-300">CCPA</p>
                <p class="text-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">Read more</p>
            </div>
        </div>
    </div>
</section>

<!-- Modal Structure -->
<div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-lg mx-auto relative">
        <!-- Close Button (Right Aligned) -->
        <button class="absolute top-2 right-2 bg-transparent text-gray-500 hover:text-gray-700 text-xl font-bold" onclick="closeModal()">&times;</button>
        <div id="modal-content" class="text-center text-lg text-gray-700"></div>
    </div>
</div>

<!-- CSS for hiding and showing modals -->
<style>
    .group-hover\:hidden {
        display: none;
    }

    .group-hover\:block {
        display: block;
    }

    #modal-content {
        font-size: 1.2rem;
        line-height: 1.6;
    }

    #modal {
        z-index: 100;
    }

    #modal.show {
        opacity: 1;
        pointer-events: auto;
    }
</style>

<!-- JavaScript for Modal behavior -->
<script>
    const modalData = {
        gdpr: 'The General Data Protection Regulation (GDPR) protects personal data in the EU, ensuring that businesses handle data responsibly and transparently.',
        hipaa: 'The Health Insurance Portability and Accountability Act (HIPAA) safeguards sensitive healthcare information to protect patient privacy.',
        ccpa: 'The California Consumer Privacy Act (CCPA) gives California residents more control over their personal data, requiring businesses to disclose data collection practices.'
    };

    function openModal(type) {
        const modal = document.getElementById('modal');
        const modalContent = document.getElementById('modal-content');

        modalContent.textContent = modalData[type];
        modal.classList.add('show');
    }

    function closeModal() {
        const modal = document.getElementById('modal');
        modal.classList.remove('show');
    }
</script>


<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 md:px-12">
        <h3 class="text-3xl font-bold mb-6 text-center">Key Elements of Data Protection</h3>
        <div class="timeline">
            <div class="timeline-step">
                <h4>Data Encryption</h4>
                <p>Encrypt data both in transit and at rest to prevent unauthorized access to sensitive information using modern encryption standards.</p>
            </div>
            <div class="timeline-step">
                <h4>Access Control</h4>
                <p>Implement role-based access control to ensure that only authorized users have access to specific data. Multi-factor authentication (MFA) is key.</p>
            </div>
            <div class="timeline-step">
                <h4>Regular Data Backups</h4>
                <p>Regularly backup your data to avoid potential data loss due to technical failures, cyber attacks, or disasters.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h2 class="text-3xl font-bold mb-8">Data Protection Best Practices</h2>

        <!-- Improved Best Practices Section -->
        <div class="best-practices-container text-left max-w-6xl mx-auto p-8 bg-gray-100 rounded-lg shadow-md">
            <!-- Statistics Section -->
            <div class="mb-12">
                <div class="flex justify-between items-center mb-6">
                    <span class="text-gray-800">Organizations with data protection measures</span>
                    <span class="stat-percentage">72%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 72%;"></div>
                </div>
                <div class="flex justify-between items-center mb-6 mt-8">
                    <span class="text-gray-800">Organizations without data protection</span>
                    <span class="stat-percentage">28%</span>
                </div>
                <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 28%; background-color: #FF6363;"></div>
                </div>
            </div>

            <!-- Best Practices Section -->
            <ul class="text-xl text-gray-700 list-disc list-inside space-y-4 mb-12">
                <li><strong>Conduct Regular Audits</strong> – Identify vulnerabilities through frequent security assessments.</li>
                <li><strong>Multi-Factor Authentication (MFA)</strong> – Add layers of security to sensitive data access points.</li>
                <li><strong>Monitor Data Access Logs</strong> – Track access to data to detect suspicious activities.</li>
                <li><strong>Data Anonymization</strong> – Remove identifiable information to protect privacy in case of a breach.</li>
            </ul>

            <!-- Centered CTA Button -->
            <div class="text-center">
                <a href="{{ url('/contact') }}" class="modern-button">Interested in Data Protection? Contact Us</a>
            </div>
        </div>
    </div>
</section>


<!-- Interesting Facts Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h3 class="text-3xl font-bold mb-4 text-center animate-fadeIn-on-scroll">Interesting Data Protection Facts</h3>
        <div class="facts-grid">
            <div class="fact-item animate-slideIn-on-scroll">
                <h4>Data Breaches</h4>
                <p>85% of companies report they have suffered a data breach in the last 5 years.</p>
            </div>
            <div class="fact-item animate-slideIn-on-scroll">
                <h4>Training Gaps</h4>
                <p>Only 50% of organizations train their employees on data protection regularly.</p>
            </div>
            <div class="fact-item animate-slideIn-on-scroll">
                <h4>Records Exposed</h4>
                <p>Over 4.1 billion records were exposed due to data breaches in 2019.</p>
            </div>
            <div class="fact-item animate-slideIn-on-scroll">
                <h4>Password Reuse</h4>
                <p>35% of users reuse passwords across multiple websites, putting their data at risk.</p>
            </div>
        </div>
    </div>
</section>

<!-- Global Standards and Regulations Section -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h3 class="text-3xl font-bold mb-6 animate-fadeIn-on-scroll">Global Standards and Regulations</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="animate-slideIn-on-scroll">
                <h4 class="text-xl font-semibold mb-2">GDPR</h4>
                <p class="text-gray-700">The General Data Protection Regulation (GDPR) ensures data privacy for all EU citizens and requires companies to adhere to strict data protection rules.</p>
            </div>
            <div class="animate-slideIn-on-scroll">
                <h4 class="text-xl font-semibold mb-2">HIPAA</h4>
                <p class="text-gray-700">HIPAA is a US regulation focused on protecting sensitive healthcare information through stringent data security measures.</p>
            </div>
            <div class="animate-slideIn-on-scroll">
                <h4 class="text-xl font-semibold mb-2">CCPA</h4>
                <p class="text-gray-700">The California Consumer Privacy Act gives California residents more control over their personal data and imposes penalties for non-compliance.</p>
            </div>
        </div>
    </div>
</section>

<!-- CSS Animations -->
<style>
    .animate-fadeIn-on-scroll {
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .animate-slideIn-on-scroll {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 1s ease-in-out, transform 1s ease-in-out;
    }

    .animate-visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<!-- JavaScript for triggering animations on scroll -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const elementsToAnimate = document.querySelectorAll('.animate-fadeIn-on-scroll, .animate-slideIn-on-scroll');

        const observerCallback = function (entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-visible');
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        };

        const observerOptions = {
            threshold: 0.2 // Adjust this value to trigger animation earlier or later
        };

        const observer = new IntersectionObserver(observerCallback, observerOptions);

        elementsToAnimate.forEach(element => {
            observer.observe(element);
        });
    });
</script>


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
    });
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
