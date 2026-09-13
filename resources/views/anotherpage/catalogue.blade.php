<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInSlideSlow {
            0% { opacity: 0; transform: translateY(15px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-smooth {
            animation: fadeInSlideSlow 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
        }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
    </style>
</head>
<body class="bg-[#1C1613] text-[#F3EFEA] font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-[#6A4A3A] selection:text-white relative overflow-x-hidden">

    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-[#5C4033] opacity-20 blur-[140px] rounded-full pointer-events-none -z-10"></div>

    <div class="absolute top-10 left-10 w-[400px] h-[400px] border border-[#2D231E]/20 rounded-full pointer-events-none -z-10"></div>
    <div class="absolute bottom-10 right-10 w-[600px] h-[600px] border border-[#2D231E]/20 rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-6xl mx-auto px-6 py-6 w-full flex flex-col justify-between flex-grow relative z-10">

        <nav class="flex items-center justify-between pb-4 mb-8 border-b border-[#2D231E] animate-fade-in-smooth delay-1">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full border border-[#3D302A] flex items-center justify-center bg-[#241C18]">
                    <span class="text-sm">🌙</span>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-4 text-xs text-[#A09893]">
                <a href="#" class="hover:text-white transition">Home</a>
                <span class="text-[#3D302A]">|</span>
                <a href="#" class="text-white font-medium transition">Categories</a>
                <span class="text-[#3D302A]">|</span>
                <a href="#" class="hover:text-white transition">Search</a>
                <span class="text-[#3D302A]">|</span>
                <a href="#" class="hover:text-white transition">History</a>
                <span class="text-[#3D302A]">|</span>
                <a href="#" class="hover:text-white transition">Cart</a>
            </div>

            <div class="flex items-center space-x-2">
                <a href="#" class="px-5 py-2 bg-[#EFECE6] text-[#1C1613] text-xs font-medium rounded-full hover:bg-white transition shadow-sm">Log-in</a>
                <a href="#" class="px-5 py-2 bg-[#3A2E28] text-[#EFECE6] text-xs font-medium rounded-full border border-[#4D3E36] hover:bg-[#4D3E36] transition">Sign-Up</a>
            </div>
        </nav>

        <header class="mb-10 animate-fade-in-smooth delay-1">
            <h1 class="text-3xl md:text-5xl font-light tracking-wide text-[#F3EFEA] font-serif mb-4 leading-tight">
                Freshly Baked Delights,<br>Everyday
            </h1>
            <p class="text-xs text-[#A09893] max-w-xl mb-6 leading-relaxed">
                Discover the magic of freshly baked goodness. Handcrafted with love and the finest ingredients. Delight in every bite, every day.
            </p>
            <button class="px-6 py-3 bg-[#3A2E28] hover:bg-[#4D3E36] text-[#EFECE6] text-xs font-medium rounded-xl border border-[#4D3E36] transition shadow-md">
                Pre-order Now!
            </button>
        </header>

        <section class="mb-10 animate-fade-in-smooth delay-2">
            <h2 class="text-xs font-bold text-white uppercase tracking-wider mb-4">Category</h2>
            <div class="flex items-center space-x-3 overflow-x-auto pb-2 scrollbar-none">
                <button class="px-6 py-2.5 bg-[#EFECE6] text-[#1C1613] text-xs font-semibold rounded-full shadow-sm whitespace-nowrap">All Products</button>
                <button class="px-6 py-2.5 bg-[#2A211C] hover:bg-[#3A2E28] text-[#A09893] hover:text-white text-xs font-medium rounded-full border border-[#3A2E28] transition whitespace-nowrap">Croissants</button>
                <button class="px-6 py-2.5 bg-[#2A211C] hover:bg-[#3A2E28] text-[#A09893] hover:text-white text-xs font-medium rounded-full border border-[#3A2E28] transition whitespace-nowrap">Tarts</button>
                <button class="px-6 py-2.5 bg-[#2A211C] hover:bg-[#3A2E28] text-[#A09893] hover:text-white text-xs font-medium rounded-full border border-[#3A2E28] transition whitespace-nowrap">Signature Cakes</button>
            </div>
        </section>

        <main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16 animate-fade-in-smooth delay-3">

            <div class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-4 shadow-xl flex flex-col justify-between">
                <div class="w-full h-44 bg-[#140F0D] rounded-xl mb-4 border border-[#3A2E28]"></div>
                <div>
                    <h3 class="text-xs font-medium text-white mb-1">aaaaaaaa</h3>
                    <p class="text-xs font-semibold text-white mb-1">Price</p>
                    <p class="text-[11px] text-[#A09893]">Rating</p>
                </div>
            </div>

            <div class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-4 shadow-xl flex flex-col justify-between">
                <div class="w-full h-44 bg-[#140F0D] rounded-xl mb-4 border border-[#3A2E28]"></div>
                <div>
                    <h3 class="text-xs font-medium text-white mb-1">aaaaaaaa</h3>
                    <p class="text-xs font-semibold text-white mb-1">Price</p>
                    <p class="text-[11px] text-[#A09893]">Rating</p>
                </div>
            </div>

            <div class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-4 shadow-xl flex flex-col justify-between">
                <div class="w-full h-44 bg-[#140F0D] rounded-xl mb-4 border border-[#3A2E28]"></div>
                <div>
                    <h3 class="text-xs font-medium text-white mb-1">aaaaaaaa</h3>
                    <p class="text-xs font-semibold text-white mb-1">Price</p>
                    <p class="text-[11px] text-[#A09893]">Rating</p>
                </div>
            </div>

            <div class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-4 shadow-xl flex flex-col justify-between">
                <div class="w-full h-44 bg-[#140F0D] rounded-xl mb-4 border border-[#3A2E28]"></div>
                <div>
                    <h3 class="text-xs font-medium text-white mb-1">aaaaaaaa</h3>
                    <p class="text-xs font-semibold text-white mb-1">Price</p>
                    <p class="text-[11px] text-[#A09893]">Rating</p>
                </div>
            </div>

            <div class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-4 shadow-xl flex flex-col justify-between">
                <div class="w-full h-44 bg-[#140F0D] rounded-xl mb-4 border border-[#3A2E28]"></div>
                <div>
                    <h3 class="text-xs font-medium text-white mb-1">aaaaaaaa</h3>
                    <p class="text-xs font-semibold text-white mb-1">Price</p>
                    <p class="text-[11px] text-[#A09893]">Rating</p>
                </div>
            </div>

            <div class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-4 shadow-xl flex flex-col justify-between">
                <div class="w-full h-44 bg-[#140F0D] rounded-xl mb-4 border border-[#3A2E28]"></div>
                <div>
                    <h3 class="text-xs font-medium text-white mb-1">aaaaaaaa</h3>
                    <p class="text-xs font-semibold text-white mb-1">Price</p>
                    <p class="text-[11px] text-[#A09893]">Rating</p>
                </div>
            </div>

            <div class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-4 shadow-xl flex flex-col justify-between">
                <div class="w-full h-44 bg-[#140F0D] rounded-xl mb-4 border border-[#3A2E28]"></div>
                <div>
                    <h3 class="text-xs font-medium text-white mb-1">aaaaaaaa</h3>
                    <p class="text-xs font-semibold text-white mb-1">Price</p>
                    <p class="text-[11px] text-[#A09893]">Rating</p>
                </div>
            </div>

            <div class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-4 shadow-xl flex flex-col justify-between">
                <div class="w-full h-44 bg-[#140F0D] rounded-xl mb-4 border border-[#3A2E28]"></div>
                <div>
                    <h3 class="text-xs font-medium text-white mb-1">aaaaaaaa</h3>
                    <p class="text-xs font-semibold text-white mb-1">Price</p>
                    <p class="text-[11px] text-[#A09893]">Rating</p>
                </div>
            </div>

            <div class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-4 shadow-xl flex flex-col justify-between">
                <div class="w-full h-44 bg-[#140F0D] rounded-xl mb-4 border border-[#3A2E28]"></div>
                <div>
                    <h3 class="text-xs font-medium text-white mb-1">aaaaaaaa</h3>
                    <p class="text-xs font-semibold text-white mb-1">Price</p>
                    <p class="text-[11px] text-[#A09893]">Rating</p>
                </div>
            </div>

        </main>

    </div>

</body>
</html>