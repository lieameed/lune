<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Lune Bakery</title>

    <!-- Import Font Montserrat Alternates dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Set Font untuk seluruh elemen -->
    <style>
        * {
            font-family: 'Montserrat Alternates', sans-serif !important;
        }
    </style>
</head>
<body class="bg-[#1C1816] text-[#E8D8CE] antialiased">

    <!-- Container Utama -->
    <div class="max-w-6xl mx-auto px-6 py-8">

        <!-- HEADER / NAVBAR -->
        <nav class="flex justify-between items-center mb-16 border-b border-[#3A302B] pb-6">
            <div class="flex items-center gap-2">
                <!-- Placeholder Logo -->
                <div class="w-12 h-12 rounded-full border border-[#D5C5B5] flex items-center justify-center">
                    <span class="text-xl">🥐</span>
                </div>
            </div>
            
            <div class="hidden md:flex space-x-10 text-sm text-[#A89F98]">
                <a href="#" class="border-b border-[#D5C5B5] text-[#D5C5B5] pb-1">Home</a>
                <a href="#" class="hover:text-[#D5C5B5] pb-1">Categories</a>
                <a href="#" class="hover:text-[#D5C5B5] pb-1">Search</a>
                <a href="#" class="hover:text-[#D5C5B5] pb-1">History</a>
                <a href="#" class="hover:text-[#D5C5B5] pb-1">Cart</a>
            </div>

            <div class="flex gap-4">
                <button class="bg-[#EBE2D5] text-[#1C1816] px-6 py-2 rounded-md font-semibold text-sm">Log-In</button>
                <button class="bg-[#5C4535] text-[#EBE2D5] px-6 py-2 rounded-md font-semibold text-sm">Sign-Up</button>
            </div>
        </nav>

        <!-- TITLE -->
        <h1 class="text-4xl font-light mb-8">Complete Your Order</h1>

        <form action="#" method="POST">
            <!-- SECTION 1: Shipping Information -->
            <div class="bg-[#2A2421] p-10 rounded-2xl shadow-xl mb-8 border border-[#3A302B]">
                <h2 class="text-2xl font-semibold mb-6 text-[#A89F98]">Shipping Information</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
                    <div>
                        <label class="block text-lg mb-2">Full Name</label>
                        <input type="text" placeholder="e.g Eleanor Vance" 
                            class="w-full bg-[#1E1917] border border-[#3D332D] rounded-xl px-5 py-4 text-[#E8D8CE] placeholder-[#5C504A] focus:outline-none focus:border-[#D5C5B5] transition">
                    </div>
                    <div>
                        <label class="block text-lg mb-2">Phone Number</label>
                        <input type="text" placeholder="e.g +62 812-3456-7890" 
                            class="w-full bg-[#1E1917] border border-[#3D332D] rounded-xl px-5 py-4 text-[#E8D8CE] placeholder-[#5C504A] focus:outline-none focus:border-[#D5C5B5] transition">
                    </div>
                </div>

                <div>
                    <label class="block text-lg mb-2">Delivery Address</label>
                    <textarea rows="3" placeholder="Nama Jalan, nomor Rumah, patokan, kecamatan" 
                        class="w-full bg-[#1E1917] border border-[#3D332D] rounded-xl px-5 py-4 text-[#E8D8CE] placeholder-[#5C504A] focus:outline-none focus:border-[#D5C5B5] transition resize-none"></textarea>
                </div>
            </div>

            <!-- SECTION 2: Payment Methods -->
            <div class="bg-[#2A2421] p-10 rounded-2xl shadow-xl mb-8 border border-[#3A302B]">
                <h2 class="text-2xl font-semibold mb-6 text-[#A89F98]">Payment Methods</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Option 1 -->
                    <label class="cursor-pointer">
                        <input type="radio" name="payment" class="hidden peer" checked>
                        <div class="border border-[#3D332D] rounded-xl p-6 text-center peer-checked:border-[#D5C5B5] peer-checked:bg-[#1E1917] hover:border-[#D5C5B5] transition">
                            <p class="font-semibold text-lg text-[#E8D8CE]">QRIS/ E-Wallet</p>
                            <p class="text-sm text-[#A89F98]">Instant Verification</p>
                        </div>
                    </label>

                    <!-- Option 2 -->
                    <label class="cursor-pointer">
                        <input type="radio" name="payment" class="hidden peer">
                        <div class="border border-[#3D332D] rounded-xl p-6 text-center peer-checked:border-[#D5C5B5] peer-checked:bg-[#1E1917] hover:border-[#D5C5B5] transition">
                            <p class="font-semibold text-lg text-[#E8D8CE]">Bank Transfer</p>
                            <p class="text-sm text-[#A89F98]">BCA / Mandiri</p>
                        </div>
                    </label>

                    <!-- Option 3 -->
                    <label class="cursor-pointer">
                        <input type="radio" name="payment" class="hidden peer">
                        <div class="border border-[#3D332D] rounded-xl p-6 text-center peer-checked:border-[#D5C5B5] peer-checked:bg-[#1E1917] hover:border-[#D5C5B5] transition">
                            <p class="font-semibold text-lg text-[#E8D8CE]">Credit Card</p>
                            <p class="text-sm text-[#A89F98]">Visa / Mastercard</p>
                        </div>
                    </label>
                </div>
            </div>

            <!-- SECTION 3: Order Summary -->
            <div class="bg-[#2A2421] p-10 rounded-2xl shadow-xl mb-12 border border-[#3A302B]">
                <h2 class="text-2xl font-semibold mb-6 text-[#E8D8CE]">Order Summary</h2>
                
                <div class="space-y-4 mb-6">
                    <div class="flex justify-between items-center text-lg">
                        <span class="text-[#E8D8CE]">Classic Butter Croissant (x2)</span>
                        <span class="text-[#E8D8CE]">$9.00</span>
                    </div>
                    <div class="flex justify-between items-center text-lg">
                        <span class="text-[#E8D8CE]">Valrhona Chocolate Slice (x1)</span>
                        <span class="text-[#E8D8CE]">$7.50</span>
                    </div>
                </div>

                <hr class="border-t border-dashed border-[#5C504A] my-6">

                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-[#A89F98]">
                        <span>Subtotal</span>
                        <span>$16.50</span>
                    </div>
                    <div class="flex justify-between text-[#A89F98]">
                        <span>Instant Courier (Same-Day)</span>
                        <span>$3.50</span>
                    </div>
                    <div class="flex justify-between text-[#A89F98]">
                        <span>Tax (10%)</span>
                        <span>$1.65</span>
                    </div>
                </div>

                <hr class="border-t border-dashed border-[#5C504A] my-6">

                <div class="flex justify-between items-center mb-8">
                    <span class="text-2xl font-bold text-[#E8D8CE]">Total Amount</span>
                    <span class="text-2xl font-bold text-[#E8D8CE]">$21.65</span>
                </div>

                <!-- Checkout Button -->
                <button type="submit" class="w-full bg-[#5C4535] text-[#EBE2D5] py-4 rounded-xl text-lg font-semibold hover:bg-[#4A3528] transition duration-300">
                    Pay Now!
                </button>
            </div>
        </form>

    </div>
</body>
</html>