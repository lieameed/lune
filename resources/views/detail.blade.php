<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>

    <!-- 1. Import Font Montserrat Alternates dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- 2. Set Font Montserrat Alternates untuk seluruh elemen -->
    <style>
        * {
            font-family: 'Montserrat Alternates', sans-serif !important;
        }
    </style>
</head>
<body class="bg-[#1C1816] text-[#E8D8CE] font-sans antialiased">

    <!-- Container Utama -->
    <div class="max-w-6xl mx-auto px-6 py-8">

        <!-- HEADER / NAVBAR -->
        <nav class="flex justify-between items-center mb-12 border-b border-[#3A302B] pb-6">
            <div class="flex items-center gap-2">
                <!-- Placeholder Logo -->
                <div class="w-12 h-12 rounded-full border border-[#D5C5B5] flex items-center justify-center">
                    <span class="text-xl">🥐</span>
                </div>
            </div>
            
            <div class="hidden md:flex space-x-8 text-sm text-[#A89F98]">
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

        <!-- MAIN PRODUCT SECTION (Sesuai kotak biru di gambar) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <!-- Kiri: Gambar Produk -->
            <div>
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-[550px] object-cover rounded-xl shadow-2xl">
            </div>

            <!-- Kanan: Detail Produk -->
            <div class="flex flex-col">
                <div class="flex justify-between items-start mb-4">
                    <h1 class="text-4xl font-bold leading-tight w-2/3">{{ $product->name }}</h1>
                    <span class="text-3xl font-bold">${{ $product->price }}</span>
                </div>

                <p class="text-[#A89F98] text-sm leading-relaxed mb-8">
                    {{ $product->description }}
                </p>

                <!-- Pilihan Rasa (Toppings) -->
                <div class="grid grid-cols-3 gap-3 mb-8 text-sm">
                    <button class="border border-[#4A3F3A] rounded py-2 hover:bg-[#3A302B] transition">Sugar-Glazed</button>
                    <!-- Tombol Aktif -->
                    <button class="bg-[#EBE2D5] text-[#1C1816] rounded py-2 font-semibold">Chocolate-Drizzle</button>
                    <button class="border border-[#4A3F3A] rounded py-2 hover:bg-[#3A302B] transition">Maple-Syrup</button>
                    
                    <button class="border border-[#4A3F3A] rounded py-2 hover:bg-[#3A302B] transition">Strawberry</button>
                    <button class="border border-[#4A3F3A] rounded py-2 hover:bg-[#3A302B] transition">Caramel</button>
                    <button class="border border-[#4A3F3A] rounded py-2 hover:bg-[#3A302B] transition">Mocha</button>
                </div>

                <!-- Tombol Aksi -->
                <div class="space-y-3 mb-10">
                    <button class="w-full bg-[#6B4F3D] hover:bg-[#5A4131] text-white py-3 rounded-lg font-medium transition">Add To Cart</button>
                    <button class="w-full bg-[#EBE2D5] hover:bg-[#D5C5B5] text-[#1C1816] py-3 rounded-lg font-medium transition">Buy Now!</button>
                </div>

                <!-- More Like This -->
                <div>
                    <h3 class="text-xl font-bold mb-4">More Like This:</h3>
                    <div class="flex gap-4 items-center">
                        <img src="https://images.unsplash.com/photo-1623334044303-241021148842?w=200&h=200&fit=crop" class="w-32 h-32 object-cover rounded-lg">
                        <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=200&h=200&fit=crop" class="w-32 h-32 object-cover rounded-lg">
                        
                        <!-- Tombol panah Next -->
                        <button class="w-10 h-10 rounded-full bg-[#2A2320] flex items-center justify-center ml-2 hover:bg-[#3A302B]">
                            &rarr;
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- REVIEWS SECTION -->
        <div class="mt-16 border-t border-[#3A302B] pt-10">
            <h2 class="text-2xl font-bold mb-6">Reviews:</h2>
            
            <div class="space-y-8">
                <!-- Review 1 -->
                <div class="flex gap-4">
                    <img src="https://ui-avatars.com/api/?name=Lieameed&background=random" class="w-12 h-12 rounded-full">
                    <div>
                        <h4 class="font-bold text-[#EBE2D5]">Lieameed</h4>
                        <div class="text-yellow-500 text-sm mb-1">★★★★★</div>
                        <p class="text-[#A89F98] text-sm">Tasted So good!</p>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="flex gap-4">
                    <img src="https://ui-avatars.com/api/?name=Lieameed&background=random" class="w-12 h-12 rounded-full">
                    <div>
                        <h4 class="font-bold text-[#EBE2D5]">Lieameed</h4>
                        <div class="text-yellow-500 text-sm mb-1">★★★★★</div>
                        <p class="text-[#A89F98] text-sm">So peak</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>