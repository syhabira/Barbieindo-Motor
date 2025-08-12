<script
      src="https://kit.fontawesome.com/35d8865ade.js"
      crossorigin="anonymous"
    ></script>
{{-- Ilove shabira --}}
<nav class="bg-white shadow-lg sticky w-full z-20 top-0">
    <div class="max-w-screen-xl mx-auto">
        <div class="flex items-center justify-between h-16">
            
            <div class="items-center">
                <span class="text-xl font-bold text-red-600">Baherindo</span><span class="text-xl font-bold text-gray-800">Motor</span>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/welcome') }}" 
                   class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-200 border-b-2 border-transparent hover:border-red-600">
                    Home
                </a>
                <a href="{{ url('/about') }}" 
                   class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-200 border-b-2 border-transparent hover:border-red-600">
                    Bikes
                </a>
                <a href="{{ url('/contact') }}" 
                   class="text-gray-700 hover:text-red-600 px-3 py-2 text-sm font-medium transition-colors duration-200 border-b-2 border-transparent hover:border-red-600">
                    Contact
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="motor" 
                   class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 text-sm font-medium rounded-lg transition-colors duration-200">
                    Admin
                </a>

                <button id="mobile-menu-button" 
                        class="md:hidden p-2 rounded-lg text-gray-700 hover:text-red-600 hover:bg-gray-100 transition-colors duration-200">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="md:hidden hidden pb-4">
            <div class="bg-gray-50 rounded-lg mt-2 p-2">
                <a href="{{ url('/welcome') }}" 
                   class="block text-gray-700 hover:text-red-600 hover:bg-white px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">
                    Home
                </a>
                <a href="{{ url('/about') }}" 
                   class="block text-gray-700 hover:text-red-600 hover:bg-white px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">
                    Bikes
                </a>
                <a href="{{ url('/contact') }}" 
                   class="block text-gray-700 hover:text-red-600 hover:bg-white px-3 py-2 rounded-md text-base font-medium transition-colors duration-200">
                    Contact
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    // Simple mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    });
</script>

<style>
    /* Custom styles for better animations */
    .transition-colors {
        transition-property: color, background-color, border-color;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 200ms;
    }
</style>