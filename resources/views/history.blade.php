<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Your Order History</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }

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
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
    </style>
</head>
<body class="bg-[#120F0D] text-[#F3EFEA] antialiased min-h-screen flex flex-col selection:bg-[#4E382A] selection:text-white relative overflow-x-hidden">

    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-[#634832]/5 blur-[120px] rounded-full pointer-events-none -z-10 border border-white/5"></div>
    <div class="absolute top-20 left-10 w-[800px] h-[800px] rounded-full border border-[#2A231F]/30 pointer-events-none -z-10"></div>

    <div class="max-w-4xl mx-auto px-6 py-8 w-full flex flex-col flex-grow relative z-10">
        
        <nav class="flex items-center justify-between py-2 mb-16 animate-fade-in-smooth delay-1">
            <div class="flex items-center space-x-3">
                <div class="w-11 h-11 rounded-full border border-[#4E413B] flex items-center justify-center bg-[#1A1512] shadow-lg">
                    <span class="text-sm">🥐</span>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-8 text-sm text-[#A89F95] font-light tracking-wide">
                <a href="#" class="hover:text-white transition">Home</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Categories</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Search</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="text-white transition">History</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Cart</a>
            </div>

            <div class="flex items-center space-x-4">
                <a href="{{ route('login') ?? '#' }}" class="px-6 py-2.5 text-xs font-medium bg-[#F3EFEA] text-[#120F0D] rounded-full hover:bg-white transition shadow-sm">Log-In</a>
                <a href="#" class="px-6 py-2.5 text-xs font-medium border border-[#4E413B] bg-[#221B16] text-[#F3EFEA] rounded-full hover:bg-[#1C1714] transition">Sign-Up</a>
            </div>
        </nav>

        <header class="mb-10 animate-fade-in-smooth delay-2">
            <h1 class="text-4xl md:text-5xl font-light tracking-wide mb-3">
                Your Order History
            </h1>
            <p class="text-sm text-[#A89F95] font-light">
                Lacak status pembuatan kue Anda secara langsung atau lihat riwayat pembelian sebelumnya.
            </p>
        </header>

        <main class="flex flex-col gap-8">
            
            <div class="bg-[#1A1512] border border-[#2A231F] rounded-[2rem] p-8 hover:border-[#3E342F] transition duration-300 shadow-xl animate-fade-in-smooth delay-3">
                
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-[#F3EFEA] text-lg font-light mb-1">Order id : <span class="font-medium">#LUNε-8924</span></p>
                        <p class="text-[#A89F95] text-sm">Placed on Today, 08:30 AM</p>
                    </div>
                    <div class="text-right">
                        <p class="text-[#A89F95] text-sm mb-1">Total Amount</p>
                        <p class="text-[#F3EFEA] text-lg font-light">$21.65</p>
                    </div>
                </div>

                <div class="w-full border-t border-dashed border-[#3E342F] my-5"></div>

                <div class="flex flex-col gap-3">
                    <div class="flex justify-between items-center text-[#A89F95] text-sm">
                        <p>Classic Butter Croissant (x2)</p>
                        <p>$9.00</p>
                    </div>
                    <div class="flex justify-between items-center text-[#A89F95] text-sm">
                        <p>Valrhona Chocolate Slice (x1)</p>
                        <p>$7.50</p>
                    </div>
                </div>

                <div class="w-full border-t border-dashed border-[#3E342F] my-5"></div>

                <div class="flex justify-between items-center mt-2">
                    <p class="text-xl font-medium text-[#F3EFEA] tracking-wide">Total Amount</p>
                    <button class="px-6 py-2 border border-[#4E413B] text-[#A89F95] text-sm rounded-full hover:text-white hover:border-[#A89F95] hover:bg-[#221B16] transition duration-300">
                        Track Courier
                    </button>
                </div>
            </div>

            <div class="bg-[#1A1512] border border-[#2A231F] rounded-[2rem] p-8 hover:border-[#3E342F] transition duration-300 shadow-xl animate-fade-in-smooth delay-4">
                
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-[#F3EFEA] text-lg font-light mb-1">Order id : <span class="font-medium">#LUNε-8924</span></p>
                        <p class="text-[#A89F95] text-sm">Placed on Today, 08:30 AM</p>
                    </div>
                    <div class="text-right">
                        <p class="text-[#A89F95] text-sm mb-1">Total Amount</p>
                        <p class="text-[#F3EFEA] text-lg font-light">$21.65</p>
                    </div>
                </div>

                <div class="w-full border-t border-dashed border-[#3E342F] my-5"></div>

                <div class="flex flex-col gap-3">
                    <div class="flex justify-between items-center text-[#A89F95] text-sm">
                        <p>Classic Butter Croissant (x2)</p>
                        <p>$9.00</p>
                    </div>
                    <div class="flex justify-between items-center text-[#A89F95] text-sm">
                        <p>Valrhona Chocolate Slice (x1)</p>
                        <p>$7.50</p>
                    </div>
                </div>

                <div class="w-full border-t border-dashed border-[#3E342F] my-5"></div>

                <div class="flex justify-between items-center mt-2">
                    <p class="text-xl font-medium text-[#F3EFEA] tracking-wide">Total Amount</p>
                    <button class="px-6 py-2 border border-[#4E413B] text-[#A89F95] text-sm rounded-full hover:text-white hover:border-[#A89F95] hover:bg-[#221B16] transition duration-300">
                        Track Courier
                    </button>
                </div>
            </div>

        </main>
    </div>

</body>
</html>