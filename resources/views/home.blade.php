<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare - Premium Pet Products & Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Navigation menu */
        .nav {
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            display: block;
            padding: 15px 20px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.3s;
            border-bottom: 3px solid transparent;
        }

        .nav-link:hover, .nav-link.active {
            color: #17a2b8;
            border-bottom-color: #17a2b8;
        }

               /* Dropdown menu */
        .dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            min-width: 200px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 5px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s;
            z-index: 1000;
        }

        .nav-item:hover .dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-item {
            display: block;
            padding: 12px 20px;
            color: #666;
            text-decoration: none;
            transition: all 0.3s;
            border-bottom: 1px solid #f5f5f5;
        }

        .dropdown-item:hover {
            background: #f8f9fa;
            color: #17a2b8;
            padding-left: 25px;
        }

        .dropdown-item:last-child {
            border-bottom: none;
        }
        /* Custom animations and fixes */
        .dropdown-hover:hover .dropdown-menu {
            display: block;
        }
        
        .smooth-transition {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .aspect-ratio-square {
            aspect-ratio: 1 / 1;
        }
        
        .aspect-ratio-4-3 {
            aspect-ratio: 4 / 3;
        }
        
        /* Fix for mobile menu */
        .mobile-menu-hidden {
            transform: translateX(100%);
        }
        
        .mobile-menu-visible {
            transform: translateX(0);
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Top Announcement Bar -->
    <div class="bg-indigo-600 text-white text-center py-2 px-4">
        <p class="text-sm">🐾 Free shipping on orders over $50 | New customers get 15% off with code PETLOVE15 🐾</p>
    </div>

    <!-- Navigation -->
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

                <!-- Navigation menu -->
    <nav class="nav">
        <div class="nav-container">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link cat-active">Dog</a>
                    <div class="dropdown">
                        <a href="{{ route('product') }}" class="dropdown-item">Dog Food</a>
                        <a href="#" class="dropdown-item">Dog Treats</a>
                        <a href="#" class="dropdown-item">Dog Toys</a>
                        <a href="#" class="dropdown-item">Dog Accessories</a>
                        <a href="#" class="dropdown-item">Dog Grooming</a>
                        <a href="#" class="dropdown-item"> Pharmacy</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link cat-active">Cat</a>
                    <div class="dropdown">
                        <a href="{{ route('product') }}" class="dropdown-item">Cat Food</a>
                        <a href="#" class="dropdown-item">Cat Treats</a>
                        <a href="#" class="dropdown-item">Cat Litter</a>
                        <a href="#" class="dropdown-item">Cat Accessories</a>
                        <a href="#" class="dropdown-item">Cat Toys</a>
                        <a href="#" class="dropdown-item">Cat Trees & Scratches</a>
                        <a href="#" class="dropdown-item">Cat Pharmacy</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Pharmacy</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Caring Tips</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Deals</a>
                </li>
                <!-- Login and Sign Up buttons -->
                    <div class="flex items-center space-x-4 ml-4">
                        <a href="{{ route('login') }}" class="px-4 py-2 text-indigo-600 font-medium hover:text-indigo-800 smooth-transition">Login</a>
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 smooth-transition">Sign Up</a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
                    

                <!-- Icons -->
                <div class="flex items-center space-x-4">
                    <button class="p-1 rounded-full text-gray-600 hover:text-indigo-600 focus:outline-none smooth-transition">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="p-1 rounded-full text-gray-600 hover:text-indigo-600 focus:outline-none smooth-transition">
                        <i class="fas fa-user"></i>
                    </button>
                    <button class="p-1 rounded-full text-gray-600 hover:text-indigo-600 focus:outline-none relative smooth-transition">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="absolute -top-1 -right-1 bg-indigo-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </button>
                    <button id="mobileMenuBtn" class="md:hidden p-1 rounded-full text-gray-600 hover:text-indigo-600 focus:outline-none smooth-transition">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-indigo-500 to-purple-600 text-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                    <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
                                <span class="block">Premium Care</span>
                                <span class="block text-indigo-200">For Your Furry Friends</span>
                            </h1>
                            <p class="mt-3 text-base text-indigo-100 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                High-quality products and services to keep your pets happy, healthy, and thriving.
                            </p>
                            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                <div class="rounded-md shadow">
                                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10 smooth-transition">
                                        Shop Now
                                    </a>
                                </div>
                                <div class="mt-3 sm:mt-0 sm:ml-3">
                                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 bg-opacity-60 hover:bg-opacity-70 md:py-4 md:text-lg md:px-10 smooth-transition">
                                        Our Services
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1586671267731-da2cf3ceeb80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1498&q=80" alt="Happy dog with owner">
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Shop by Category
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Everything your pet needs in one place
                </p>
            </div>

            <div class="mt-10 grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-4">
                <!-- Category 1 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md smooth-transition card-hover">
                    <div class="aspect-ratio-4-3 bg-gray-200 group-hover:opacity-75 smooth-transition">
                        <img src="https://images.unsplash.com/photo-1589927986089-35812388d1f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Dog food" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Food & Treats
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Premium nutrition for your pet</p>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md smooth-transition card-hover">
                    <div class="aspect-ratio-4-3 bg-gray-200 group-hover:opacity-75 smooth-transition">
                        <img src="https://images.unsplash.com/photo-1588943211346-0908a1fb0b01?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80" alt="Pet toys" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Toys & Accessories
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Fun and entertainment</p>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md smooth-transition card-hover">
                    <div class="aspect-ratio-4-3 bg-gray-200 group-hover:opacity-75 smooth-transition">
                        <img src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Pet bed" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Beds & Furniture
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Comfortable resting places</p>
                    </div>
                </div>

                <!-- Category 4 -->
                <div class="group relative bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md smooth-transition card-hover">
                    <div class="aspect-ratio-4-3 bg-gray-200 group-hover:opacity-75 smooth-transition">
                        <img src="https://images.unsplash.com/photo-1601758003120-67b1c0bf93d1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Pet grooming" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Grooming & Health
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Keep your pet clean and healthy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Popular Products
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Best sellers loved by pets and their owners
                </p>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <!-- Product 1 -->
                <div class="group relative bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75">
                        <img src="https://images.unsplash.com/photo-1589927986089-35812388d1f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Organic dog food" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Organic Grain-Free Dog Food
                                </a>
                            </h3>
                            <p class="text-sm font-medium text-gray-900">$24.99</p>
                        </div>
                        <div class="mt-1 flex items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star-half-alt text-yellow-400"></i>
                                <span class="text-gray-500 text-xs ml-1">(142)</span>
                            </div>
                        </div>
                    </div>
                    <button class="mt-4 w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300">
                        Add to Cart
                    </button>
                </div>

                <!-- Product 2 -->
                <div class="group relative bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75">
                        <img src="https://images.unsplash.com/photo-1591946614720-90a5875a5d3d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Cat tree" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Premium Cat Tree with Scratching Posts
                                </a>
                            </h3>
                            <p class="text-sm font-medium text-gray-900">$89.99</p>
                        </div>
                        <div class="mt-1 flex items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="far fa-star text-yellow-400"></i>
                                <span class="text-gray-500 text-xs ml-1">(87)</span>
                            </div>
                        </div>
                    </div>
                    <button class="mt-4 w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300">
                        Add to Cart
                    </button>
                </div>

                <!-- Product 3 -->
                <div class="group relative bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75">
                        <img src="https://images.unsplash.com/photo-1588943211346-0908a1fb0b01?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80" alt="Dog toys" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Durable Chew Toy Bundle (3-Pack)
                                </a>
                            </h3>
                            <p class="text-sm font-medium text-gray-900">$18.99</p>
                        </div>
                        <div class="mt-1 flex items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-500 text-xs ml-1">(256)</span>
                            </div>
                        </div>
                    </div>
                    <button class="mt-4 w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300">
                        Add to Cart
                    </button>
                </div>

                <!-- Product 4 -->
                <div class="group relative bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                    <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75">
                        <img src="https://images.unsplash.com/photo-1601758003836-410e9a5a4a17?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Pet carrier" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Airline Approved Pet Carrier
                                </a>
                            </h3>
                            <p class="text-sm font-medium text-gray-900">$45.99</p>
                        </div>
                        <div class="mt-1 flex items-center">
                            <div class="flex items-center">
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <i class="fas fa-star text-yellow-400"></i>
                                <span class="text-gray-500 text-xs ml-1">(312)</span>
                            </div>
                        </div>
                    </div>
                    <button class="mt-4 w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Our Caring Services
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Professional care for your beloved pets
                </p>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Service 1 -->
                <div class="bg-indigo-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Professional Grooming</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Keep your pet looking and feeling their best with our gentle grooming services.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">
                                Learn more <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-indigo-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Pet Sitting</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Trusted care for your pets when you're away. We treat them like family.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">
                                Learn more <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-indigo-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-600 text-white">
                            <i class="fas fa-stethoscope"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Veterinary Care</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Partnered with licensed veterinarians to keep your pets healthy and happy.
                        </p>
                        <div class="mt-6">
                            <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">
                                Learn more <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-12 bg-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                    What Pet Owners Say
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-indigo-100 mx-auto">
                    Don't just take our word for it
                </p>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Testimonial 1 -->
                <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-filter backdrop-blur-sm">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Sarah Johnson">
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium">Sarah Johnson</h3>
                            <div class="flex items-center mt-1">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 text-sm text-indigo-50">
                        "My dog Max absolutely loves the organic food from PetCare. His coat has never been shinier, and he has so much more energy!"
                    </p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-filter backdrop-blur-sm">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Michael Chen">
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium">Michael Chen</h3>
                            <div class="flex items-center mt-1">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 text-sm text-indigo-50">
                        "The grooming service is exceptional. My cat Luna used to hate baths, but now she's calm and relaxed during her spa days."
                    </p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white bg-opacity-10 p-6 rounded-lg backdrop-filter backdrop-blur-sm">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="David Rodriguez">
                        </div>
                        <div class="ml-4">
                            <h3 class="text-sm font-medium">David Rodriguez</h3>
                            <div class="flex items-center mt-1">
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star text-yellow-300"></i>
                                <i class="fas fa-star-half-alt text-yellow-300"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 text-sm text-indigo-50">
                        "The pet sitter from PetCare was amazing with my two dogs while I was on vacation. Daily updates and photos gave me peace of mind."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="px-6 py-8 sm:p-10 sm:pb-6">
                    <div class="text-center">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                            Join Our Pet Community
                        </h2>
                        <p class="mt-4 text-lg text-gray-500">
                            Sign up for our newsletter to receive exclusive offers, pet care tips, and more!
                        </p>
                    </div>
                    <div class="mt-6 max-w-md mx-auto">
                        <form class="sm:flex">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" name="email" type="email" autocomplete="email" required class="w-full px-5 py-3 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs border-gray-300 rounded-md" placeholder="Enter your email">
                            <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                                <button type="submit" class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                        <p class="mt-3 text-sm text-gray-500 text-center">
                            We care about your data. Read our <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Privacy Policy </a>.
                        </p>
                    </div>
                </div>
                <div class="px-6 py-4 bg-gray-50 text-center">
                    <p class="text-xs text-gray-500">
                        Get 10% off your first order when you subscribe!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-12 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Shop</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">All Products</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">New Arrivals</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">Best Sellers</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">Special Offers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Services</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">Grooming</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">Pet Sitting</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">Veterinary</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">Training</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Company</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">Our Team</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-base text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Connect</h3>
                    <div class="mt-4 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                    <div class="mt-6">
                        <h4 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Payment Methods</h4>
                        <div class="mt-2 flex space-x-4">
                            <i class="fab fa-cc-visa text-gray-400 text-xl"></i>
                            <i class="fab fa-cc-mastercard text-gray-400 text-xl"></i>
                            <i class="fab fa-cc-amex text-gray-400 text-xl"></i>
                            <i class="fab fa-cc-paypal text-gray-400 text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-base text-gray-400 text-center md:text-left">
                    &copy; 2023 PetCare. All rights reserved.
                </p>
                <div class="mt-4 md:mt-0 flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm">Shipping Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu (hidden by default) -->
    <div id="mobileMenu" class="hidden fixed inset-0 bg-black bg-opacity-75 z-50">
        <div class="fixed inset-y-0 right-0 max-w-xs w-full bg-white shadow-xl">
            <div class="flex items-center justify-between px-4 py-3 border-b border-gray-200">
                <div class="flex items-center">
                    <i class="fas fa-paw text-xl text-indigo-600 mr-2"></i>
                    <span class="text-xl font-bold text-gray-900">PetCare</span>
                </div>
                <button id="closeMobileMenu" class="p-2 rounded-md text-gray-400 hover:text-gray-500 focus:outline-none">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="px-4 py-6">
                <nav class="grid gap-6">
                    <a href="#" class="flex items-center p-3 rounded-md hover:bg-gray-50">
                        <span class="text-base font-medium text-gray-900">Home</span>
                    </a>
                    <a href="#" class="flex items-center p-3 rounded-md hover:bg-gray-50">
                        <span class="text-base font-medium text-gray-900">Shop</span>
                    </a>
                    <div class="relative">
                        <button class="flex items-center justify-between w-full p-3 rounded-md hover:bg-gray-50">
                            <span class="text-base font-medium text-gray-900">Services</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="mt-2 pl-4 hidden">
                            <a href="#" class="block p-3 text-sm text-gray-700 hover:bg-gray-50 rounded-md">Grooming</a>
                            <a href="#" class="block p-3 text-sm text-gray-700 hover:bg-gray-50 rounded-md">Veterinary</a>
                            <a href="#" class="block p-3 text-sm text-gray-700 hover:bg-gray-50 rounded-md">Pet Sitting</a>
                            <a href="#" class="block p-3 text-sm text-gray-700 hover:bg-gray-50 rounded-md">Training</a>
                        </div>
                    </div>
                    <a href="#" class="flex items-center p-3 rounded-md hover:bg-gray-50">
                        <span class="text-base font-medium text-gray-900">About</span>
                    </a>
                    <a href="#" class="flex items-center p-3 rounded-md hover:bg-gray-50">
                        <span class="text-base font-medium text-gray-900">Contact</span>
                    </a>
                </nav>
                <div class="mt-6">
                    <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                        Sign up
                    </a>
                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                        Existing customer? <a href="#" class="text-indigo-600 hover:text-indigo-500">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Mobile menu toggle
            const mobileMenuButton = document.querySelector('.md\\:hidden button');
            const mobileMenu = document.getElementById('mobileMenu');
            const closeMobileMenu = document.getElementById('closeMobileMenu');
            
            if (mobileMenuButton) {
                mobileMenuButton.addEventListener('click', () => {
                    mobileMenu.classList.remove('hidden');
                });
            }
            
            if (closeMobileMenu) {
                closeMobileMenu.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                });
            }
            
            // Service dropdown in mobile menu
            const serviceButton = mobileMenu.querySelector('button');
            if (serviceButton) {
                serviceButton.addEventListener('click', () => {
                    const dropdown = serviceButton.nextElementSibling;
                    dropdown.classList.toggle('hidden');
                });
            }
            
            // Add to cart animation
            const addToCartButtons = document.querySelectorAll('button:contains("Add to Cart")');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const productCard = button.closest('.group');
                    const productName = productCard.querySelector('h3 a').textContent.trim();
                    
                    // Animation
                    button.textContent = 'Added!';
                    button.classList.remove('bg-indigo-600', 'hover:bg-indigo-700');
                    button.classList.add('bg-green-500', 'hover:bg-green-600');
                    
                    // Reset after 2 seconds
                    setTimeout(() => {
                        button.textContent = 'Add to Cart';
                        button.classList.remove('bg-green-500', 'hover:bg-green-600');
                        button.classList.add('bg-indigo-600', 'hover:bg-indigo-700');
                    }, 2000);
                    
                    // In a real app, you would add to cart logic here
                    console.log(`Added ${productName} to cart`);
                });
            });
            
            // Newsletter form submission
            const newsletterForm = document.querySelector('form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', (e) => {
                    e.preventDefault();
                    const emailInput = document.getElementById('email-address');
                    console.log(`Subscribed with email: ${emailInput.value}`);
                    
                    // Show success message
                    const submitButton = newsletterForm.querySelector('button[type="submit"]');
                    submitButton.textContent = 'Subscribed!';
                    submitButton.classList.remove('bg-indigo-600', 'hover:bg-indigo-700');
                    submitButton.classList.add('bg-green-500', 'hover:bg-green-600');
                    
                    // Reset form
                    emailInput.value = '';
                    
                    // Reset button after 3 seconds
                    setTimeout(() => {
                        submitButton.textContent = 'Subscribe';
                        submitButton.classList.remove('bg-green-500', 'hover:bg-green-600');
                        submitButton.classList.add('bg-indigo-600', 'hover:bg-indigo-700');
                    }, 3000);
                });
            }
        });
    </script>
</body>
</html>