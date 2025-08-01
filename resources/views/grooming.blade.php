<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pawsome Pet Grooming - Premium Dog Care & Toys</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'paw-blue': '#4F46E5',
                        'paw-purple': '#7C3AED',
                        'paw-pink': '#EC4899'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-purple-50 min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/80 backdrop-blur-md shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-2">
                    <div class="bg-gradient-to-r from-paw-blue to-paw-purple p-2 rounded-full">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold bg-gradient-to-r from-paw-blue to-paw-purple bg-clip-text text-transparent">
                        Pawsome Grooming
                    </h1>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#services" class="text-gray-700 hover:text-paw-blue transition-colors">Services</a>
                    <a href="#toys" class="text-gray-700 hover:text-paw-blue transition-colors">Dog Toys</a>
                    <a href="#gallery" class="text-gray-700 hover:text-paw-blue transition-colors">Gallery</a>
                    <a href="#contact" class="text-gray-700 hover:text-paw-blue transition-colors">Contact</a>
                </div>
                <button id="menuBtn" class="md:hidden p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative overflow-hidden py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-5xl md:text-7xl font-bold text-gray-900 mb-6">
                    Premium Pet Care &
                    <span class="bg-gradient-to-r from-paw-blue via-paw-purple to-paw-pink bg-clip-text text-transparent">
                        Dog Toys
                    </span>
                </h2>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Transform your furry friend with our professional grooming services and premium toy collection. 
                    Where every pup is treated like royalty.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-gradient-to-r from-paw-blue to-paw-purple text-white px-8 py-4 rounded-full font-semibold hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                        Book Grooming
                    </button>
                    <button class="border-2 border-paw-blue text-paw-blue px-8 py-4 rounded-full font-semibold hover:bg-paw-blue hover:text-white transition-all duration-300">
                        Shop Toys
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-paw-pink/20 rounded-full animate-bounce"></div>
        <div class="absolute bottom-20 right-20 w-16 h-16 bg-paw-blue/20 rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-40 w-12 h-12 bg-paw-purple/20 rounded-full animate-bounce delay-1000"></div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">Our Grooming Services</h3>
                <p class="text-xl text-gray-600">Professional care for your beloved companion</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="service-card bg-gradient-to-br from-white to-blue-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-r from-paw-blue to-paw-purple p-3 rounded-full w-fit mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4">Full Service Grooming</h4>
                    <p class="text-gray-600 mb-6">Complete wash, cut, nail trim, and styling for your dog's perfect look.</p>
                    <div class="text-3xl font-bold text-paw-blue mb-4">$65</div>
                    <ul class="text-gray-600 space-y-2">
                        <li>✓ Luxury shampoo & conditioning</li>
                        <li>✓ Professional cut & styling</li>
                        <li>✓ Nail trimming & filing</li>
                        <li>✓ Ear cleaning</li>
                    </ul>
                </div>

                <div class="service-card bg-gradient-to-br from-white to-purple-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-r from-paw-purple to-paw-pink p-3 rounded-full w-fit mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9.5 15.5L7 13l-1.5 1.5L9.5 18.5L20 8l-1.5-1.5L9.5 15.5z"/>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4">Express Wash</h4>
                    <p class="text-gray-600 mb-6">Quick and efficient cleaning for busy pet parents.</p>
                    <div class="text-3xl font-bold text-paw-purple mb-4">$35</div>
                    <ul class="text-gray-600 space-y-2">
                        <li>✓ Premium wash & dry</li>
                        <li>✓ Basic brush out</li>
                        <li>✓ Nail trim</li>
                        <li>✓ 45-minute service</li>
                    </ul>
                </div>

                <div class="service-card bg-gradient-to-br from-white to-pink-50 p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-r from-paw-pink to-paw-blue p-3 rounded-full w-fit mb-6">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <h4 class="text-2xl font-bold text-gray-900 mb-4">Spa Package</h4>
                    <p class="text-gray-600 mb-6">Ultimate pampering experience with premium treatments.</p>
                    <div class="text-3xl font-bold text-paw-pink mb-4">$95</div>
                    <ul class="text-gray-600 space-y-2">
                        <li>✓ Aromatherapy treatment</li>
                        <li>✓ Deep conditioning mask</li>
                        <li>✓ Pawdicure & massage</li>
                        <li>✓ Complimentary toy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Dog Toys Section -->
    <section id="toys" class="py-20 bg-gradient-to-br from-purple-50 to-pink-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">Premium Dog Toys</h3>
                <p class="text-xl text-gray-600">Keep your pup entertained with our curated toy collection</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="toy-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-yellow-200 to-orange-300 flex items-center justify-center">
                        <div class="w-24 h-24 bg-yellow-400 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🎾</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Interactive Ball</h4>
                        <p class="text-gray-600 mb-4">Smart ball that responds to your dog's play style</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-paw-blue">$24.99</span>
                            <button class="bg-paw-blue text-white px-4 py-2 rounded-full hover:bg-paw-purple transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="toy-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-green-200 to-emerald-300 flex items-center justify-center">
                        <div class="w-24 h-24 bg-green-400 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🦴</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Chew Bone Deluxe</h4>
                        <p class="text-gray-600 mb-4">Long-lasting, dental-friendly chew toy</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-paw-purple">$18.99</span>
                            <button class="bg-paw-purple text-white px-4 py-2 rounded-full hover:bg-paw-pink transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="toy-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-purple-200 to-pink-300 flex items-center justify-center">
                        <div class="w-24 h-24 bg-purple-400 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🧸</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Plush Buddy</h4>
                        <p class="text-gray-600 mb-4">Soft, cuddly companion for comfort time</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-paw-pink">$16.99</span>
                            <button class="bg-paw-pink text-white px-4 py-2 rounded-full hover:bg-paw-blue transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <div class="toy-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="h-48 bg-gradient-to-br from-blue-200 to-cyan-300 flex items-center justify-center">
                        <div class="w-24 h-24 bg-blue-400 rounded-lg flex items-center justify-center">
                            <span class="text-2xl">🎯</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Puzzle Feeder</h4>
                        <p class="text-gray-600 mb-4">Mental stimulation toy for smart pups</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-paw-blue">$32.99</span>
                            <button class="bg-paw-blue text-white px-4 py-2 rounded-full hover:bg-paw-purple transition-colors">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="bg-gradient-to-r from-paw-purple to-paw-pink text-white px-8 py-4 rounded-full font-semibold hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                    View All Toys
                </button>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold text-gray-900 mb-4">Happy Customers</h3>
                <p class="text-xl text-gray-600">See our adorable clients after their grooming sessions</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="gallery-item aspect-square bg-gradient-to-br from-yellow-200 to-orange-300 rounded-2xl flex items-center justify-center hover:scale-105 transition-transform duration-300 cursor-pointer">
                    <span class="text-6xl">🐕</span>
                </div>
                <div class="gallery-item aspect-square bg-gradient-to-br from-pink-200 to-rose-300 rounded-2xl flex items-center justify-center hover:scale-105 transition-transform duration-300 cursor-pointer">
                    <span class="text-6xl">🐩</span>
                </div>
                <div class="gallery-item aspect-square bg-gradient-to-br from-blue-200 to-cyan-300 rounded-2xl flex items-center justify-center hover:scale-105 transition-transform duration-300 cursor-pointer">
                    <span class="text-6xl">🐕‍🦺</span>
                </div>
                <div class="gallery-item aspect-square bg-gradient-to-br from-green-200 to-emerald-300 rounded-2xl flex items-center justify-center hover:scale-105 transition-transform duration-300 cursor-pointer">
                    <span class="text-6xl">🐶</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-gray-900 to-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-4xl font-bold mb-6">Get In Touch</h3>
                    <p class="text-xl text-gray-300 mb-8">Ready to pamper your pup? Book an appointment or visit our store today!</p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="bg-paw-blue p-3 rounded-full">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold">Address</div>
                                <div class="text-gray-300">123 Pet Street, Dog City, DC 12345</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="bg-paw-purple p-3 rounded-full">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold">Phone</div>
                                <div class="text-gray-300">(555) PAW-SOME</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="bg-paw-pink p-3 rounded-full">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold">Email</div>
                                <div class="text-gray-300">hello@pawsomegrooming.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8">
                    <h4 class="text-2xl font-bold mb-6">Book Appointment</h4>
                    <form class="space-y-4">
                        <div>
                            <input type="text" placeholder="Your Name" class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:border-paw-blue">
                        </div>
                        <div>
                            <input type="email" placeholder="Email Address" class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:border-paw-blue">
                        </div>
                        <div>
                            <input type="text" placeholder="Dog's Name & Breed" class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:border-paw-blue">
                        </div>
                        <div>
                            <select class="w-full bg-white/20 border border-white/30 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-paw-blue">
                                <option value="">Select Service</option>
                                <option value="full">Full Service Grooming</option>
                                <option value="express">Express Wash</option>
                                <option value="spa">Spa Package</option>
                            </select>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-paw-blue to-paw-purple text-white py-3 rounded-lg font-semibold hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                            Book Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="flex items-center justify-center space-x-2 mb-4">
                    <div class="bg-gradient-to-r from-paw-blue to-paw-purple p-2 rounded-full">
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                        </svg>
                    </div>
                    <h1 class="text-xl font-bold">Pawsome Grooming</h1>
                </div>
                <p class="text-gray-400 mb-6">Where every pup is treated like royalty</p>
                <div class="flex justify-center space-x-6 mb-6">
                    <a href="#" class="text-gray-400 hover:text-paw-blue transition-colors">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-paw-blue transition-colors">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-paw-blue transition-colors">FAQ</a>
                </div>
                <p class="text-gray-500">© 2024 Pawsome Grooming. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Shopping cart functionality
        let cart = [];
        let cartTotal = 0;

        // Add to cart buttons
        document.querySelectorAll('.toy-card button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const card = this.closest('.toy-card');
                const name = card.querySelector('h4').textContent;
                const price = parseFloat(card.querySelector('.text-2xl.font-bold').textContent.replace('$', ''));
                
                cart.push({ name, price });
                cartTotal += price;
                
                // Visual feedback
                this.innerHTML = 'Added! ✓';
                this.style.background = '#10B981';
                
                setTimeout(() => {
                    this.innerHTML = 'Add to Cart';
                    this.style.background = '';
                }, 2000);
                
                console.log('Cart:', cart);
                console.log('Total:', cartTotal.toFixed(2));
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Mobile menu toggle
        const menuBtn = document.getElementById('menuBtn');
        if (menuBtn) {
            menuBtn.addEventListener('click', function() {
                // This would toggle a mobile menu if implemented
                console.log('Mobile menu clicked');
            });
        }

        // Form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Simulate booking confirmation
            alert('Thank you! Your appointment request has been submitted. We\'ll contact you within 24 hours to confirm.');
            
            // Reset form
            this.reset();
        });

        // Animate service cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe service cards
        document.querySelectorAll('.service-card, .toy-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Gallery lightbox effect
        document.querySelectorAll('.gallery-item').forEach(item => {
            item.addEventListener('click', function() {
                // Create lightbox overlay
                const overlay = document.createElement('div');
                overlay.className = 'fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50';
                overlay.innerHTML = `
                    <div class="bg-white rounded-2xl p-8 max-w-md mx-4">
                        <div class="text-center">
                            <div class="text-8xl mb-4">${this.querySelector('span').textContent}</div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Happy Customer!</h3>
                            <p class="text-gray-600 mb-6">Another satisfied pup after our grooming service</p>
                            <button class="bg-paw-blue text-white px-6 py-2 rounded-full hover:bg-paw-purple transition-colors" onclick="this.closest('.fixed').remove()">
                                Close
                            </button>
                        </div>
                    </div>
                `;
                
                document.body.appendChild(overlay);
                
                // Close on overlay click
                overlay.addEventListener('click', function(e) {
                    if (e.target === overlay) {
                        overlay.remove();
                    }
                });
            });
        });

        // Add floating animation to hero elements
        function animateFloatingElements() {
            const elements = document.querySelectorAll('.absolute');
            elements.forEach((el, index) => {
                const speed = 0.002 + (index * 0.001);
                const amplitude = 10 + (index * 5);
                
                function animate() {
                    const time = Date.now() * speed;
                    const y = Math.sin(time) * amplitude;
                    el.style.transform = `translateY(${y}px)`;
                    requestAnimationFrame(animate);
                }
                animate();
            });
        }

        // Initialize floating animation
        animateFloatingElements();

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('bg-white');
                nav.classList.remove('bg-white/80');
            } else {
                nav.classList.add('bg-white/80');
                nav.classList.remove('bg-white');
            }
        });

        // Add ripple effect to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');
                
                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Add CSS for ripple effect
        const style = document.createElement('style');
        style.textContent = `
            .ripple {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.4);
                transform: scale(0);
                animation: ripple-animation 0.6s linear;
                pointer-events: none;
            }
            
            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Toy filter functionality (if needed for Laravel integration)
        function filterToys(category) {
            const toys = document.querySelectorAll('.toy-card');
            toys.forEach(toy => {
                if (category === 'all' || toy.dataset.category === category) {
                    toy.style.display = 'block';
                    toy.style.animation = 'fadeIn 0.5s ease';
                } else {
                    toy.style.display = 'none';
                }
            });
        }

        // Price calculator for services
        function calculateServicePrice(serviceType, dogSize, addOns = []) {
            const basePrices = {
                'full': { small: 55, medium: 65, large: 75 },
                'express': { small: 25, medium: 35, large: 45 },
                'spa': { small: 85, medium: 95, large: 105 }
            };
            
            const addOnPrices = {
                'nailPainting': 10,
                'teethCleaning': 15,
                'deodorizing': 8,
                'faceWash': 5
            };
            
            let total = basePrices[serviceType]?.[dogSize] || 0;
            addOns.forEach(addOn => {
                total += addOnPrices[addOn] || 0;
            });
            
            return total;
        }

        // Booking availability checker (mock function for Laravel integration)
        async function checkAvailability(date, time) {
            // This would make an API call to your Laravel backend
            return new Promise(resolve => {
                setTimeout(() => {
                    const isAvailable = Math.random() > 0.3; // Mock availability
                    resolve(isAvailable);
                }, 1000);
            });
        }

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Pawsome Grooming page loaded!');
            
            // Add fade-in animation to main sections
            const sections = document.querySelectorAll('section');
            sections.forEach((section, index) => {
                section.style.opacity = '0';
                section.style.transform = 'translateY(30px)';
                section.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                section.style.transitionDelay = `${index * 0.1}s`;
                
                setTimeout(() => {
                    section.style.opacity = '1';
                    section.style.transform = 'translateY(0)';
                }, 100 + (index * 100));
            });
        });
    </script>
</body>
</html>