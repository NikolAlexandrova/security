<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>IT Security</title>
    <style>
        .scrolled .logo img {
            width: 80px;
        }

        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bg-dark {
            background-color: #1F2937;
        }

        .text-outline {
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
        }

        .cta-button {
            background-color: #3B82F6;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .cta-button:hover {
            background-color: #2563EB;
        }

        .hover-grow:hover {
            transform: scale(1.05);
        }

        .hover-shadow:hover {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
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
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <section class="text-center z-10">
            <h1 class="text-5xl font-bold text-white text-outline">IT Security</h1>
        </section>
    </div>
</section>

<!-- What is IT Security? -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 text-center">
        <h2 class="text-5xl font-bold mb-8">What is IT Security?</h2>
        <p class="text-xl mb-12 max-w-3xl mx-auto text-gray-700">IT Security is the practice of protecting systems, networks, and data from digital attacks. It ensures the confidentiality, integrity, and availability of information by preventing unauthorized access, data breaches, and cyber threats.</p>
    </div>
</section>

<!-- Key Components of IT Security -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-6 md:px-12">
        <h2 class="text-3xl font-bold mb-8 text-center">Key Components of IT Security</h2>
        <div class="flex flex-wrap justify-center space-x-6 space-y-6 md:space-y-0">
            <!-- Component 1 -->
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm text-center hover-grow hover-shadow transition-transform">
                <h3 class="text-2xl font-semibold mb-4">Network Security</h3>
                <p class="text-gray-600">Protect your network from unauthorized access, attacks, and breaches through advanced security measures and firewalls.</p>
            </div>
            <!-- Component 2 -->
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm text-center hover-grow hover-shadow transition-transform">
                <h3 class="text-2xl font-semibold mb-4">Data Protection</h3>
                <p class="text-gray-600">Ensure the confidentiality, integrity, and availability of data through encryption, access controls, and backup solutions.</p>
            </div>
            <!-- Component 3 -->
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm text-center hover-grow hover-shadow transition-transform">
                <h3 class="text-2xl font-semibold mb-4">Endpoint Protection</h3>
                <p class="text-gray-600">Safeguard devices connected to your network with endpoint protection tools like antivirus, anti-malware, and patch management.</p>
            </div>
        </div>
    </div>
</section>

<!-- IT Security Best Practices Section with Centered Carousel -->
<section class="py-16 bg-gray-50">
    <section id="security-best-practices" class="py-16 bg-gray-100">
        <div class="container mx-auto px-6 md:px-12 text-center">
            <h2 class="text-4xl font-bold mb-8">IT Security Best Practices</h2>
            <p class="text-xl mb-12">Understand the most critical best practices to protect your digital assets.</p>

            <!-- Canvas for the chart -->
            <div class="relative flex justify-center">
                <canvas id="itSecurityChart" width="600" height="400"></canvas>
            </div>
        </div>
    </section>
</section>

<!-- JavaScript for Carousel Functionality -->
<script>
    const bestPractices = [
        "Regularly update software and systems to prevent vulnerabilities.",
        "Implement strong password policies and multi-factor authentication.",
        "Regularly back up critical data and test the recovery process.",
        "Conduct frequent security audits and vulnerability assessments.",
        "Educate employees on phishing attacks and cybersecurity best practices."
    ];

    let currentIndex = 0;

    document.getElementById('next-button').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % bestPractices.length;
        document.getElementById('practice-text').innerText = bestPractices[currentIndex];
    });

    document.getElementById('prev-button').addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + bestPractices.length) % bestPractices.length;
        document.getElementById('practice-text').innerText = bestPractices[currentIndex];
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ctx = document.getElementById('itSecurityChart').getContext('2d');

        var itSecurityChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Regular Audits', 'Multi-Factor Authentication', 'Access Control', 'Data Encryption', 'Monitoring', 'Patch Management'],
                datasets: [{
                    label: 'Importance Level (1-5)',
                    data: [5, 4, 4, 5, 3, 4],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(201, 203, 207, 0.6)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(201, 203, 207, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 5,
                        title: {
                            display: true,
                            text: 'Importance Level'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                const labels = [
                                    'Regular security audits are vital to ensure vulnerabilities are detected early.',
                                    'Multi-factor authentication adds an extra layer of security.',
                                    'Proper access control prevents unauthorized access to sensitive information.',
                                    'Data encryption is essential for protecting data at rest and in transit.',
                                    'Monitoring helps track suspicious activities and possible breaches.',
                                    'Patch management keeps software up to date, closing known vulnerabilities.'
                                ];
                                return labels[tooltipItem.dataIndex];
                            }
                        }
                    }
                }
            }
        });
    });
</script>



<!-- Enhanced Call to Action Section with Scroll-triggered Animations -->
<section id="security-assessment-section" class="relative py-24 bg-cover bg-center text-white" style="background-image: url('images/it-security-bg.jpg');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <!-- Content -->
    <div class="relative container mx-auto px-6 md:px-12 text-center">
        <!-- Animated Headline -->
        <h2 class="text-5xl font-extrabold mb-6 opacity-0 transition-opacity duration-1000">Strengthen Your IT Security</h2>
        <!-- Subheading -->
        <p class="text-2xl mb-8 max-w-3xl mx-auto leading-relaxed opacity-0 transition-opacity duration-1000">
            Protect your business from digital threats with our tailored solutions.
        </p>
        <!-- Call to Action Button -->
        <a href="/contact" class="inline-block px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-full shadow-lg transition transform opacity-0 duration-1000">
            Get a Security Assessment
        </a>
        <!-- Trust Badges -->
        <div class="flex justify-center items-center mt-8 space-x-6 opacity-0 transition-opacity duration-1000">
            <img src="images/certification1.png" alt="Certification 1" class="h-12">
            <img src="images/certification2.png" alt="Certification 2" class="h-12">
            <img src="images/certification3.png" alt="Certification 3" class="h-12">
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Function to handle intersection changes
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                } else {
                    entry.target.classList.remove('fade-in'); // Remove this line if you don't want the animation to repeat
                }
            });
        });

        // Select all elements to animate
        const elementsToAnimate = document.querySelectorAll('#security-assessment-section h2, #security-assessment-section p, #security-assessment-section a, #security-assessment-section div img');

        elementsToAnimate.forEach(element => {
            observer.observe(element);  // Start observing the elements
        });
    });
</script>
<style>
    .fade-in {
        opacity: 3 !important;
        transform: translateY(0px);
    }

    #security-assessment-section h2, #security-assessment-section p, #security-assessment-section a, #security-assessment-section div img {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 2s ease-out, transform 2s ease-out;
    }
</style>


<!-- CSS Animations -->
<style>
    .animate-fadeInUp {
        opacity: 0;
        transform: translateY(20px);
        animation-fill-mode: forwards;
        animation-name: fadeInUp;
        animation-duration: 1s;
    }

    .animation-delay-500 {
        animation-delay: 0.5s;
    }

    .animation-delay-1000 {
        animation-delay: 1s;
    }

    .animation-delay-1500 {
        animation-delay: 1.5s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>


<!-- Footer -->
<footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <h3 class="text-2xl font-bold mb-4">Global<span class="text-teal-500">Security</span></h3>
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
                <p class="text-gray-400">Global Security AHS was created in 2007 by a team of Israeli experts. We operate throughout Latin America to protect our clients.</p>
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
    });
</script>

</body>

</html>
