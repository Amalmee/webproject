<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4">About Us</h3>
                <p class="text-gray-300">Brief description of your company and what you do.</p>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="/" class="text-gray-300 hover:text-white transition">Home</a></li>
                    <li><a href="/about" class="text-gray-300 hover:text-white transition">About</a></li>
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
            <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
        </div>
    </div>
</footer>