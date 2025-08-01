<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Store - E-commerce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom animations */
        @keyframes slideIn {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .slide-in {
            animation: slideIn 0.3s ease-out;
        }
        
        .fade-in {
            animation: fadeIn 0.3s ease-out;
        }
        
        /* Cart bounce animation */
        @keyframes bounce {
            0%, 20%, 60%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            80% { transform: translateY(-5px); }
        }
        
        .bounce {
            animation: bounce 0.6s;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header with Cart -->
    <header class="bg-white shadow-md sticky top-0 z-40">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-800">Product Store</h1>
                <button onclick="toggleCart()" class="relative bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    <span>🛒 Cart</span>
                    <span id="cartCount" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm">0</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Products Grid -->
    <main class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="productsGrid">
            <!-- Products will be dynamically generated -->
        </div>
    </main>

    <!-- Cart Sidebar -->
    <div id="cartSidebar" class="fixed inset-y-0 right-0 w-96 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 z-50">
        <div class="h-full flex flex-col">
            <div class="bg-blue-600 text-white p-4 flex justify-between items-center">
                <h2 class="text-xl font-bold">Shopping Cart</h2>
                <button onclick="toggleCart()" class="text-2xl hover:bg-blue-700 rounded p-1">×</button>
            </div>
            
            <div class="flex-1 overflow-y-auto p-4">
                <div id="cartItems" class="space-y-4">
                    <!-- Cart items will be dynamically added -->
                </div>
                
                <div id="emptyCart" class="text-center text-gray-500 py-8">
                    <p>Your cart is empty</p>
                    <p class="text-sm">Add some products to get started!</p>
                </div>
            </div>
            
            <div class="bg-gray-50 p-4 border-t">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-xl font-bold">Total: $<span id="totalAmount">0.00</span></span>
                </div>
                <button onclick="showPaymentPopup()" id="checkoutBtn" class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition duration-300 disabled:bg-gray-400 disabled:cursor-not-allowed" disabled>
                    Proceed to Payment
                </button>
            </div>
        </div>
    </div>

    <!-- Payment Popup -->
    <div id="paymentPopup" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg p-8 w-full max-w-md mx-4 slide-in">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold text-gray-800">Payment Details</h3>
                <button onclick="hidePaymentPopup()" class="text-2xl text-gray-500 hover:text-gray-700">×</button>
            </div>
            
            <div class="mb-6">
                <h4 class="font-semibold mb-4">Order Summary:</h4>
                <div id="paymentSummary" class="space-y-2 mb-4">
                    <!-- Payment summary will be populated -->
                </div>
                <div class="border-t pt-2">
                    <div class="flex justify-between font-bold text-lg">
                        <span>Total: $<span id="paymentTotal">0.00</span></span>
                    </div>
                </div>
            </div>
            
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Card Number</label>
                    <input type="text" placeholder="1234 5678 9012 3456" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Expiry Date</label>
                        <input type="text" placeholder="MM/YY" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
                        <input type="text" placeholder="123" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Cardholder Name</label>
                    <input type="text" placeholder="John Doe" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div class="flex space-x-4 pt-4">
                    <button type="button" onclick="hidePaymentPopup()" class="flex-1 bg-gray-300 text-gray-700 py-3 rounded-lg hover:bg-gray-400 transition duration-300">
                        Cancel
                    </button>
                    <button type="button" onclick="processPayment()" class="flex-1 bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                        Pay Now
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Cart Overlay -->
    <div id="cartOverlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40" onclick="toggleCart()"></div>

    <script>
        // Sample product data with placeholder images
        const products = [
            {
                id: 1,
                name: "Dog dry product",
                price: 99.99,
                image: "/images/download (1).jpeg",
                description: ""
            },
            {
                id: 2,
                name: "Dog dry product",
                price: 199.99,
                image: "/images/download (2).jpeg",
                description: ""
            },
            {
                id: 3,
                name: "Dog wet product",
                price: 49.99,
                image: "/images/download (3).jpeg",
                description: ""
            },
            {
                id: 4,
                name: "Cat dry product",
                price: 79.99,
                image: "/images/download (4).jpeg",
                description: ""
            },
            {
                id: 5,
                name: "Dog growth formula",
                price: 39.99,
                image: "/images/download (5).jpeg",
                description: ""
            },
            {
                id: 6,
                name: "Cat wet product",
                price: 29.99,
                image: "/images/download (6).jpeg",
                description: ""
            },
{
                id: 7,
                name: "Dog dry product",
                price: 29.99,
                image: "/images/download (7).jpeg",
                description: ""
            },
            {
                id: 8,
                name: "Cats growth formula",
                price: 29.99,
                image: "/images/download (8).jpeg",
                description: ""
            },
            {
                id: 9,
                name: "Dog dry product",
                price: 29.99,
                image: "/images/download.jpeg",
                description: ""
            }
        ];

        let cart = [];

        // Initialize the page
        function init() {
            displayProducts();
            updateCartUI();
        }

        // Display products in grid
        function displayProducts() {
            const grid = document.getElementById('productsGrid');
            grid.innerHTML = products.map(product => `
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    <div class="relative overflow-hidden">
                        <img src="${product.image}" alt="${product.name}" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-2 right-2 bg-white rounded-full p-2 shadow-md">
                            <button onclick="addToCart(${product.id})" class="text-blue-600 hover:text-blue-800">
                                ❤️
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">${product.name}</h3>
                        <p class="text-gray-600 mb-4">${product.description}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$${product.price}</span>
                            <button onclick="addToCart(${product.id})" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300 flex items-center space-x-2">
                                <span>🛒</span>
                                <span>Add to Cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Add product to cart
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            const existingItem = cart.find(item => item.id === productId);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    ...product,
                    quantity: 1
                });
            }
            
            updateCartUI();
            animateCartButton();
            showNotification(`${product.name} added to cart!`);
        }

        // Remove product from cart
        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCartUI();
            showNotification('Item removed from cart');
        }

        // Update quantity
        function updateQuantity(productId, change) {
            const item = cart.find(item => item.id === productId);
            if (item) {
                item.quantity += change;
                if (item.quantity <= 0) {
                    removeFromCart(productId);
                } else {
                    updateCartUI();
                }
            }
        }

        // Update cart UI
        function updateCartUI() {
            const cartItems = document.getElementById('cartItems');
            const emptyCart = document.getElementById('emptyCart');
            const cartCount = document.getElementById('cartCount');
            const totalAmount = document.getElementById('totalAmount');
            const checkoutBtn = document.getElementById('checkoutBtn');
            
            if (cart.length === 0) {
                cartItems.style.display = 'none';
                emptyCart.style.display = 'block';
                checkoutBtn.disabled = true;
            } else {
                cartItems.style.display = 'block';
                emptyCart.style.display = 'none';
                checkoutBtn.disabled = false;
                
                cartItems.innerHTML = cart.map(item => `
                    <div class="bg-gray-50 rounded-lg p-4 fade-in">
                        <div class="flex items-center space-x-4">
                            <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded">
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-800">${item.name}</h4>
                                <p class="text-gray-600">$${item.price}</p>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button onclick="updateQuantity(${item.id}, -1)" class="bg-gray-300 text-gray-700 w-8 h-8 rounded-full hover:bg-gray-400 transition duration-200">-</button>
                                <span class="w-8 text-center font-semibold">${item.quantity}</span>
                                <button onclick="updateQuantity(${item.id}, 1)" class="bg-gray-300 text-gray-700 w-8 h-8 rounded-full hover:bg-gray-400 transition duration-200">+</button>
                            </div>
                            <button onclick="removeFromCart(${item.id})" class="text-red-500 hover:text-red-700 ml-2">🗑️</button>
                        </div>
                        <div class="text-right mt-2">
                            <span class="font-semibold">Subtotal: $${(item.price * item.quantity).toFixed(2)}</span>
                        </div>
                    </div>
                `).join('');
            }
            
            const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const itemCount = cart.reduce((sum, item) => sum + item.quantity, 0);
            
            cartCount.textContent = itemCount;
            totalAmount.textContent = total.toFixed(2);
        }

        // Toggle cart sidebar
        function toggleCart() {
            const sidebar = document.getElementById('cartSidebar');
            const overlay = document.getElementById('cartOverlay');
            
            sidebar.classList.toggle('translate-x-full');
            overlay.classList.toggle('hidden');
        }

        // Show payment popup
        function showPaymentPopup() {
            const popup = document.getElementById('paymentPopup');
            const summary = document.getElementById('paymentSummary');
            const total = document.getElementById('paymentTotal');
            
            // Populate payment summary
            summary.innerHTML = cart.map(item => `
                <div class="flex justify-between">
                    <span>${item.name} × ${item.quantity}</span>
                    <span>$${(item.price * item.quantity).toFixed(2)}</span>
                </div>
            `).join('');
            
            const totalAmount = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            total.textContent = totalAmount.toFixed(2);
            
            popup.classList.remove('hidden');
            popup.classList.add('flex');
        }

        // Hide payment popup
        function hidePaymentPopup() {
            const popup = document.getElementById('paymentPopup');
            popup.classList.add('hidden');
            popup.classList.remove('flex');
        }

        // Process payment
        function processPayment() {
            // Simulate payment processing
            showNotification('Payment processed successfully! Thank you for your order.', 'success');
            cart = [];
            updateCartUI();
            hidePaymentPopup();
            toggleCart();
        }

        // Animate cart button
        function animateCartButton() {
            const cartBtn = document.querySelector('header button');
            cartBtn.classList.add('bounce');
            setTimeout(() => cartBtn.classList.remove('bounce'), 600);
        }

        // Show notification
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 p-4 rounded-lg text-white z-50 slide-in ${
                type === 'success' ? 'bg-green-600' : 'bg-blue-600'
            }`;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', init);
        
        // Close cart when clicking outside
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('cartSidebar');
            const cartBtn = document.querySelector('header button');
            
            if (!sidebar.contains(event.target) && !cartBtn.contains(event.target) && !sidebar.classList.contains('translate-x-full')) {
                toggleCart();
            }
        });
    </script>
</body>
</html>