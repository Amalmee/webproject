<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Your Site Name</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-50">
     <!-- Top Announcement Bar -->
    <div class="bg-indigo-600 text-white text-center py-2 px-4">
        <p class="text-sm">🐾 Free shipping on orders over $50 | New customers get 15% off with code PETLOVE15 🐾</p>
    </div>

    <!-- Navigation (Same as previous) -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <div class="flex items-center">
                        <i class="fas fa-paw text-2xl text-indigo-600 mr-2"></i>
                        <span class="text-xl font-bold text-gray-900">PetCare</span>
                    </div>
                </div>
<!-- Desktop Menu -->
<div class="hidden md:ml-6 md:flex md:items-center md:space-x-8">
    <a href="{{ route('home') }}" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Home</a>
    <a href="{{ route('product') }}" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Product</a>
    <div class="relative group">
        <button class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium flex items-center">
            Services <i class="fas fa-chevron-down ml-1 text-xs"></i>
        </button>
        <div class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-1 py-1 w-48 z-10">
            <a href="{{ route('grooming') }}" class="block px-4 py-2 text-gray-800 hover:bg-indigo-50">Grooming</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-50">Veterinary</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-50">Pet Sitting</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-50">Training</a>
        </div>
    </div>
    <a href="{{ route('about') }}" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">About</a>
    <a href="#" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">Contact</a>
</div>

                <!-- Icons -->
                <div class="flex items-center space-x-4">
                    <button class="p-1 rounded-full text-gray-600 hover:text-indigo-600 focus:outline-none">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="p-1 rounded-full text-gray-600 hover:text-indigo-600 focus:outline-none">
                        <i class="fas fa-user"></i>
                    </button>
                    <button class="p-1 rounded-full text-gray-600 hover:text-indigo-600 focus:outline-none relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="absolute -top-1 -right-1 bg-indigo-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </button>
                    <button class="md:hidden p-1 rounded-full text-gray-600 hover:text-indigo-600 focus:outline-none">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- About Page Content -->
    <main class="flex-grow">
        <section class="py-12 bg-white fade-in">
            <div class="container mx-auto px-4">
                <h1 class="text-4xl font-bold text-center mb-12 text-gray-800">About Our Company</h1>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                    <div>
                        <h2 class="text-2xl font-semibold mb-4 text-gray-700">Our Story</h2>
                        <p class="text-gray-600 mb-4">Founded in 2010, our company has been dedicated to providing exceptional services to our clients. What started as a small team with a big dream has now grown into a thriving business with multiple locations nationwide.</p>
                        <p class="text-gray-600">We believe in innovation, quality, and customer satisfaction above all else. Our mission is to make a positive impact in our industry while fostering a great work environment for our team.</p>
                    </div>
                    <div class="rounded-lg overflow-hidden shadow-xl">
                        <img src="/images/about-story.jpg" alt="Our team working together" class="w-full h-auto transition duration-500 hover:scale-105">
                    </div>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                    <div class="order-last lg:order-first">
                        <div class="rounded-lg overflow-hidden shadow-xl">
                            <img src="/images/about-mission.jpg" alt="Our mission in action" class="w-full h-auto transition duration-500 hover:scale-105">
                        </div>
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold mb-4 text-gray-700">Our Mission</h2>
                        <p class="text-gray-600 mb-4">To deliver innovative solutions that exceed our customers' expectations while maintaining the highest standards of quality and integrity.</p>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Customer-centric approach in all we do</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Sustainable and ethical business practices</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Continuous innovation and improvement</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold mb-8 text-gray-800">Meet Our Team</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                        <!-- Team Member 1 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 team-card">
                            <img src="/images/team-member1.jpg" alt="Team Member" class="w-full h-64 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800">John Doe</h3>
                                <p class="text-blue-600 mb-2">CEO & Founder</p>
                                <p class="text-gray-600 text-sm">Visionary leader with 15+ years of industry experience.</p>
                            </div>
                        </div>
                        
                        <!-- Team Member 2 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 team-card">
                            <img src="/images/team-member2.jpg" alt="Team Member" class="w-full h-64 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800">Jane Smith</h3>
                                <p class="text-blue-600 mb-2">Marketing Director</p>
                                <p class="text-gray-600 text-sm">Creative strategist driving our brand forward.</p>
                            </div>
                        </div>
                        
                        <!-- Team Member 3 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 team-card">
                            <img src="/images/team-member3.jpg" alt="Team Member" class="w-full h-64 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800">Mike Johnson</h3>
                                <p class="text-blue-600 mb-2">CTO</p>
                                <p class="text-gray-600 text-sm">Technology expert leading our innovation efforts.</p>
                            </div>
                        </div>
                        
                        <!-- Team Member 4 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 team-card">
                            <img src="/images/team-member4.jpg" alt="Team Member" class="w-full h-64 object-cover">
                            <div class="p-4">
                                <h3 class="font-bold text-lg text-gray-800">Sarah Williams</h3>
                                <p class="text-blue-600 mb-2">Customer Success</p>
                                <p class="text-gray-600 text-sm">Ensuring our clients get the best experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-blue-50 rounded-xl p-8 md:p-12 text-center">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Why Choose Us?</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto mb-6">We stand out from the competition through our commitment to excellence, personalized approach, and proven track record of success.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                        <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                            <div class="text-blue-600 mb-4">
                                <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg mb-2 text-gray-800">Fast Results</h3>
                            <p class="text-gray-600">We deliver quick turnarounds without compromising quality.</p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                            <div class="text-blue-600 mb-4">
                                <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg mb-2 text-gray-800">Trusted Expertise</h3>
                            <p class="text-gray-600">Over a decade of experience serving satisfied clients.</p>
                        </div>
                        
                        <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition">
                            <div class="text-blue-600 mb-4">
                                <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg mb-2 text-gray-800">Flexible Solutions</h3>
                            <p class="text-gray-600">Customized approaches tailored to your specific needs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">About Us</h3>
                    <p class="text-gray-300">We are a dedicated team committed to delivering exceptional services with a focus on innovation and customer satisfaction.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-white transition">Home</a></li>
                        <li><a href="/about" class="text-gray-300 hover:text-white transition font-semibold">About</a></li>
                        <li><a href="/services" class="text-gray-300 hover:text-white transition">Services</a></li>
                        <li><a href="/contact" class="text-gray-300 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Info</h3>
                    <address class="text-gray-300 not-italic">
                        123 Main Street<br>
                        City, State 12345<br>
                        Email: info@example.com<br>
                        Phone: (123) 456-7890
                    </address>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; <span id="current-year"></span> Your Company Name. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Set current year in footer
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Animation for team cards
        document.addEventListener('DOMContentLoaded', function() {
            const teamCards = document.querySelectorAll('.team-card');
            teamCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                
                setTimeout(() => {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 200 * index);
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });

        // Image hover effects
        const images = document.querySelectorAll('img');
        images.forEach(img => {
            img.addEventListener('mouseenter', () => {
                img.classList.add('transform', 'scale-105');
            });
            img.addEventListener('mouseleave', () => {
                img.classList.remove('transform', 'scale-105');
            });
        });
    </script>
</body>
</html>