<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PetCare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-login {
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), 
                              url('/images/istockphoto-1417882544-612x612(1).jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .login-animation {
            animation: slideInUp 0.8s ease-out;
        }
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        
        .input-focus {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .input-focus:focus {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(59, 130, 246, 0.2);
            border-color: #3b82f6;
        }
        
        .btn-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        
        .btn-hover:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.4);
        }
        
        .btn-hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-hover:hover::before {
            left: 100%;
        }
        
        .floating-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        
        .pulse-ring {
            animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
        }
        
        @keyframes pulse-ring {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }
            80%, 100% {
                transform: scale(1.2);
                opacity: 0;
            }
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }
        
        ::-webkit-scrollbar-thumb {
            background: rgba(59, 130, 246, 0.5);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: rgba(59, 130, 246, 0.7);
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans antialiased">
    <!-- Background container with custom image -->
    <div class="bg-login flex items-center justify-center p-4">
        <!-- Floating particles effect -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-white opacity-30 rounded-full floating-animation" style="animation-delay: 0s;"></div>
            <div class="absolute top-1/3 right-1/4 w-1 h-1 bg-blue-300 opacity-40 rounded-full floating-animation" style="animation-delay: 1s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-3 h-3 bg-purple-300 opacity-20 rounded-full floating-animation" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 right-1/3 w-1.5 h-1.5 bg-white opacity-25 rounded-full floating-animation" style="animation-delay: 0.5s;"></div>
        </div>

        <!-- Login form container -->
        <div class="w-full max-w-md glass-effect rounded-3xl shadow-2xl overflow-hidden login-animation relative">
            <!-- Decorative elements -->
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400 to-purple-500 opacity-10 rounded-full -translate-y-16 translate-x-16"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-gradient-to-tr from-purple-400 to-pink-500 opacity-10 rounded-full translate-y-12 -translate-x-12"></div>
            
            <!-- Header section with logo -->
            <div class="bg-gradient-to-br from-blue-600 via-purple-600 to-blue-700 py-10 px-8 text-center relative overflow-hidden">
                <div class="absolute inset-0 bg-black opacity-5"></div>
                
                <!-- Pulse ring effect -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-24 h-24 border-2 border-white opacity-20 rounded-full pulse-ring"></div>
                </div>
                
                <div class="relative z-10">
                    <div class="w-20 h-20 mx-auto mb-4 bg-white rounded-full flex items-center justify-center shadow-xl floating-animation">
                        <i class="fas fa-paw text-3xl text-blue-600"></i>
                    </div>
                    <h1 class="text-3xl font-bold text-white mb-2">Welcome Back</h1>
                    <p class="text-blue-100 text-sm">Sign in to your PetCare account</p>
                </div>
            </div>

            <!-- Form section -->
            <div class="p-8 relative">
                <!-- Validation Errors -->
                <div id="errorContainer" class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-r-lg hidden">
                    <div class="text-red-600 font-medium flex items-center">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        Authentication Failed
                    </div>
                    <ul id="errorList" class="mt-2 list-disc list-inside text-sm text-red-600">
                        <!-- Errors will be populated here -->
                    </ul>
                </div>

                <!-- Success Message -->
                <div id="successContainer" class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-r-lg hidden">
                    <div class="text-green-600 font-medium flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span id="successMessage">Success!</span>
                    </div>
                </div>

                <form method="POST" action="" class="space-y-6" id="loginForm">
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-3 transition-all duration-300">
                            <i class="fas fa-envelope mr-2 text-blue-500"></i>Email Address
                        </label>
                        <div class="relative">
                            <input id="email" type="email" name="email" required autofocus
                                   class="input-focus w-full py-4 px-5 pr-12 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-white/80 backdrop-blur-sm"
                                   placeholder="Enter your email address">
                            <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400 transition-colors duration-300"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-3 transition-all duration-300">
                            <i class="fas fa-lock mr-2 text-blue-500"></i>Password
                        </label>
                        <div class="relative">
                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                   class="input-focus w-full py-4 px-5 pr-12 border-2 border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-500 focus:border-blue-500 sm:text-sm bg-white/80 backdrop-blur-sm"
                                   placeholder="Enter your password">
                            <button type="button" id="togglePassword" 
                                    class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600 transition-colors duration-300">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox"
                                   class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded transition-all duration-300">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700 select-none cursor-pointer">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" 
                               class="font-medium text-blue-600 hover:text-blue-500 transition-colors duration-300 hover:underline">
                                Forgot password?
                            </a>
                        </div>
                    </div>

                    <!-- Login Button -->
                    <div>
                        <button type="submit" id="loginBtn"
                                class="btn-hover w-full flex justify-center items-center py-4 px-6 border border-transparent rounded-xl shadow-lg text-sm font-semibold text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed">
                            <span id="btnText">Log In to PetCare</span>
                            <i id="loadingIcon" class="fas fa-spinner fa-spin ml-2 hidden"></i>
                        </button>
                    </div>

                    <!-- Social Login -->
                    <div class="mt-8">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-4 bg-white text-gray-500 font-medium">Or continue with</span>
                            </div>
                        </div>

                        <div class="mt-6 grid grid-cols-2 gap-4">
                            <button type="button" class="w-full inline-flex justify-center items-center py-3 px-4 border border-gray-300 rounded-xl shadow-sm text-sm font-medium text-gray-600 bg-white/80 backdrop-blur-sm hover:bg-white hover:shadow-md transition-all duration-300">
                                <i class="fab fa-google text-red-500 text-lg"></i>
                                <span class="ml-2">Google</span>
                            </button>
                            <button type="button" class="w-full inline-flex justify-center items-center py-3 px-4 border border-gray-300 rounded-xl shadow-sm text-sm font-medium text-gray-600 bg-white/80 backdrop-blur-sm hover:bg-white hover:shadow-md transition-all duration-300">
                                <i class="fab fa-facebook text-blue-600 text-lg"></i>
                                <span class="ml-2">Facebook</span>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Register Link -->
                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="font-semibold text-blue-600 hover:text-blue-500 transition-colors duration-300 hover:underline">
                            Create one now
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password toggle functionality
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');
            
            if (togglePassword && password) {
                togglePassword.addEventListener('click', function() {
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);
                    
                    const icon = this.querySelector('i');
                    icon.classList.toggle('fa-eye-slash');
                    icon.classList.toggle('fa-eye');
                    
                    // Add a subtle animation
                    this.style.transform = 'scale(1.1)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 150);
                });
            }

            // Form submission with loading state
            const form = document.querySelector('#loginForm');
            const loginBtn = document.querySelector('#loginBtn');
            const btnText = document.querySelector('#btnText');
            const loadingIcon = document.querySelector('#loadingIcon');
            
            if (form && loginBtn) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault(); // Prevent actual form submission for demo
                    
                    // Show loading state
                    loginBtn.disabled = true;
                    btnText.textContent = 'Signing In...';
                    loadingIcon.classList.remove('hidden');
                    
                    // Basic validation
                    const email = document.getElementById('email').value;
                    const passwordField = document.getElementById('password').value;
                    
                    if (!email || !passwordField) {
                        showNotification('Please fill in all fields', 'error');
                        resetButton();
                        return false;
                    }
                    
                    if (!isValidEmail(email)) {
                        showNotification('Please enter a valid email address', 'error');
                        resetButton();
                        return false;
                    }
                    
                    // Simulate API call
                    setTimeout(() => {
                        showNotification('Login successful! Redirecting...', 'success');
                        resetButton();
                        btnText.textContent = 'Success!';
                        loginBtn.style.background = 'linear-gradient(to right, #10b981, #059669)';
                        
                        // Reset after success
                        setTimeout(() => {
                            btnText.textContent = 'Sign In to PetCare';
                            loginBtn.style.background = '';
                        }, 2000);
                    }, 2000);
                });
            }
            
            function resetButton() {
                loginBtn.disabled = false;
                btnText.textContent = 'Sign In to PetCare';
                loadingIcon.classList.add('hidden');
            }
            
            function isValidEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }
            
            function showNotification(message, type) {
                // Create notification element
                const notification = document.createElement('div');
                notification.className = `fixed top-6 right-6 z-50 max-w-sm p-4 rounded-xl shadow-2xl transition-all duration-500 transform translate-x-full ${
                    type === 'error' ? 'bg-red-500 text-white' : 'bg-green-500 text-white'
                }`;
                notification.innerHTML = `
                    <div class="flex items-center">
                        <i class="fas ${type === 'error' ? 'fa-exclamation-circle' : 'fa-check-circle'} mr-3 text-lg"></i>
                        <span class="font-medium">${message}</span>
                        <button class="ml-4 text-white hover:text-gray-200 transition-colors duration-200" onclick="this.parentElement.parentElement.remove()">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;
                
                document.body.appendChild(notification);
                
                // Animate in
                setTimeout(() => {
                    notification.classList.remove('translate-x-full');
                }, 100);
                
                // Auto remove after 5 seconds
                setTimeout(() => {
                    notification.classList.add('translate-x-full');
                    setTimeout(() => {
                        if (notification.parentElement) {
                            notification.remove();
                        }
                    }, 500);
                }, 5000);
            }

            // Input animations and effects
            const inputs = document.querySelectorAll('input[type="email"], input[type="password"]');
            inputs.forEach(input => {
                // Focus effects
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('transform', 'scale-105');
                    const icon = this.parentElement.querySelector('i');
                    if (icon) {
                        icon.classList.add('text-blue-500');
                        icon.classList.remove('text-gray-400');
                    }
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('transform', 'scale-105');
                    const icon = this.parentElement.querySelector('i');
                    if (icon && !this.value) {
                        icon.classList.remove('text-blue-500');
                        icon.classList.add('text-gray-400');
                    }
                });

                // Typing effect
                input.addEventListener('input', function() {
                    if (this.value) {
                        this.classList.add('bg-white');
                        this.classList.remove('bg-white/80');
                    } else {
                        this.classList.remove('bg-white');
                        this.classList.add('bg-white/80');
                    }
                });
            });

            // Label animations
            inputs.forEach(input => {
                const label = input.parentElement.previousElementSibling;
                if (label) {
                    input.addEventListener('focus', () => {
                        label.classList.add('text-blue-600', 'transform', 'scale-105');
                    });
                    
                    input.addEventListener('blur', () => {
                        if (!input.value) {
                            label.classList.remove('text-blue-600', 'transform', 'scale-105');
                        }
                    });
                }
            });

            // Add parallax effect to background
            let ticking = false;
            
            function updateParallax() {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.5;
                
                const bgElement = document.querySelector('.bg-login');
                if (bgElement) {
                    bgElement.style.transform = `translateY(${rate}px)`;
                }
                
                ticking = false;
            }
            
            function requestTick() {
                if (!ticking) {
                    requestAnimationFrame(updateParallax);
                    ticking = true;
                }
            }
            
            window.addEventListener('scroll', requestTick);

            // Add entrance animation delay for form elements
            const formElements = document.querySelectorAll('.form-group, button, .mt-8');
            formElements.forEach((element, index) => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    element.style.transition = 'all 0.6s ease-out';
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, 300 + (index * 100));
            });
        });
    </script>
</body>
</html>