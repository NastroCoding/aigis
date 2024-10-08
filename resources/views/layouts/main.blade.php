<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIGIS - Intelligent Support Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <!-- Updated Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Climate+Crisis&family=Fira+Sans+Condensed:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        .font-climate {
            font-family: 'Climate Crisis', cursive;
        }

        .font-fira {
            font-family: 'Fira Sans Condensed', sans-serif;
        }

        .hero-pattern {
            background-image: url('/api/placeholder/1920/1080');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .service-card {
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body class="bg-gray-50 font-fira">
    <header class="fixed w-full bg-white/90 backdrop-blur-sm border-b border-gray-100 z-50">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="flex items-center justify-between h-16 lg:h-[72px]">
                <div class="flex items-center flex-shrink-0">
                    <a href="#" class="flex items-center space-x-2">
                        <svg class="w-8 h-8 text-indigo-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                        <span class="text-xl font-climate text-gray-900">AIGIS</span>
                    </a>
                </div>

                <nav class="hidden lg:flex lg:space-x-8">
                    <a href="#services"
                        class="text-[0.9rem] font-medium text-gray-700 transition-colors hover:text-indigo-600">Services</a>
                    <a href="#testimonials"
                        class="text-[0.9rem] font-medium text-gray-700 transition-colors hover:text-indigo-600">Testimonials</a>
                    <a href="#"
                        class="text-[0.9rem] font-medium text-gray-700 transition-colors hover:text-indigo-600">Pricing</a>
                    <a href="#"
                        class="text-[0.9rem] font-medium text-gray-700 transition-colors hover:text-indigo-600">Contact</a>
                </nav>

                <div class="flex items-center space-x-4">
                    <a href="#"
                        class="hidden lg:inline-flex items-center justify-center px-4 py-2 text-[0.9rem] font-medium text-gray-700 transition-colors bg-gray-100 rounded-lg hover:bg-gray-200">Sign
                        in</a>
                    <a href="#"
                        class="inline-flex items-center justify-center px-4 py-2 text-[0.9rem] font-medium text-white transition-colors bg-indigo-600 rounded-lg hover:bg-indigo-700">Start
                        Free Trial</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section with Background -->
        <section class="relative min-h-screen hero-pattern">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50"></div>
            <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 pt-32 pb-16 text-center lg:pt-48">
                <div class="animate-fadeInUp opacity-0" style="animation-delay: 0.2s">
                    <span
                        class="inline-flex items-center px-4 py-1.5 rounded-lg bg-indigo-600/20 text-indigo-100 text-[0.9rem] font-medium backdrop-blur-sm">
                        Next Generation Support System
                    </span>
                </div>

                <h1 class="font-climate mt-8 text-[2.618rem] leading-tight tracking-tight text-white sm:text-[4.236rem] animate-fadeInUp opacity-0"
                    style="animation-delay: 0.4s; letter-spacing:3px">
                    Intelligent Support<br class="hidden lg:block" />
                    <span class="text-indigo-400">Made Simple</span>
                </h1>

                <p class="mx-auto mt-6 max-w-2xl text-[1.618rem] leading-relaxed text-gray-200 animate-fadeInUp opacity-0"
                    style="animation-delay: 0.6s">
                    Transform your customer support with AI-powered ticketing. Automate responses, track metrics, and
                    deliver exceptional service at scale.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4 animate-fadeInUp opacity-0"
                    style="animation-delay: 0.8s">
                    <a href="#"
                        class="inline-flex items-center justify-center px-8 py-4 text-[1rem] font-medium text-white transition-all duration-200 bg-indigo-600 rounded-lg hover:bg-indigo-700">
                        Get Started
                    </a>
                    <a href="#"
                        class="inline-flex items-center justify-center px-8 py-4 text-[1rem] font-medium text-white transition-all duration-200 bg-white/10 rounded-lg hover:bg-white/20 backdrop-blur-sm">
                        Watch Demo
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20 bg-white">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="font-climate text-3xl text-gray-900 sm:text-4xl">Our Services</h2>
                    <p class="mt-4 text-xl text-gray-600">Comprehensive support solutions for modern businesses</p>
                </div>

                <div class="grid grid-cols-1 gap-8 mt-16 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Service Card 1 -->
                    <div class="service-card p-8 bg-white rounded-2xl shadow-lg border border-gray-100">
                        <div class="w-10 h-10 text-indigo-600">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-gray-900">AI-Powered Routing</h3>
                        <p class="mt-4 text-gray-600">Automatically route tickets to the right department using advanced
                            AI algorithms</p>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="service-card p-8 bg-white rounded-2xl shadow-lg border border-gray-100">
                        <div class="w-10 h-10 text-indigo-600">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-gray-900">Smart Responses</h3>
                        <p class="mt-4 text-gray-600">Generate intelligent responses based on historical data and
                            context</p>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="service-card p-8 bg-white rounded-2xl shadow-lg border border-gray-100">
                        <div class="w-10 h-10 text-indigo-600">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold text-gray-900">Analytics Dashboard</h3>
                        <p class="mt-4 text-gray-600">Real-time insights into support performance and customer
                            satisfaction</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="py-20 bg-gray-50">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="font-climate text-3xl text-gray-900 sm:text-4xl">What Our Clients Say</h2>
                    <p class="mt-4 text-xl text-gray-600">Don't just take our word for it</p>
                </div>
                <!-- Testimonial 1 -->
                <div class="p-8 bg-white rounded-2xl shadow-lg border border-gray-100">
                    <div class="flex items-center">
                        <img src="/api/placeholder/40/40" alt="Avatar" class="w-10 h-10 rounded-full" />
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-900">Sarah Chen</h4>
                            <p class="text-sm text-gray-600">CTO at TechFlow</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="flex text-yellow-400 mb-2">
                            ★★★★★
                        </div>
                        <p class="text-gray-600">"AIGIS transformed our customer support operations. The AI-powered
                            routing saved our team countless hours and improved response times dramatically."</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="p-8 bg-white rounded-2xl shadow-lg border border-gray-100">
                    <div class="flex items-center">
                        <img src="/api/placeholder/40/40" alt="Avatar" class="w-10 h-10 rounded-full" />
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-900">Marcus Rodriguez</h4>
                            <p class="text-sm text-gray-600">Support Lead at Dataverse</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="flex text-yellow-400 mb-2">
                            ★★★★★
                        </div>
                        <p class="text-gray-600">"The analytics dashboard gives us insights we never had before. We can
                            now make data-driven decisions to improve our support quality."</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="p-8 bg-white rounded-2xl shadow-lg border border-gray-100">
                    <div class="flex items-center">
                        <img src="/api/placeholder/40/40" alt="Avatar" class="w-10 h-10 rounded-full" />
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-900">Emma Thompson</h4>
                            <p class="text-sm text-gray-600">CEO at CloudScale</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="flex text-yellow-400 mb-2">
                            ★★★★★
                        </div>
                        <p class="text-gray-600">"The smart responses feature is incredibly accurate. It helps our team
                            maintain consistency while reducing response time by 60%."</p>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-20 bg-indigo-600">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="text-center">
                        <h3 class="font-climate text-4xl text-white">98%</h3>
                        <p class="mt-2 text-lg text-indigo-100">Customer Satisfaction</p>
                    </div>
                    <div class="text-center">
                        <h3 class="font-climate text-4xl text-white">2.5x</h3>
                        <p class="mt-2 text-lg text-indigo-100">Faster Resolution</p>
                    </div>
                    <div class="text-center">
                        <h3 class="font-climate text-4xl text-white">60%</h3>
                        <p class="mt-2 text-lg text-indigo-100">Cost Reduction</p>
                    </div>
                    <div class="text-center">
                        <h3 class="font-climate text-4xl text-white">24/7</h3>
                        <p class="mt-2 text-lg text-indigo-100">Support Coverage</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-white">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="font-climate text-3xl text-gray-900 sm:text-4xl">Ready to Transform Your Support?</h2>
                    <p class="mt-4 text-xl text-gray-600">Start your free trial today. No credit card required.</p>
                    <div class="mt-8">
                        <a href="#"
                            class="inline-flex items-center justify-center px-8 py-4 text-[1rem] font-medium text-white transition-all duration-200 bg-indigo-600 rounded-lg hover:bg-indigo-700">
                            Get Started Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-gray-400">
            <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <h3 class="font-climate text-lg text-white mb-4">AIGIS</h3>
                        <p class="text-sm">Next-generation customer support platform powered by artificial
                            intelligence.</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white mb-4">Product</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-white">Features</a></li>
                            <li><a href="#" class="hover:text-white">Pricing</a></li>
                            <li><a href="#" class="hover:text-white">API</a></li>
                            <li><a href="#" class="hover:text-white">Documentation</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white mb-4">Company</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-white">About</a></li>
                            <li><a href="#" class="hover:text-white">Blog</a></li>
                            <li><a href="#" class="hover:text-white">Careers</a></li>
                            <li><a href="#" class="hover:text-white">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-white mb-4">Legal</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-white">Privacy</a></li>
                            <li><a href="#" class="hover:text-white">Terms</a></li>
                            <li><a href="#" class="hover:text-white">Security</a></li>
                        </ul>
                    </div>
                </div>
                <div class="pt-8 mt-8 border-t border-gray-800 text-center text-sm">
                    <p>&copy; 2024 AIGIS. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </main>

    <script>
        // Previous JavaScript remains the same
    </script>
</body>

</html>
