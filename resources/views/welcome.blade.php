<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Abdul Matheen Mohamed - Portfolio</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
        
        <!-- Phosphor Icons -->
        <script src="https://unpkg.com/@phosphor-icons/web"></script>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/css/theame.css', 'resources/js/app.js'])
        @else
            <style>
                @import "tailwindcss";
            </style>
        @endif

    </head>
    <body class="antialiased min-h-screen relative overflow-x-hidden selection:bg-orange-500 selection:text-white flex flex-col">
        
        <div class="bg-eclipse"></div>

        <!-- Header -->
        <header class="w-full max-w-5xl mx-auto px-6 py-8 flex justify-between items-center z-10 fade-up">
            <div class="text-xl font-bold tracking-wider text-white flex items-center gap-2">
                <i class="ph-fill ph-code text-orange-500"></i>
                <span>AMM</span>
            </div>
            <nav class="flex items-center gap-4">
                <!-- Social Icons Header -->
                <a href="https://github.com/neehtham" class="text-gray-400 hover:text-orange-400 transition-colors" title="GitHub">
                    <i class="ph ph-github-logo text-2xl"></i>
                </a>
                <a href="https://www.linkedin.com/in/abdul-matheen-mohamed-166299184" class="text-gray-400 hover:text-orange-400 transition-colors" title="LinkedIn">
                    <i class="ph ph-linkedin-logo text-2xl"></i>
                </a>
                <a href="https://x.com/abdulmatheen204" class="text-gray-400 hover:text-orange-400 transition-colors" title="Twitter">
                    <i class="ph ph-x-logo text-2xl"></i>
                </a>
                 {{-- @if (Route::has('login'))
                    <div class="ml-4 pl-4 border-l border-gray-800 flex items-center gap-4 text-sm hidden md:flex">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-300 hover:text-orange-400 transition-colors">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-300 hover:text-orange-400 transition-colors">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-4 py-2 rounded bg-orange-500/10 text-orange-500 hover:bg-orange-500/20 border border-orange-500/30 transition-all">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif --}}
            </nav>
        </header>

        <!-- Main Content -->
        <main class="flex-grow flex flex-col items-center justify-center w-full max-w-5xl mx-auto px-6 py-12 lg:py-24 z-10">
            
            <!-- Hero Section -->
            <div class="text-center w-full max-w-3xl mx-auto mb-20">
                <p class="text-orange-500 font-medium tracking-widest uppercase text-sm mb-4 fade-up delay-100 flex items-center justify-center gap-2">
                    <i class="ph ph-sparkle text-lg"></i>
                    Welcome to my portfolio
                </p>
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 tracking-tight fade-up delay-200">
                    Abdul <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-orange-600 glow-text">Matheen</span> Mohamed
                </h1>
                <p class="text-lg md:text-xl text-gray-400 leading-relaxed fade-up delay-300 max-w-2xl mx-auto">
                    Crafting elegant web experiences with a focus on Laravel & Modern JS ecosystems.
                </p>
                
                <div class="mt-10 flex items-center justify-center gap-4 fade-up delay-400">
                    <a href="#technologies" class="px-8 py-3 rounded-full bg-orange-600 text-white font-medium hover:bg-orange-500 transition-all glow-border shadow-[0_0_20px_rgba(234,88,12,0.4)]">
                        Explore Tech Stack
                    </a>
                </div>
            </div>

            <!-- Technologies Section -->
            <div id="technologies" class="w-full pt-10 flex flex-col items-center fade-up delay-500">
                <div class="flex items-center gap-4 mb-10 w-full">
                    <div class="h-[1px] bg-gradient-to-r from-transparent to-orange-500/30 flex-grow"></div>
                    <h2 class="text-2xl font-semibold text-white tracking-wide">Technologies</h2>
                    <div class="h-[1px] bg-gradient-to-l from-transparent to-orange-500/30 flex-grow"></div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 md:gap-6 w-full place-items-center">
                    
                    <!-- PHP -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" alt="PHP" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md" />
                        <span class="text-gray-300 font-medium tracking-wide">PHP</span>
                    </div>

                    <!-- Laravel -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="Laravel" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md" />
                        <span class="text-gray-300 font-medium tracking-wide">Laravel</span>
                    </div>
                    
                    <!-- JS -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md rounded" />
                        <span class="text-gray-300 font-medium tracking-wide">JavaScript</span>
                    </div>

                    <!-- Vue -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original.svg" alt="Vue.js" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md" />
                        <span class="text-gray-300 font-medium tracking-wide">Vue.js</span>
                    </div>

                    <!-- MySQL -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" alt="MySQL" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md" />
                        <span class="text-gray-300 font-medium tracking-wide">MySQL</span>
                    </div>

                    <!-- Python -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" alt="Python" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md" />
                        <span class="text-gray-300 font-medium tracking-wide">Python</span>
                    </div>
                    
                    <!-- Git -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" alt="Git" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md" />
                        <span class="text-gray-300 font-medium tracking-wide">Git</span>
                    </div>

                    <!-- CSS3 -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg" alt="CSS3" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md" />
                        <span class="text-gray-300 font-medium tracking-wide">CSS</span>
                    </div>

                    <!-- SCSS -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/sass/sass-original.svg" alt="SCSS" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md" />
                        <span class="text-gray-300 font-medium tracking-wide">SCSS</span>
                    </div>

                    <!-- Livewire -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/livewire/livewire-original.svg" alt="Livewire" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md" />
                        <span class="text-gray-300 font-medium tracking-wide">Livewire</span>
                    </div>

                    <!-- Tailwind CSS -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md" />
                        <span class="text-gray-300 font-medium tracking-wide">Tailwind</span>
                    </div>

                    <!-- Bootstrap -->
                    <div class="tech-card glow-card bg-[#18181b]/50 backdrop-blur-sm rounded-2xl p-6 flex flex-col items-center justify-center gap-3 border border-gray-800 transition-all duration-300 group w-full max-w-[140px] aspect-square">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300 drop-shadow-md" />
                        <span class="text-gray-300 font-medium tracking-wide">Bootstrap</span>
                    </div>

                </div>
            </div>

        </main>

        <!-- Footer -->
        <footer class="w-full border-t border-gray-800/50 py-8 mt-12 z-10 text-center md:text-left">
            <div class="max-w-5xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-gray-500 text-sm">
                    &copy; {{ date('Y') }} Abdul Matheen Mohamed. All rights reserved.
                </p>
                <div class="flex items-center gap-6">
                    <a href="#" class="text-gray-500 hover:text-orange-400 transition-colors text-sm flex items-center gap-2">
                        <i class="ph ph-envelope-simple text-lg"></i> Contact
                    </a>
                </div>
            </div>
        </footer>

    </body>
</html>
