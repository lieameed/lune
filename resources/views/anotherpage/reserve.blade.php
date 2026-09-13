<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Custom Request</title>
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
    <div class="absolute bottom-10 right-10 w-[500px] h-[500px] border border-[#2D231E]/20 rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-5xl mx-auto px-6 py-6 w-full flex flex-col justify-between flex-grow relative z-10">
        
        <!-- Navbar -->
        <nav class="flex items-center justify-between pb-4 mb-6 border-b border-[#2D231E] animate-fade-in-smooth delay-1">
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
                <a href="#" class="hover:text-white transition">History</a>
                <span class="text-[#3D302A]">|</span>
                <a href="#" class="hover:text-white transition">Cart</a>
            </div>

            <div class="flex items-center space-x-2">
                <a href="#" class="px-5 py-2 bg-[#EFECE6] text-[#1C1613] text-xs font-medium rounded-full hover:bg-white transition shadow-sm">Log-in</a>
                <a href="#" class="px-5 py-2 bg-[#3A2E28] text-[#EFECE6] text-xs font-medium rounded-full border border-[#4D3E36] hover:bg-[#4D3E36] transition">Sign-Up</a>
            </div>
        </nav>

        <!-- Header Title -->
        <header class="text-center mb-8 animate-fade-in-smooth delay-1">
            <h1 class="text-2xl md:text-4xl font-light tracking-wide text-[#F3EFEA] font-serif">
                Design Your Dream Masterpiece
            </h1>
        </header>

        <!-- Main Form Card -->
        <main class="bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-6 md:p-10 shadow-2xl mb-10 animate-fade-in-smooth delay-2">
            
            <div class="mb-6 pb-4 border-b border-[#3A2E28]">
                <h2 class="text-sm font-semibold tracking-wide text-white">Event & Contact Details</h2>
            </div>

            <form class="space-y-6">
                
                <!-- Row 1: Full Name & Phone Number -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-semibold text-white mb-2">Full Name</label>
                        <input type="text" placeholder="e.g Charlotte Windsor" class="w-full bg-[#16110E] border border-[#16110E] rounded-lg px-4 py-3 text-xs text-white placeholder-[#524842] focus:outline-none focus:border-[#6A4A3A] transition shadow-inner">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-white mb-2">Phone Number</label>
                        <input type="text" placeholder="e.g +62 812-xxxx-xxxx" class="w-full bg-[#16110E] border border-[#16110E] rounded-lg px-4 py-3 text-xs text-white placeholder-[#524842] focus:outline-none focus:border-[#6A4A3A] transition shadow-inner">
                    </div>
                </div>

                <!-- Row 2: Event Type & Target Date -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-semibold text-white mb-2">Event Type</label>
                        <div class="relative">
                            <select class="w-full bg-[#16110E] border border-[#16110E] rounded-lg px-4 py-3 text-xs text-[#524842] focus:outline-none focus:border-[#6A4A3A] transition appearance-none">
                                <option class="text-[#524842]" disabled selected>Pilih Jenis Acara</option>
                                <option class="text-white">Wedding Cake</option>
                                <option class="text-white">Birthday Cake</option>
                                <option class="text-white">Custom Hamper</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-[#A09893]">
                                ▼
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-white mb-2">Target Date (Required H-3)</label>
                        <div class="relative">
                            <input type="text" placeholder="dd/mm/yyyy" class="w-full bg-[#16110E] border border-[#16110E] rounded-lg px-4 py-3 text-xs text-white placeholder-[#524842] focus:outline-none focus:border-[#6A4A3A] transition shadow-inner">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-[#A09893]">
                                ▼
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 3: Base Flavor & Estimated Portions -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2 border-t border-[#3A2E28]">
                    <div>
                        <label class="block text-xs font-semibold text-white mb-2">Base Flavor Preference</label>
                        <div class="relative">
                            <select class="w-full bg-[#16110E] border border-[#16110E] rounded-lg px-4 py-3 text-xs text-[#524842] focus:outline-none focus:border-[#6A4A3A] transition appearance-none">
                                <option class="text-[#524842]" disabled selected>Pilih Rasa Utama</option>
                                <option class="text-white">Valrhona Dark Chocolate</option>
                                <option class="text-white">French Vanilla Bean</option>
                                <option class="text-white">Matcha Green Tea</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-[#A09893]">
                                ▼
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-white mb-2">Estimated Portions / Size</label>
                        <input type="text" placeholder="e.g Untuk 20-30 orang / 3 Tiers" class="w-full bg-[#16110E] border border-[#16110E] rounded-lg px-4 py-3 text-xs text-white placeholder-[#524842] focus:outline-none focus:border-[#6A4A3A] transition shadow-inner">
                    </div>
                </div>

                <!-- Row 4: Description & Reference Image -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2">
                    <div>
                        <label class="block text-xs font-semibold text-white mb-2">Description</label>
                        <textarea rows="5" class="w-full bg-[#16110E] border border-[#16110E] rounded-lg p-4 text-xs text-white placeholder-[#524842] focus:outline-none focus:border-[#6A4A3A] transition shadow-inner resize-none"></textarea>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-white mb-2">Reference Image</label>
                        <div class="w-full h-[132px] bg-[#16110E] border border-dashed border-[#4A3D36] rounded-lg flex items-center justify-center cursor-pointer hover:border-[#6A4A3A] transition group">
                            <span class="text-2xl text-[#A09893] group-hover:text-white transition">+</span>
                        </div>
                    </div>
                </div>

            </form>
        </main>

    </div>

</body>
</html>