<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Product Detail</title>
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
    </style>
</head>
<body class="bg-[#1C1613] text-[#F3EFEA] font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-[#6A4A3A] selection:text-white relative overflow-x-hidden">

    <!-- Decorative Background Circles -->
    <div class="absolute top-10 left-10 w-[400px] h-[400px] border border-[#2D231E]/20 rounded-full pointer-events-none -z-10"></div>
    <div class="absolute bottom-10 right-10 w-[600px] h-[600px] border border-[#2D231E]/20 rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-6xl mx-auto px-6 py-6 w-full flex flex-col justify-between flex-grow relative z-10">
        
        <!-- Navbar -->
        <nav class="flex items-center justify-between pb-4 mb-8 border-b border-[#2D231E] animate-fade-in-smooth delay-1">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full border border-[#3D302A] flex items-center justify-center bg-[#241C18]">
                    <span class="text-sm">🌙</span>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-4 text-xs text-[#A09893]">
                <a href="#" class="hover:text-white transition">Home</a>
                <span class="text-[#3D302A]">|</span>
                <a href="#" class="hover:text-white transition">Categories</a>
                <span class="text-[#3D302A]">|</span>
                <a href="#" class="text-white font-medium transition">Search</a>
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

        <!-- Main Product Section -->
        <main class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-12 animate-fade-in-smooth delay-2">
            
            <!-- Left: Big Image Product -->
            <div class="lg:col-span-7 bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-4 shadow-xl flex items-center justify-center overflow-hidden">
                <div class="w-full h-[400px] md:h-[450px] rounded-xl overflow-hidden bg-[#16110E] relative flex items-center justify-center">
                    <!-- Placeholder/Simulasi Gambar Croissant -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#16110E] via-[#3A2E28]/40 to-transparent flex items-center justify-center">
                        <span class="text-6xl">🥐</span>
                    </div>
                </div>
            </div>

            <!-- Right: Product Details & Options -->
            <div class="lg:col-span-5 flex flex-col justify-between space-y-6">
                <div>
                    <!-- Title & Price -->
                    <div class="flex justify-between items-start mb-3">
                        <h1 class="text-2xl md:text-3xl font-bold font-serif text-white tracking-wide leading-snug">
                            Flaky Toasted<br>Almond Croissant
                        </h1>
                        <span class="text-xl md:text-2xl font-bold text-white">$6.99</span>
                    </div>

                    <!-- Description -->
                    <p class="text-[11px] leading-relaxed text-[#A09893] mb-6">
                        Handcrafted with rich, layered French butter, our Almond Croissant features a golden, perfectly crisp exterior that yields to a tender, buttery interior. Filled with smooth almond cream, finished with crunchy toasted almond flakes, and dusted with powdered sugar, it pairs seamlessly with your favorite hot coffee or espresso.
                    </p>

                    <!-- Variant Options Grid -->
                    <div class="grid grid-cols-3 gap-2 mb-6">
                        <button class="py-2.5 px-3 bg-[#3A2E28] text-white text-[11px] font-medium rounded-lg border border-[#4D3E36] text-center shadow-inner">Sugar-Glazed</button>
                        <button class="py-2.5 px-3 bg-[#241C18] hover:bg-[#3A2E28] text-[#A09893] hover:text-white text-[11px] font-medium rounded-lg border border-[#3A2E28] text-center transition">Chocolate-Drizzle</button>
                        <button class="py-2.5 px-3 bg-[#241C18] hover:bg-[#3A2E28] text-[#A09893] hover:text-white text-[11px] font-medium rounded-lg border border-[#3A2E28] text-center transition">Maple-Syrup</button>
                        <button class="py-2.5 px-3 bg-[#241C18] hover:bg-[#3A2E28] text-[#A09893] hover:text-white text-[11px] font-medium rounded-lg border border-[#3A2E28] text-center transition">Strawberry</button>
                        <button class="py-2.5 px-3 bg-[#241C18] hover:bg-[#3A2E28] text-[#A09893] hover:text-white text-[11px] font-medium rounded-lg border border-[#3A2E28] text-center transition">Caramel</button>
                        <button class="py-2.5 px-3 bg-[#241C18] hover:bg-[#3A2E28] text-[#A09893] hover:text-white text-[11px] font-medium rounded-lg border border-[#3A2E28] text-center transition">Mocha</button>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-3">
                    <button class="w-full py-3 bg-[#5A4134] hover:bg-[#6D4F3F] text-white text-xs font-semibold rounded-xl transition shadow-md">
                        Add To Cart
                    </button>
                    <button class="w-full py-3 bg-[#EFECE6] hover:bg-white text-[#1C1613] text-xs font-semibold rounded-xl transition shadow-md">
                        Buy Now!
                    </button>
                </div>
            </div>

        </main>

        <!-- More Like This & Reviews Section -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 pb-10">
            
            <!-- More Like This -->
            <div class="lg:col-span-6">
                <h2 class="text-xs font-bold text-white uppercase tracking-wider mb-4">More Like This:</h2>
                <div class="flex space-x-4">
                    <div class="w-32 h-24 bg-[#2A211C] border border-[#3A2E28] rounded-xl overflow-hidden flex items-center justify-center relative cursor-pointer hover:border-[#6A4A3A] transition">
                        <span class="text-xl">🥐</span>
                    </div>
                    <div class="w-32 h-24 bg-[#2A211C] border border-[#3A2E28] rounded-xl overflow-hidden flex items-center justify-center relative cursor-pointer hover:border-[#6A4A3A] transition">
                        <span class="text-xl">☕</span>
                    </div>
                </div>
            </div>

            <!-- Reviews Section -->
            <div class="lg:col-span-6">
                <h2 class="text-xs font-bold text-white uppercase tracking-wider mb-4">Reviews:</h2>
                <div class="space-y-4">
                    <!-- Review 1 -->
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 rounded-full bg-[#3A2E28] flex items-center justify-center text-xs font-bold text-white overflow-hidden flex-shrink-0">
                            👤
                        </div>
                        <div>
                            <p class="text-xs font-bold text-white">Liameed</p>
                            <div class="text-[10px] text-yellow-500 my-0.5">★★★★★</div>
                            <p class="text-[11px] text-[#A09893]">Tasted So good!</p>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 rounded-full bg-[#3A2E28] flex items-center justify-center text-xs font-bold text-white overflow-hidden flex-shrink-0">
                            👤
                        </div>
                        <div>
                            <p class="text-xs font-bold text-white">Liameed</p>
                            <div class="text-[10px] text-yellow-500 my-0.5">★★★★★</div>
                            <p class="text-[11px] text-[#A09893]">So peak</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>
</html>