<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart - Lune Bakery</title>

    <!-- Import Font Montserrat Alternates dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Set Font global -->
    <style>
        * {
            font-family: 'Montserrat Alternates', sans-serif !important;
        }
        
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #1C1816; }
        ::-webkit-scrollbar-thumb { background: #3D332D; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #5C504A; }
    </style>
</head>
<body class="bg-[#1C1816] text-[#E8D8CE] antialiased">

    <!-- Container Utama -->
    <div class="max-w-7xl mx-auto px-6 py-8">

        <!-- HEADER / NAVBAR -->
        <nav class="flex justify-between items-center mb-10 border-b border-[#3A302B] pb-6">
            <div class="flex items-center gap-2">
                <div class="w-12 h-12 rounded-full border border-[#D5C5B5] flex items-center justify-center">
                    <span class="text-xl">🥐</span>
                </div>
            </div>
            
            <div class="hidden md:flex space-x-10 text-sm text-[#A89F98]">
                <a href="#" class="hover:text-[#D5C5B5] pb-1">Home</a>
                <a href="#" class="hover:text-[#D5C5B5] pb-1">Categories</a>
                <a href="#" class="hover:text-[#D5C5B5] pb-1">Search</a>
                <a href="#" class="hover:text-[#D5C5B5] pb-1">History</a>
                <a href="#" class="border-b border-[#D5C5B5] text-[#D5C5B5] pb-1">Cart</a>
            </div>

            <div class="flex gap-4">
                <button class="bg-[#EBE2D5] text-[#1C1816] px-6 py-2 rounded-md font-semibold text-sm">Log-In</button>
                <button class="bg-[#5C4535] text-[#EBE2D5] px-6 py-2 rounded-md font-semibold text-sm">Sign-Up</button>
            </div>
        </nav>

        <!-- Title & Select All -->
        <div class="mb-8 border-b border-[#3A302B] pb-4">
            <h1 class="text-3xl font-semibold mb-4">Your Cart</h1>
            <label class="flex items-center gap-3 cursor-pointer text-[#A89F98] hover:text-[#E8D8CE] transition w-max">
                <input type="checkbox" class="w-5 h-5 accent-[#D5C5B5] bg-[#1E1917] border-[#3D332D] rounded cursor-pointer">
                <span>Select All</span>
            </label>
        </div>

        <!-- MAIN LAYOUT -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- LEFT COLUMN: Cart Items (3 Buah) -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Item 1 -->
                <div class="flex flex-col sm:flex-row gap-6 items-start bg-[#25201D] p-6 rounded-2xl border border-[#3A302B]">
                    <div class="w-full sm:w-1/3">
                        <img src="https://images.unsplash.com/photo-1555507036-ab1e4006a8a0?q=80&w=400&auto=format&fit=crop" alt="Croissant" class="w-full h-44 object-cover rounded-xl shadow-lg border border-[#3A302B]">
                    </div>
                    <div class="w-full sm:w-2/3 flex flex-col justify-between h-full">
                        <div>
                            <h2 class="text-2xl font-semibold mb-2">Croissant</h2>
                            <p class="text-xs text-[#A89F98] leading-relaxed mb-4 line-clamp-3">
                                Handcrafted with rich, layered French butter, our Almond Croissant features a golden, perfectly crisp exterior that yields to a tender, buttery interior.
                            </p>
                        </div>
                        <div class="flex flex-wrap items-center gap-4 mt-auto">
                            <span class="text-xl font-bold">$6.99</span>
                            <div class="flex items-center gap-2">
                                <button class="w-6 h-6 bg-[#EBE2D5] text-[#1C1816] rounded flex items-center justify-center font-bold">-</button>
                                <input type="text" value="1" class="w-8 bg-transparent border border-[#3D332D] text-center rounded py-0.5 text-[#E8D8CE] focus:outline-none">
                                <button class="w-6 h-6 bg-[#EBE2D5] text-[#1C1816] rounded flex items-center justify-center font-bold">+</button>
                            </div>
                            <button class="text-[#EBE2D5] hover:text-red-400 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            </button>
                            <label class="flex items-center gap-2 cursor-pointer text-xs text-[#A89F98] ml-auto">
                                <input type="checkbox" class="w-4 h-4 accent-[#D5C5B5] bg-[#1E1917] border-[#3D332D] rounded cursor-pointer">
                                Confirm Order
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex flex-col sm:flex-row gap-6 items-start bg-[#25201D] p-6 rounded-2xl border border-[#3A302B]">
                    <div class="w-full sm:w-1/3">
                        <img src="https://images.unsplash.com/photo-1555507036-ab1e4006a8a0?q=80&w=400&auto=format&fit=crop" alt="Croissant" class="w-full h-44 object-cover rounded-xl shadow-lg border border-[#3A302B]">
                    </div>
                    <div class="w-full sm:w-2/3 flex flex-col justify-between h-full">
                        <div>
                            <h2 class="text-2xl font-semibold mb-2">Croissant</h2>
                            <p class="text-xs text-[#A89F98] leading-relaxed mb-4 line-clamp-3">
                                Handcrafted with rich, layered French butter, our Almond Croissant features a golden, perfectly crisp exterior that yields to a tender, buttery interior.
                            </p>
                        </div>
                        <div class="flex flex-wrap items-center gap-4 mt-auto">
                            <span class="text-xl font-bold">$6.99</span>
                            <div class="flex items-center gap-2">
                                <button class="w-6 h-6 bg-[#EBE2D5] text-[#1C1816] rounded flex items-center justify-center font-bold">-</button>
                                <input type="text" value="1" class="w-8 bg-transparent border border-[#3D332D] text-center rounded py-0.5 text-[#E8D8CE] focus:outline-none">
                                <button class="w-6 h-6 bg-[#EBE2D5] text-[#1C1816] rounded flex items-center justify-center font-bold">+</button>
                            </div>
                            <button class="text-[#EBE2D5] hover:text-red-400 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            </button>
                            <label class="flex items-center gap-2 cursor-pointer text-xs text-[#A89F98] ml-auto">
                                <input type="checkbox" class="w-4 h-4 accent-[#D5C5B5] bg-[#1E1917] border-[#3D332D] rounded cursor-pointer">
                                Confirm Order
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex flex-col sm:flex-row gap-6 items-start bg-[#25201D] p-6 rounded-2xl border border-[#3A302B]">
                    <div class="w-full sm:w-1/3">
                        <img src="https://images.unsplash.com/photo-1555507036-ab1e4006a8a0?q=80&w=400&auto=format&fit=crop" alt="Croissant" class="w-full h-44 object-cover rounded-xl shadow-lg border border-[#3A302B]">
                    </div>
                    <div class="w-full sm:w-2/3 flex flex-col justify-between h-full">
                        <div>
                            <h2 class="text-2xl font-semibold mb-2">Croissant</h2>
                            <p class="text-xs text-[#A89F98] leading-relaxed mb-4 line-clamp-3">
                                Handcrafted with rich, layered French butter, our Almond Croissant features a golden, perfectly crisp exterior that yields to a tender, buttery interior.
                            </p>
                        </div>
                        <div class="flex flex-wrap items-center gap-4 mt-auto">
                            <span class="text-xl font-bold">$6.99</span>
                            <div class="flex items-center gap-2">
                                <button class="w-6 h-6 bg-[#EBE2D5] text-[#1C1816] rounded flex items-center justify-center font-bold">-</button>
                                <input type="text" value="1" class="w-8 bg-transparent border border-[#3D332D] text-center rounded py-0.5 text-[#E8D8CE] focus:outline-none">
                                <button class="w-6 h-6 bg-[#EBE2D5] text-[#1C1816] rounded flex items-center justify-center font-bold">+</button>
                            </div>
                            <button class="text-[#EBE2D5] hover:text-red-400 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                            </button>
                            <label class="flex items-center gap-2 cursor-pointer text-xs text-[#A89F98] ml-auto">
                                <input type="checkbox" class="w-4 h-4 accent-[#D5C5B5] bg-[#1E1917] border-[#3D332D] rounded cursor-pointer">
                                Confirm Order
                            </label>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: Payment Card -->
            <div>
                <div class="bg-[#25201D] p-8 rounded-2xl shadow-xl border border-[#3A302B] sticky top-8">
                    <h2 class="text-2xl font-semibold mb-6">Payment</h2>
                    
                    <div class="space-y-4 mb-8 text-[#A89F98]">
                        <div class="flex justify-between items-center">
                            <span>Croissant (x3)</span>
                            <span>--- $20.97</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Tax</span>
                            <span>--- $2.10</span>
                        </div>
                    </div>

                    <hr class="border-t border-dashed border-[#5C504A] mb-8">

                    <div class="flex justify-between items-center mb-10 text-[#E8D8CE]">
                        <span class="text-xl">Total</span>
                        <span class="text-xl">--- $23.07</span>
                    </div>

                    <a href="/checkout" class="block w-full text-center bg-[#EBE2D5] text-[#1C1816] py-4 rounded-xl text-lg font-bold hover:bg-[#D5C5B5] transition duration-300">
                        Pay Now!
                    </a>
                </div>
            </div>

        </div>

    </div>
</body>
</html>