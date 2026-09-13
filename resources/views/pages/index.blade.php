<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInSlideSlow {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-smooth {
            animation: fadeInSlideSlow 1.1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
        }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.25s; }
        .delay-3 { animation-delay: 0.4s; }
        .delay-4 { animation-delay: 0.55s; }
    </style>
</head>
<body class="bg-[#171412] text-[#E8DCC4] font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-[#4E382A] selection:text-white relative overflow-x-hidden">

    <div class="absolute top-12 left-1/2 -translate-x-1/2 w-[500px] h-[220px] bg-[#634832]/20 blur-[120px] rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-5xl mx-auto px-6 py-5 w-full flex flex-col justify-between flex-grow relative z-10">
        
        <nav class="flex items-center justify-between py-2 animate-fade-in-smooth delay-1">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 rounded-full border border-[#4E382A] flex items-center justify-center bg-[#201B18]">
                    <span class="text-xs"></span>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-6 text-sm text-[#A89F95]">
                <a href="#" class="text-white font-medium underline underline-offset-8">Home</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Categories</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Search</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">History</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Cart</a>
            </div>

            <div class="flex items-center space-x-3">
                <a href="#" class="px-5 py-2 text-xs font-medium bg-[#E8DCC4] text-[#171412] rounded-full hover:bg-white transition shadow-sm">Log-In</a>
                <a href="#" class="px-5 py-2 text-xs font-medium border border-[#4E382A] bg-[#3B2D25] text-[#E8DCC4] rounded-full hover:bg-[#4E382A] transition">Sign-Up</a>
            </div>
        </nav>

        <header class="text-center my-3 animate-fade-in-smooth delay-2">
            <p class="text-[10px] uppercase tracking-[0.3em] text-[#A89F95] mb-2 font-medium">Est. 2026 • Freshly Baked</p>
            <h1 class="text-3xl md:text-5xl font-serif tracking-wide leading-[1.15] mb-3 text-[#E8DCC4] max-w-3xl mx-auto">
                LUXURY CROISSANTS, ARTISANALLY CRAFTED.
            </h1>
            <p class="text-xs md:text-sm text-[#A89F95] max-w-xl mx-auto leading-relaxed">
                Experience the authentic taste of Parisian pastries, made with the finest organic butter and flour, baked fresh every morning just for you.
            </p>
        </header>

        <div class="max-w-4xl mx-auto w-full flex flex-col gap-4 my-2">

            <div class="rounded-3xl overflow-hidden shadow-2xl border border-[#352C27] bg-[#201B18] w-full h-[240px] md:h-[300px] animate-fade-in-smooth delay-3">
                <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&q=80&w=1200" alt="Luxury Croissants" class="w-full h-full object-cover hover:scale-105 transition duration-700">
            </div>

            <div class="bg-[#201B18] border border-[#352C27] rounded-2xl px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-xl animate-fade-in-smooth delay-4">

                <div class="flex items-center space-x-3">
                    <span class="text-2xl md:text-3xl font-light text-[#E8DCC4]">98K<span class="text-[#A89F95]">+</span></span>
                    <p class="text-[11px] text-[#A89F95] leading-snug">
                        Satisfied Guests Who<br>Love Our Pastries
                    </p>
                </div>

                <div>
                    <a href="#" class="inline-flex items-center space-x-2 px-5 py-2.5 bg-[#4B382B] hover:bg-[#5D4536] text-[#E8DCC4] text-[11px] uppercase tracking-wider rounded-full transition shadow-md">
                        <span>Explore Curated Collections</span>
                        <span class="w-5 h-5 rounded-full bg-[#171412] flex items-center justify-center text-[10px]">→</span>
                    </a>
                </div>

                <div class="flex items-center space-x-3">
                    <span class="text-2xl md:text-3xl font-light text-[#E8DCC4]">4.9</span>
                    <div class="flex flex-col">
                        <span class="text-amber-400 text-xs">★</span>
                        <p class="text-[9px] text-[#A89F95] leading-tight">
                            Based on Verified<br>Patisserie Reviews World-wide
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="h-2"></div>

    </div>

</body>
</html>