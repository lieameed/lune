<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Order History</title>
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

    <!-- Decorative Background Circles -->
    <div class="absolute top-10 left-10 w-[400px] h-[400px] border border-[#2D231E]/20 rounded-full pointer-events-none -z-10"></div>
    <div class="absolute bottom-10 right-10 w-[600px] h-[600px] border border-[#2D231E]/20 rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-4xl mx-auto px-6 py-6 w-full flex flex-col justify-between flex-grow relative z-10">
        
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
                <a href="#" class="hover:text-white transition">Search</a>
                <span class="text-[#3D302A]">|</span>
                <a href="#" class="text-white font-medium transition">History</a>
                <span class="text-[#3D302A]">|</span>
                <a href="#" class="hover:text-white transition">Cart</a>
            </div>

            <div class="flex items-center space-x-2">
                <a href="#" class="px-5 py-2 bg-[#EFECE6] text-[#1C1613] text-xs font-medium rounded-full hover:bg-white transition shadow-sm">Log-in</a>
                <a href="#" class="px-5 py-2 bg-[#3A2E28] text-[#EFECE6] text-xs font-medium rounded-full border border-[#4D3E36] hover:bg-[#4D3E36] transition">Sign-Up</a>
            </div>
        </nav>

        <!-- Header Title -->
        <header class="mb-8 animate-fade-in-smooth delay-1">
            <h1 class="text-2xl md:text-3xl font-light tracking-wide text-[#F3EFEA] font-serif mb-2">
                Your Order History
            </h1>
            <p class="text-xs text-[#A09893]">
                Lacak status pembuatan kue Anda secara langsung atau lihat riwayat pembelian sebelumnya.
            </p>
        </header>

        <!-- Order List Section -->
        <main class="space-y-6 mb-12">
            
            <!-- Order Card 1 -->
            <div class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-6 shadow-xl animate-fade-in-smooth delay-2">
                <!-- Top Row: Order ID & Total Amount Header -->
                <div class="flex justify-between items-start pb-4 border-b border-[#3A2E28]">
                    <div>
                        <p class="text-xs text-white font-medium">Order id : <span class="font-bold tracking-wide">#LUNE-8924</span></p>
                        <p class="text-[11px] text-[#A09893] mt-1">Placed on Today, 08:30 AM</p>
                    </div>
                    <div class="text-right">
                        <p class="text-[11px] text-[#A09893]">Total Amount</p>
                        <p class="text-sm font-semibold text-white mt-0.5">$21.65</p>
                    </div>
                </div>

                <!-- Middle Items List -->
                <div class="py-4 space-y-2 border-b border-dashed border-[#3A2E28] text-xs">
                    <div class="flex justify-between text-[#EFECE6]">
                        <span>Classic Butter Croissant (x2)</span>
                        <span class="font-medium">$9.00</span>
                    </div>
                    <div class="flex justify-between text-[#EFECE6]">
                        <span>Valrhona Chocolate Slice (x1)</span>
                        <span class="font-medium">$7.50</span>
                    </div>
                </div>

                <!-- Bottom Row: Total Label & Track Courier Button -->
                <div class="flex justify-between items-center pt-4">
                    <span class="text-xs font-semibold text-white">Total Amount</span>
                    <button class="px-5 py-2 bg-[#1C1613] hover:bg-[#322722] text-[#EFECE6] border border-[#3D302A] text-xs rounded-full transition shadow-sm">
                        Track Courier
                    </button>
                </div>
            </div>

            <!-- Order Card 2 -->
            <div class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-6 shadow-xl animate-fade-in-smooth delay-3">
                <!-- Top Row: Order ID & Total Amount Header -->
                <div class="flex justify-between items-start pb-4 border-b border-[#3A2E28]">
                    <div>
                        <p class="text-xs text-white font-medium">Order id : <span class="font-bold tracking-wide">#LUNE-8924</span></p>
                        <p class="text-[11px] text-[#A09893] mt-1">Placed on Today, 08:30 AM</p>
                    </div>
                    <div class="text-right">
                        <p class="text-[11px] text-[#A09893]">Total Amount</p>
                        <p class="text-sm font-semibold text-white mt-0.5">$21.65</p>
                    </div>
                </div>

                <!-- Middle Items List -->
                <div class="py-4 space-y-2 border-b border-dashed border-[#3A2E28] text-xs">
                    <div class="flex justify-between text-[#EFECE6]">
                        <span>Classic Butter Croissant (x2)</span>
                        <span class="font-medium">$9.00</span>
                    </div>
                    <div class="flex justify-between text-[#EFECE6]">
                        <span>Valrhona Chocolate Slice (x1)</span>
                        <span class="font-medium">$7.50</span>
                    </div>
                </div>

                <!-- Bottom Row: Total Label & Track Courier Button -->
                <div class="flex justify-between items-center pt-4">
                    <span class="text-xs font-semibold text-white">Total Amount</span>
                    <button class="px-5 py-2 bg-[#1C1613] hover:bg-[#322722] text-[#EFECE6] border border-[#3D302A] text-xs rounded-full transition shadow-sm">
                        Track Courier
                    </button>
                </div>
            </div>

        </main>

    </div>

</body>
</html>