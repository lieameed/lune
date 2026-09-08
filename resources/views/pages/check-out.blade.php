<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Checkout</title>
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
<body class="bg-[#171412] text-[#E8DCC4] font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-[#4E382A] selection:text-white relative overflow-x-hidden">

    <div class="max-w-5xl mx-auto px-6 py-8 w-full flex flex-col justify-between flex-grow relative z-10">
        
        <nav class="flex items-center justify-between pb-6 mb-8 border-b border-[#2C2420] animate-fade-in-smooth delay-1">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full border border-[#4E382A] flex items-center justify-center bg-[#201B18]">
                    <span class="text-sm"></span>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-4 text-xs text-[#A89F95]">
                <a href="#" class="hover:text-white transition">Home</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Categories</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Search</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">History</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="text-white font-medium">Cart</a>
            </div>

            <div class="flex items-center space-x-2">
                <a href="#" class="px-4 py-1.5 bg-[#E8DCC4] text-[#171412] text-xs font-medium rounded-lg hover:bg-white transition">Log-In</a>
                <a href="#" class="px-4 py-1.5 bg-[#3B2D25] text-[#E8DCC4] text-xs font-medium rounded-lg border border-[#4E382A] hover:bg-[#4E382A] transition">Sign-Up</a>
            </div>
        </nav>

        <header class="mb-8 animate-fade-in-smooth delay-1">
            <h1 class="text-2xl md:text-3xl font-light tracking-wide text-[#E8DCC4] mb-1 font-serif">
                Complete Your Order
            </h1>
        </header>

        <main class="space-y-6 mb-8 animate-fade-in-smooth delay-2">

            <div class="bg-[#201B18] border border-[#352C27] rounded-3xl p-6 md:p-8 shadow-md">
                <h2 class="text-sm font-medium tracking-wide text-[#E8DCC4] mb-6">Shipping Information</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs text-[#A89F95] mb-2">Full Name</label>
                        <input type="text" placeholder="e.g Eleanor Vance" class="w-full bg-[#171412] border border-[#352C27] rounded-xl px-4 py-3 text-xs text-[#E8DCC4] placeholder-[#5C524A] focus:outline-none focus:border-[#634832] transition">
                    </div>
                    <div>
                        <label class="block text-xs text-[#A89F95] mb-2">Phone Number</label>
                        <input type="text" placeholder="e.g +62 812-3456-7890" class="w-full bg-[#171412] border border-[#352C27] rounded-xl px-4 py-3 text-xs text-[#E8DCC4] placeholder-[#5C524A] focus:outline-none focus:border-[#634832] transition">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-xs text-[#A89F95] mb-2">Delivery Address</label>
                        <textarea rows="2" placeholder="Nama Jalan, nomor Rumah, patokan, kecamatan" class="w-full bg-[#171412] border border-[#352C27] rounded-xl px-4 py-3 text-xs text-[#E8DCC4] placeholder-[#5C524A] focus:outline-none focus:border-[#634832] transition resize-none"></textarea>
                    </div>
                </div>
            </div>

            <div class="bg-[#201B18] border border-[#352C27] rounded-3xl p-6 md:p-8 shadow-md">
                <h2 class="text-sm font-medium tracking-wide text-[#E8DCC4] mb-6">Payment Methods</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-[#171412] border border-[#352C27] rounded-2xl p-4 text-center cursor-pointer hover:border-[#634832] transition">
                        <p class="text-xs font-medium text-[#E8DCC4] mb-1">QRIS / E-Wallet</p>
                        <p class="text-[10px] text-[#A89F95]">Instant Verification</p>
                    </div>
                    <div class="bg-[#171412] border border-[#352C27] rounded-2xl p-4 text-center cursor-pointer hover:border-[#634832] transition">
                        <p class="text-xs font-medium text-[#E8DCC4] mb-1">Bank Transfer</p>
                        <p class="text-[10px] text-[#A89F95]">BCA / Mandiri</p>
                    </div>
                    <div class="bg-[#171412] border border-[#352C27] rounded-2xl p-4 text-center cursor-pointer hover:border-[#634832] transition">
                        <p class="text-xs font-medium text-[#E8DCC4] mb-1">Credit Card</p>
                        <p class="text-[10px] text-[#A89F95]">Visa / Mastercard</p>
                    </div>
                </div>
            </div>

            <div class="bg-[#201B18] border border-[#352C27] rounded-3xl p-6 md:p-8 shadow-md">
                <h2 class="text-sm font-medium tracking-wide text-[#E8DCC4] mb-6">Order Summary</h2>

                <div class="space-y-3 mb-6 pb-6 border-b border-dashed border-[#352C27] text-xs">
                    <div class="flex justify-between text-[#E8DCC4]">
                        <span>Classic Butter Croissant (x2)</span>
                        <span>$9.00</span>
                    </div>
                    <div class="flex justify-between text-[#E8DCC4]">
                        <span>Valrhona Chocolate Slice (x1)</span>
                        <span>$7.50</span>
                    </div>
                </div>

                <div class="space-y-2 mb-6 pb-6 border-b border-dashed border-[#352C27] text-xs text-[#A89F95]">
                    <div class="flex justify-between">
                        <span>Subtotal</span>
                        <span>$16.50</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Instant Courier (Same-Day)</span>
                        <span>$3.50</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Tax (10%)</span>
                        <span>$1.65</span>
                    </div>
                </div>

                <div class="flex justify-between items-center mb-6">
                    <span class="text-sm font-medium text-[#E8DCC4]">Total Amount</span>
                    <span class="text-lg font-light text-[#E8DCC4]">$21.65</span>
                </div>

                <button class="w-full py-3.5 bg-[#4B382B] hover:bg-[#5D4536] text-[#E8DCC4] text-xs font-medium tracking-wider rounded-xl transition shadow-md">
                    Pay Now!
                </button>
            </div>

        </main>

    </div>

</body>
</html>