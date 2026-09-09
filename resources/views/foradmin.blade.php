<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add More Food - Admin</title>

    <!-- Import Font Montserrat Alternates dari Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Tailwind CDN agar styling langsung jalan -->
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
        <h1 class="text-4xl font-light mb-8">Add More Food</h1>

        <!-- FORM CONTAINER -->
        <div class="bg-[#2A2421] p-10 rounded-2xl shadow-xl">
            <form action="#" method="POST" enctype="multipart/form-data">
                
                <!-- Layout Grid Atas: Kiri (Input) & Kanan (Gambar) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-8">
                    
                    <!-- Kiri: Input Fields -->
                    <div class="space-y-6">
                        <!-- Recipe Name -->
                        <div>
                            <label class="block text-lg font-semibold mb-2">Recipe/product name</label>
                            <input type="text" placeholder="e.g croissant" 
                                class="w-full bg-[#1E1917] border border-[#3D332D] rounded-xl px-5 py-4 text-[#E8D8CE] placeholder-[#5C504A] focus:outline-none focus:border-[#D5C5B5] transition">
                        </div>

                        <!-- Category -->
                        <div>
                            <label class="block text-lg font-semibold mb-2">Category</label>
                            <div class="relative">
                                <select class="w-full bg-[#1E1917] border border-[#3D332D] rounded-xl px-5 py-4 text-[#5C504A] appearance-none focus:outline-none focus:border-[#D5C5B5] transition">
                                    <option value="" disabled selected>Select your category...</option>
                                    <option value="pastry" class="text-[#E8D8CE]">Pastry</option>
                                    <option value="bread" class="text-[#E8D8CE]">Bread</option>
                                    <option value="beverage" class="text-[#E8D8CE]">Beverage</option>
                                </select>
                                <!-- Custom Arrow Dropdown -->
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-5 text-[#5C504A]">
                                    <svg class="fill-current h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Price -->
                        <div>
                            <label class="block text-lg font-semibold mb-2">Price</label>
                            <input type="text" placeholder="e.g 6.99" 
                                class="w-full bg-[#1E1917] border border-[#3D332D] rounded-xl px-5 py-4 text-[#E8D8CE] placeholder-[#5C504A] focus:outline-none focus:border-[#D5C5B5] transition">
                        </div>
                    </div>

                    <!-- Kanan: Image Upload -->
                    <div class="flex flex-col">
                        <label class="block text-lg font-semibold text-center mb-2">Recipe Image</label>
                        <!-- Upload Box (Garis Putus-putus) -->
                        <div class="flex-1 bg-[#1E1917] border-2 border-dashed border-[#3D332D] rounded-2xl flex items-center justify-center cursor-pointer hover:border-[#D5C5B5] transition group relative">
                            <!-- Input File (Hidden) -->
                            <input type="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" accept="image/*">
                            <!-- Icon Plus -->
                            <span class="text-7xl font-light text-white group-hover:scale-110 transition-transform duration-200">+</span>
                        </div>
                    </div>

                </div>

                <!-- Bawah: Description (Full Width) -->
                <div>
                    <label class="block text-lg font-semibold mb-2">Description</label>
                    <textarea rows="4" 
                        class="w-full bg-[#1E1917] border border-[#3D332D] rounded-xl px-5 py-4 text-[#E8D8CE] focus:outline-none focus:border-[#D5C5B5] transition resize-none"></textarea>
                </div>

            </form>
        </div>

    </div>
</body>
</html>