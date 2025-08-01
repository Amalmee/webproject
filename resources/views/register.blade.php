<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | PetCare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-register {
            background-image: url('/images/istockphoto-1417882544-612x612(1).jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        /* Custom animations */
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="min-h-screen font-sans antialiased">
    <!-- Background container with image -->
    <div class="bg-register min-h-screen flex items-center justify-center p-4">
        <!-- Registration form container -->
        <div class="w-full max-w-lg bg-white bg-opacity-95 rounded-xl shadow-2xl overflow-hidden backdrop-blur-sm fade-in">
            <!-- Header section -->
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 py-6 px-8 text-center">
                <h1 class="text-3xl font-bold text-white">Create Your Account</h1>
                <p class="mt-2 text-indigo-100">Join our pet-loving community</p>
            </div>

            <!-- Form section -->
            <div class="p-8">
                <!-- Success/Error Messages Container -->
                <div id="messageContainer" class="hidden mb-4"></div>

                <form id="registrationForm" class="space-y-6">
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                            <input id="name" type="text" name="name" required
                                   class="py-3 pl-10 block w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                                   placeholder="John Doe">
                        </div>
                    </div>

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input id="email" type="email" name="email" required
                                   class="py-3 pl-10 block w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                                   placeholder="you@example.com">
                        </div>
                    </div>

                    <!-- Contact Number -->
                    <div>
                        <label for="contact" class="block text-sm font-medium text-gray-700 mb-1">Contact Number *</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-phone text-gray-400"></i>
                            </div>
                            <input id="contact" type="tel" name="contact" required
                                   class="py-3 pl-10 block w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                                   placeholder="+94 XX XXX XXXX" pattern="[+]?[0-9\s\-()]+">
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Enter your mobile number with country code</p>
                    </div>

                    <!-- NIC Number -->
                    <div>
                        <label for="nic" class="block text-sm font-medium text-gray-700 mb-1">NIC Number *</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-id-card text-gray-400"></i>
                            </div>
                            <input id="nic" type="text" name="nic" required
                                   class="py-3 pl-10 block w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                                   placeholder="XXXXXXXXXV or XXXXXXXXXXXX" maxlength="12">
                        </div>
                        <p class="mt-1 text-xs text-gray-500">Old format (XXXXXXXXXV) or new format (12 digits)</p>
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password *</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password" type="password" name="password" required
                                   class="py-3 pl-10 pr-12 block w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                                   placeholder="••••••••">
                            <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 transition duration-200">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <div class="mt-2">
                            <div class="text-xs text-gray-500">Password strength:</div>
                            <div class="mt-1 w-full bg-gray-200 rounded-full h-2">
                                <div id="passwordStrength" class="bg-red-500 h-2 rounded-full transition-all duration-300" style="width: 0%"></div>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">Minimum 8 characters with uppercase, lowercase, number and special character</p>
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password *</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                   class="py-3 pl-10 block w-full border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200"
                                   placeholder="••••••••">
                        </div>
                        <div id="passwordMatch" class="mt-1 text-xs hidden"></div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex items-start">
                        <input id="terms" name="terms" type="checkbox" required
                               class="mt-1 h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="terms" class="ml-3 block text-sm text-gray-700">
                            I agree to the <a href="#" class="text-indigo-600 hover:text-indigo-500 underline">Terms of Service</a> and <a href="#" class="text-indigo-600 hover:text-indigo-500 underline">Privacy Policy</a> *
                        </label>
                    </div>

                    <!-- Register Button -->
                    <div>
                        <button type="submit" id="submitBtn"
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-200 ease-in-out transform hover:scale-105">
                            <span id="submitText">Create Account</span>
                            <i id="submitSpinner" class="fas fa-spinner fa-spin ml-2 hidden"></i>
                        </button>
                    </div>
                </form>

                <!-- Login Link -->
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 underline">
                            Login
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registrationForm');
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');
            const passwordConfirmation = document.getElementById('password_confirmation');
            const passwordStrength = document.getElementById('passwordStrength');
            const passwordMatch = document.getElementById('passwordMatch');
            const messageContainer = document.getElementById('messageContainer');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const submitSpinner = document.getElementById('submitSpinner');

            // Password toggle functionality
            if (togglePassword && password) {
                togglePassword.addEventListener('click', function() {
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);
                    this.querySelector('i').classList.toggle('fa-eye-slash');
                    this.querySelector('i').classList.toggle('fa-eye');
                });
            }

            // Password strength checker
            password.addEventListener('input', function() {
                const value = this.value;
                let strength = 0;
                let color = 'bg-red-500';
                
                if (value.length >= 8) strength += 25;
                if (/[a-z]/.test(value)) strength += 25;
                if (/[A-Z]/.test(value)) strength += 25;
                if (/[0-9]/.test(value)) strength += 12.5;
                if (/[^A-Za-z0-9]/.test(value)) strength += 12.5;
                
                if (strength >= 75) color = 'bg-green-500';
                else if (strength >= 50) color = 'bg-yellow-500';
                else if (strength >= 25) color = 'bg-orange-500';
                
                passwordStrength.style.width = strength + '%';
                passwordStrength.className = `h-2 rounded-full transition-all duration-300 ${color}`;
            });

            // Password match checker
            function checkPasswordMatch() {
                if (passwordConfirmation.value) {
                    if (password.value === passwordConfirmation.value) {
                        passwordMatch.textContent = '✓ Passwords match';
                        passwordMatch.className = 'mt-1 text-xs text-green-600';
                        passwordMatch.classList.remove('hidden');
                    } else {
                        passwordMatch.textContent = '✗ Passwords do not match';
                        passwordMatch.className = 'mt-1 text-xs text-red-600';
                        passwordMatch.classList.remove('hidden');
                    }
                } else {
                    passwordMatch.classList.add('hidden');
                }
            }

            password.addEventListener('input', checkPasswordMatch);
            passwordConfirmation.addEventListener('input', checkPasswordMatch);

            // NIC validation
            function validateNIC(nic) {
                // Sri Lankan NIC validation
                const oldFormat = /^[0-9]{9}[vVxX]$/;
                const newFormat = /^[0-9]{12}$/;
                return oldFormat.test(nic) || newFormat.test(nic);
            }

            // Phone number validation
            function validatePhone(phone) {
                const phoneRegex = /^[+]?[0-9\s\-()]{8,15}$/;
                return phoneRegex.test(phone);
            }

            // Email validation
            function validateEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            // Show message function
            function showMessage(message, type = 'error') {
                const bgColor = type === 'success' ? 'bg-green-50 border-green-500' : 'bg-red-50 border-red-500';
                const textColor = type === 'success' ? 'text-green-600' : 'text-red-600';
                
                messageContainer.innerHTML = `
                    <div class="${bgColor} border-l-4 p-4 rounded">
                        <div class="font-medium ${textColor}">${message}</div>
                    </div>
                `;
                messageContainer.classList.remove('hidden');
                
                // Auto hide after 5 seconds
                setTimeout(() => {
                    messageContainer.classList.add('hidden');
                }, 5000);
            }

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                const formData = new FormData(form);
                const data = Object.fromEntries(formData);
                
                // Validation
                let errors = [];
                
                if (!data.name.trim()) errors.push('Full name is required');
                if (!validateEmail(data.email)) errors.push('Please enter a valid email address');
                if (!validatePhone(data.contact)) errors.push('Please enter a valid contact number');
                if (!validateNIC(data.nic)) errors.push('Please enter a valid NIC number');
                if (data.password.length < 8) errors.push('Password must be at least 8 characters long');
                if (data.password !== data.password_confirmation) errors.push('Passwords do not match');
                if (!data.terms) errors.push('You must agree to the terms and conditions');
                
                // Password strength validation
                const hasUpper = /[A-Z]/.test(data.password);
                const hasLower = /[a-z]/.test(data.password);
                const hasNumber = /[0-9]/.test(data.password);
                const hasSpecial = /[^A-Za-z0-9]/.test(data.password);
                
                if (!hasUpper || !hasLower || !hasNumber || !hasSpecial) {
                    errors.push('Password must contain uppercase, lowercase, number and special character');
                }
                
                if (errors.length > 0) {
                    showMessage(errors.join('<br>'), 'error');
                    return;
                }
                
                // Simulate form submission
                submitText.textContent = 'Creating Account...';
                submitSpinner.classList.remove('hidden');
                submitBtn.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    showMessage('Account created successfully! Welcome to PetCare!', 'success');
                    form.reset();
                    submitText.textContent = 'Create Account';
                    submitSpinner.classList.add('hidden');
                    submitBtn.disabled = false;
                    passwordStrength.style.width = '0%';
                    passwordMatch.classList.add('hidden');
                }, 2000);
            });

            // Real-time validation for fields
            document.getElementById('email').addEventListener('blur', function() {
                if (this.value && !validateEmail(this.value)) {
                    this.classList.add('border-red-500');
                } else {
                    this.classList.remove('border-red-500');
                }
            });

            document.getElementById('contact').addEventListener('blur', function() {
                if (this.value && !validatePhone(this.value)) {
                    this.classList.add('border-red-500');
                } else {
                    this.classList.remove('border-red-500');
                }
            });

            document.getElementById('nic').addEventListener('blur', function() {
                if (this.value && !validateNIC(this.value)) {
                    this.classList.add('border-red-500');
                } else {
                    this.classList.remove('border-red-500');
                }
            });
        });
    </script>
</body>
</html>