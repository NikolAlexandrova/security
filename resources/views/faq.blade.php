<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('public/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FAQ</title>
    <style>
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            padding: 0;
        }

        .accordion-content-inner {
            padding: 10px;
        }

        .accordion-button.active + .accordion-content {
            max-height: 200px;
        }

        .accordion-button.active .accordion-icon {
            transform: rotate(45deg);
        }

        .title {
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 1px;
            color: #2c3e50;

        }

        .subtitle {
            font-size: 1.125rem;
            color: #7f8c8d;
            margin-bottom: 2rem;
        }

        .accordion-button {
            font-size: 1rem;
            font-weight: 600;
            color: #34495e;
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


        .parallax-section {
            position: relative;
            height: 70vh;
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        .parallax-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }

        .content-section {
            background-color: white;
            padding-top: 10rem;
            padding-bottom: 10rem;
        }

        .text-teal-500 {
            color: #319795; /* You can change this to the exact green color you need */
        }

    </style>
</head>

<body class="bg-gray-100 font-sans">
<nav class="fixed top-0 w-full flex justify-between items-center p-6 bg-white shadow-md z-50">
    <div class="logo">
        <img src="{{ asset('images/security_logo-removebg-preview.png') }}" alt="Your Logo" class="w-24">
    </div>
    <div class="space-x-6">
        <a href="{{ url('/') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('/') ? 'active-link' : '' }}">Home</a>
        <a href="{{ url('/about') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('about') ? 'active-link' : '' }}">About</a>
        <a href="{{ url('/services') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('services') ? 'active-link' : '' }}">Services</a>
        <a href="{{ url('/contact') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('contact') ? 'active-link' : '' }}">Contact Us</a>
        <a href="{{ url('/faq') }}" class="nav-link text-gray-800 hover:text-gray-600 {{ Request::is('faq') ? 'active-link' : '' }}">FAQ</a>
    </div>
</nav>

<section class="relative parallax-section" style="background-image: url('{{ asset('images/pexels-lukas-669283.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="parallax-content">
        <h1 class="text-5xl font-bold">FAQ</h1>
    </div>
</section>

<section class="content-section">
    <div class="container mx-auto px-6 lg:grid lg:grid-cols-2 lg:gap-8">
        <div>
            <div class="text-center lg:text-left mb-12">
                <h2 class="title mb-4">Do you have a question?</h2>
                <p class="subtitle">You may find it in our most frequently asked questions.</p>
            </div>

            <!-- FAQ Section -->
            <div class="space-y-4">
                <div class="accordion">
                    <button class="accordion-button w-full text-left py-4 px-6 bg-gray-100 rounded-lg shadow-md flex justify-between items-center">
                        <span>What services do you offer?</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content bg-gray-50 rounded-lg px-6 py-4">
                        <p class="text-gray-700">We offer a range of security services including but not limited to surveillance, personal security, and cyber security solutions.</p>
                    </div>
                </div>

                <div class="accordion">
                    <button class="accordion-button w-full text-left py-4 px-6 bg-gray-100 rounded-lg shadow-md flex justify-between items-center">
                        <span>How can I contact you?</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content bg-gray-50 rounded-lg px-6 py-4">
                        <p class="text-gray-700">You can contact us via email at support@company.com or call us at +1.555.555.5555.</p>
                    </div>
                </div>

                <div class="accordion">
                    <button class="accordion-button w-full text-left py-4 px-6 bg-gray-100 rounded-lg shadow-md flex justify-between items-center">
                        <span>What are your operating hours?</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content bg-gray-50 rounded-lg px-6 py-4">
                        <p class="text-gray-700">We operate 24/7 to ensure your security needs are always met.</p>
                    </div>
                </div>

                <div class="accordion">
                    <button class="accordion-button w-full text-left py-4 px-6 bg-gray-100 rounded-lg shadow-md flex justify-between items-center">
                        <span>Do you provide international services?</span>
                        <span class="accordion-icon">+</span>
                    </button>
                    <div class="accordion-content bg-gray-50 rounded-lg px-6 py-4">
                        <p class="text-gray-700">Yes, we provide our security services internationally, covering a wide range of countries.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block">
            <img src="{{ asset('images/defense.jpeg') }}" alt="Security Image" class="rounded-lg shadow-lg">
        </div>
    </div>
</section>

<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">Can't find your question?</h2>
        <p class="text-gray-600 mb-8">If you can't find your question in our FAQ, feel free to reach out to us.</p>
        <a href="{{ url('/contact') }}" class="bg-blue-500 text-white px-6 py-3 rounded-lg">Contact Us</a>
    </div>
</section>

<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-6 lg:px-12 flex flex-wrap justify-between">
        <div class="w-full md:w-1/3 mb-6 md:mb-0">
            <h3 class="text-2xl font-bold mb-4">
                Global<span class="text-teal-500">Security</span>
            </h3>
            <p class="footer-links flex flex-col space-y-2">
                <a href="{{ url('/') }}" class="hover:text-gray-400">Home</a>
                <a href="{{ url('/about') }}" class="hover:text-gray-400">About</a>
                <a href="{{ url('/services') }}" class="hover:text-gray-400">Services</a>
                <a href="{{ url('/contact') }}" class="hover:text-gray-400">Contact</a>
            </p>

            <p class="text-gray-400 mt-4">Global Security AHS ©️ 2007</p>

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
        <div class="w-full md:w-1/3 mb-6 md:mb-0">
            <div class="mb-4">
                <i class="fa fa-map-marker mr-2"></i>
                <span>444 S. Cedros Ave, Solana Beach, California</span>
            </div>
            <div class="mb-4">
                <i class="fa fa-phone mr-2"></i>
                <span>+1 (849) 629-6056</span>
            </div>
            <div>
                <i class="fa fa-envelope mr-2"></i>
                <a href="mailto:support@company.com" class="hover:text-gray-400">support@company.com</a>
            </div>
        </div>
        <div class="w-full md:w-1/3">
            <h4 class="font-bold mb-2">About the company</h4>
            <p class="text-gray-400">Global Security AHS was created in 2007 by a team of Israeli experts who graduated from the special intelligence and security units of the state of Israel. Global Security AHS with its offices in Mexico and the US, operates throughout Latin America.</p>
        </div>
    </div>
</footer>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        var accButtons = document.querySelectorAll(".accordion-button");

        accButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                // Toggle active class
                this.classList.toggle("active");

                // Toggle the content
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }

                // Rotate the icon
                var icon = this.querySelector(".accordion-icon");
                icon.textContent = icon.textContent === "+" ? "-" : "+";
            });
        });

        // Add active class to the current link
        const currentLocation = window.location.href;
        const menuItem = document.querySelectorAll('nav a');
        const menuLength = menuItem.length;
        for (let i = 0; i < menuLength; i++) {
            if (menuItem[i].href === currentLocation) {
                menuItem[i].classList.add("active-link");
            }
        }
    });
</script>

</body>

</html>
