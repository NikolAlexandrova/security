<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FAQ</title>
    <style>
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .accordion-button {
            cursor: pointer;
        }

        .accordion-icon {
            transition: transform 0.3s ease;
        }

        .accordion-button.active .accordion-icon {
            transform: rotate(45deg);
        }

        .accordion-button.active + .accordion-content {
            max-height: 100vh; /* Set to a large value to ensure it expands fully */
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">
<nav class="flex items-center justify-between bg-white p-6 shadow-md">
    <div class="logo">
        <img src="{{ asset('images/security_logo-removebg-preview.png') }}" alt="Your Logo" class="w-24">
    </div>
    <div class="space-x-6">
        <a href="{{ url('/') }}" class="text-gray-800 hover:text-gray-600">Home</a>
        <a href="{{ url('/about') }}" class="text-gray-800 hover:text-gray-600">About</a>
        <a href="{{ url('/services') }}" class="text-gray-800 hover:text-gray-600">Services</a>
        <a href="{{ url('/contact') }}" class="text-gray-800 hover:text-gray-600">Contact Us</a>
        <a href="{{ url('/faq') }}" class="text-gray-800 hover:text-gray-600 active">FAQ</a>
    </div>
</nav>

<section class="relative h-80 bg-cover bg-center" style="background-image: url('{{ asset('images/pexels-lukas-669283.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-5xl font-bold text-white">FAQ</h1>
    </div>
</section>

<section class="bg-white py-12">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Do you have a question?</h2>
            <p class="text-gray-600">You may find it in our most frequently asked questions.</p>
        </div>
        <div class="flex flex-wrap -mx-6">
            <div class="w-full lg:w-1/3 px-6 mb-12 lg:mb-0">
                <img src="{{ asset('images/40c453ff-04e0-4bec-a7a1-3ca71bbba337.JPG') }}" alt="Sidebar Image" class="rounded-lg shadow-lg mb-4">
                <p class="text-gray-600">Check out our frequently asked questions to find what you need.</p>
            </div>
            <div class="w-full lg:w-2/3 px-6">
                <div class="space-y-4">
                    <!-- Accordion Items -->
                    <div class="accordion bg-white rounded-lg shadow-lg">
                        <div class="accordion-button flex justify-between items-center bg-white text-gray-800 p-4 w-full text-left font-bold mb-2 rounded-lg border border-gray-200 hover:bg-gray-100 transition-colors duration-300">
                            <span>What qualities do you look for in candidates?</span>
                            <span class="accordion-icon text-xl">+</span>
                        </div>
                        <div class="accordion-content bg-gray-100 p-4 mb-4 rounded-lg border border-t-0 border-gray-200">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        </div>
                    </div>
                    <div class="accordion bg-white rounded-lg shadow-lg">
                        <div class="accordion-button flex justify-between items-center bg-white text-gray-800 p-4 w-full text-left font-bold mb-2 rounded-lg border border-gray-200 hover:bg-gray-100 transition-colors duration-300">
                            <span>Do you offer flexible working?</span>
                            <span class="accordion-icon text-xl">+</span>
                        </div>
                        <div class="accordion-content bg-gray-100 p-4 mb-4 rounded-lg border border-t-0 border-gray-200">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                        </div>
                    </div>
                    <div class="accordion bg-white rounded-lg shadow-lg">
                        <div class="accordion-button flex justify-between items-center bg-white text-gray-800 p-4 w-full text-left font-bold mb-2 rounded-lg border border-gray-200 hover:bg-gray-100 transition-colors duration-300">
                            <span>What is the purpose of this pen?</span>
                            <span class="accordion-icon text-xl">+</span>
                        </div>
                        <div class="accordion-content bg-gray-100 p-4 mb-4 rounded-lg border border-t-0 border-gray-200">
                            <p>This pen is designed to provide web developers with boilerplate code for a FAQ Accordion.</p>
                        </div>
                    </div>
                    <div class="accordion bg-white rounded-lg shadow-lg">
                        <div class="accordion-button flex justify-between items-center bg-white text-gray-800 p-4 w-full text-left font-bold mb-2 rounded-lg border border-gray-200 hover:bg-gray-100 transition-colors duration-300">
                            <span>What is an accordion?</span>
                            <span class="accordion-icon text-xl">+</span>
                        </div>
                        <div class="accordion-content bg-gray-100 p-4 mb-4 rounded-lg border border-t-0 border-gray-200">
                            <p>An accordion is a vertically stacked list of headers that users can click on to reveal more information about a business. With an accordion, when someone visits your web page, they will see a list of headers.</p>
                        </div>
                    </div>
                    <div class="accordion bg-white rounded-lg shadow-lg">
                        <div class="accordion-button flex justify-between items-center bg-white text-gray-800 p-4 w-full text-left font-bold mb-2 rounded-lg border border-gray-200 hover:bg-gray-100 transition-colors duration-300">
                            <span>How can I customize the accordion?</span>
                            <span class="accordion-icon text-xl">+</span>
                        </div>
                        <div class="accordion-content bg-gray-100 p-4 mb-4 rounded-lg border border-t-0 border-gray-200">
                            <p>You can customize the accordion by modifying the CSS styles and changing the HTML structure as per your needs. You can also add JavaScript to enhance its functionality.</p>
                        </div>
                    </div>
                    <div class="accordion bg-white rounded-lg shadow-lg">
                        <div class="accordion-button flex justify-between items-center bg-white text-gray-800 p-4 w-full text-left font-bold mb-2 rounded-lg border border-gray-200 hover:bg-gray-100 transition-colors duration-300">
                            <span>Is this accordion responsive?</span>
                            <span class="accordion-icon text-xl">+</span>
                        </div>
                        <div class="accordion-content bg-gray-100 p-4 mb-4 rounded-lg border border-t-0 border-gray-200">
                            <p>Yes, this accordion is designed to be responsive and will adjust its layout based on the screen size to ensure a good user experience on both desktop and mobile devices.</p>
                        </div>
                    </div>
                    <div class="accordion bg-white rounded-lg shadow-lg">
                        <div class="accordion-button flex justify-between items-center bg-white text-gray-800 p-4 w-full text-left font-bold mb-2 rounded-lg border border-gray-200 hover:bg-gray-100 transition-colors duration-300">
                            <span>Can I use this accordion in my project?</span>
                            <span class="accordion-icon text-xl">+</span>
                        </div>
                        <div class="accordion-content bg-gray-100 p-4 mb-4 rounded-lg border border-t-0 border-gray-200">
                            <p>Absolutely! Feel free to use this accordion in your projects. You can modify and adapt it as needed to fit your requirements.</p>
                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-6 flex flex-wrap justify-between">
        <div class="w-full md:w-1/3 mb-6 md:mb-0">
            <h3 class="text-2xl font-bold mb-4">Global<span class="text-teal-500">Security</span></h3>
            <p class="mb-4">Global Security AHS ©️ 2007</p>
            <div class="flex space-x-4">
                <a href="#" target="_blank">
                    <img src="{{ asset('images/facebook.jpeg') }}" alt="Facebook Icon" class="w-8 h-8">
                </a>
                <a href="#" target="_blank">
                    <img src="{{ asset('images/instagram.jpeg') }}" alt="Instagram Icon" class="w-8 h-8">
                </a>
                <a href="#" target="_blank">
                    <img src="{{ asset('images/linkedin.jpeg') }}" alt="LinkedIn Icon" class="w-8 h-8">
                </a>
            </div>
        </div>
        <div class="w-full md:w-1/3 mb-6 md:mb-0">
            <p><i class="fa fa-map-marker"></i> 444 S. Cedros Ave, Solana Beach, California</p>
            <p><i class="fa fa-phone"></i> +1.555.555.5555</p>
            <p><i class="fa fa-envelope"></i> <a href="mailto:support@company.com" class="hover:text-gray-400">support@company.com</a></p>
        </div>
        <div class="w-full md:w-1/3">
            <h4 class="font-bold mb-4">About the company</h4>
            <p class="text-gray-400">Global Security AHS was created in 2007 by a team of Israeli experts who graduated from the special intelligence and security units of the state of Israel. Global Security AHS with its offices in Mexico and the US, operates throughout Latin America.</p>
        </div>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var accButtons = document.querySelectorAll(".accordion-button");

        accButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                // Toggle active class for button
                this.classList.toggle("active");

                // Toggle icon
                var icon = this.querySelector(".accordion-icon");
                icon.textContent = icon.textContent === "+" ? "-" : "+";

                // Toggle content visibility
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        });
    });
</script>

</body>

</html>
