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
    <a href="#" class="text-gray-900 hover:text-indigo-600 px-3 py-2 font-medium">About</a>
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