<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Add New Culinary Creation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>

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
        .delay-2 { animation-delay: 0.25s; }
    </style>
</head>
<body class="bg-[#1C1613] text-[#F3EFEA] font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-[#4E382A] selection:text-white relative overflow-x-hidden">

    <div class="absolute top-16 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-[#634832]/15 blur-[140px] rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-5xl mx-auto px-6 py-6 w-full flex flex-col justify-between flex-grow relative z-10">
        
        <nav class="flex items-center justify-between py-2 mb-6 animate-fade-in-smooth delay-1">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 rounded-full border border-[#4E413B] flex items-center justify-center bg-[#1A1512]">
                    <span class="text-xs"></span>
                </div>
                <span class="font-light tracking-widest text-sm uppercase">LUNE Admin</span>
            </div>

            <div class="hidden md:flex items-center space-x-6 text-sm text-[#A89F95]">
                <a href="#" class="hover:text-white transition">Home</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Categories</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="text-white font-medium underline underline-offset-8">Add Item</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">History</a>
            </div>

            <div class="flex items-center space-x-3">
                <span class="text-xs text-[#D4C5B9] bg-[#1A1512] border border-[#2A231F] px-3 py-1.5 rounded-full">Chef Admin</span>
            </div>
        </nav>

        <header class="mb-6 animate-fade-in-smooth delay-1">
            <h1 class="text-2xl md:text-3xl font-light tracking-wide text-[#F3EFEA] mb-1">
                Add New Culinary Creation
            </h1>
            <p class="text-xs text-[#A89F95]">
                Masukkan detail menu pastry atau makanan baru untuk ditampilkan ke katalog utama.
            </p>
        </header>

        <main class="bg-[#1A1512] border border-[#2A231F] rounded-3xl p-6 md:p-8 shadow-2xl mb-8 animate-fade-in-smooth delay-2">
            <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <div class="flex flex-col space-y-5">
                    
                    <div>
                        <label class="block text-xs uppercase tracking-wider text-[#D4C5B9] mb-2 font-medium">Recipe / Product Name</label>
                        <input type="text" placeholder="e.g. Valrhona Chocolate Croissant" class="w-full bg-[#120F0D] border border-[#2A231F] rounded-xl px-4 py-3 text-xs text-[#F3EFEA] placeholder-[#5C524A] focus:outline-none focus:border-[#4E413B] transition">
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-wider text-[#D4C5B9] mb-2 font-medium">Category</label>
                        <select class="w-full bg-[#120F0D] border border-[#2A231F] rounded-xl px-4 py-3 text-xs text-[#F3EFEA] focus:outline-none focus:border-[#4E413B] transition">
                            <option value="" disabled selected>Select pastry category</option>
                            <option value="viennoiserie">Viennoiserie</option>
                            <option value="tarts">Artisan Tarts</option>
                            <option value="cakes">Signature Cakes</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-wider text-[#D4C5B9] mb-2 font-medium">Price (USD / IDR)</label>
                        <input type="text" placeholder="e.g. $5.50" class="w-full bg-[#120F0D] border border-[#2A231F] rounded-xl px-4 py-3 text-xs text-[#F3EFEA] placeholder-[#5C524A] focus:outline-none focus:border-[#4E413B] transition">
                    </div>

                </div>

                <div class="flex flex-col justify-between space-y-5">
 
                    <div>
                        <label class="block text-xs uppercase tracking-wider text-[#D4C5B9] mb-2 font-medium">Description</label>
                        <textarea rows="3" placeholder="Tuliskan deskripsi rasa, bahan utama, atau keunggulan menu ini..." class="w-full bg-[#120F0D] border border-[#2A231F] rounded-xl px-4 py-3 text-xs text-[#F3EFEA] placeholder-[#5C524A] focus:outline-none focus:border-[#4E413B] transition resize-none"></textarea>
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-wider text-[#D4C5B9] mb-2 font-medium">Recipe Image</label>
                        <div class="w-full h-32 bg-[#120F0D] border-2 border-dashed border-[#2A231F] hover:border-[#4E413B] rounded-2xl flex flex-col items-center justify-center cursor-pointer transition group">
                            <div class="w-8 h-8 rounded-full bg-[#1A1512] border border-[#2A231F] flex items-center justify-center text-sm mb-1 group-hover:scale-110 transition text-[#D4C5B9]">+</div>
                            <span class="text-[11px] text-[#A89F95]">Click to upload or drag image</span>
                        </div>
                    </div>

                </div>

                <div class="md:col-span-2 flex items-center justify-end space-x-4 pt-4 border-t border-[#2A231F]">
                    <a href="#" class="px-6 py-2.5 text-xs font-medium border border-[#4E413B] text-[#F3EFEA] rounded-full hover:bg-[#120F0D] transition">Cancel</a>
                    <button type="submit" class="px-7 py-2.5 bg-[#4E382A] hover:bg-[#5D4333] text-[#F3EFEA] text-xs uppercase tracking-wider rounded-full transition shadow-md">Publish Recipe</button>
                </div>

            </form>
        </main>

    </div>

</body>
</html>