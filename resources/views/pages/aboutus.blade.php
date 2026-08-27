<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - About Us & Our Journey</title>
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
        .delay-3 { animation-delay: 0.4s; }
        .delay-4 { animation-delay: 0.55s; }
        .delay-5 { animation-delay: 0.7s; }
    </style>
</head>
<body class="bg-[#120F0D] text-[#F3EFEA] font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-[#4E382A] selection:text-white relative overflow-x-hidden">

    <div class="absolute top-16 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-[#634832]/15 blur-[140px] rounded-full pointer-events-none -z-10"></div>

    <div class="max-w-6xl mx-auto px-6 py-6 w-full flex flex-col justify-between flex-grow relative z-10">
        
        <nav class="flex items-center justify-between py-2 mb-8 animate-fade-in-smooth delay-1">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 rounded-full border border-[#4E413B] flex items-center justify-center bg-[#1A1512]">
                    <span class="text-xs">🥐</span>
                </div>
                <span class="font-light tracking-widest text-sm uppercase">LUNE</span>
            </div>

            <div class="hidden md:flex items-center space-x-6 text-sm text-[#A89F95]">
                <a href="#" class="hover:text-white transition">Home</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Categories</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Search</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">History</a>
                <span class="text-[#3E342F]">|</span>
                <a href="#" class="hover:text-white transition">Cart</a>
            </div>

            <div class="flex items-center space-x-3">
                <a href="#" class="px-5 py-2 text-xs font-medium bg-[#F3EFEA] text-[#120F0D] rounded-full hover:bg-white transition shadow-sm">Log-In</a>
                <a href="#" class="px-5 py-2 text-xs font-medium border border-[#4E413B] text-[#F3EFEA] rounded-full hover:bg-[#1C1714] transition">Sign-Up</a>
            </div>
        </nav>

        <header class="text-center mb-12 animate-fade-in-smooth delay-2">
            <span class="text-[11px] uppercase tracking-[0.3em] text-[#D4C5B9] bg-[#1A1512] border border-[#2A231F] px-4 py-1.5 rounded-full inline-block mb-4">
                Our Story & Philosophy
            </span>
            <h1 class="text-3xl md:text-5xl font-light tracking-wide leading-tight mb-4">
                Crafting Excellence in <br><span class="italic font-normal">Every Single Layer</span>
            </h1>
            <p class="text-xs md:text-sm text-[#A89F95] max-w-xl mx-auto leading-relaxed">
                Lahir dari kecintaan mendalam pada seni *pastry* klasik Prancis, kami mendedikasikan setiap pagi untuk menghadirkan kualitas rasa yang jujur, mewah, dan berkesan.
            </p>
        </header>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            
            <div class="bg-[#1A1512] border border-[#2A231F] p-5 rounded-2xl flex flex-col justify-between hover:border-[#4E413B] transition shadow-lg animate-fade-in-smooth delay-2">
                <div>
                    <div class="w-full h-40 rounded-xl overflow-hidden mb-4 bg-[#120F0D]">
                        <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&q=80&w=500" alt="Handcrafted Dough" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-sm md:text-base font-medium text-[#F3EFEA] mb-2">100% Handcrafted</h3>
                    <p class="text-xs text-[#A89F95] leading-relaxed">
                        Setiap adonan dilipat dengan tangan secara teliti untuk menciptakan tekstur renyah di luar namun lembut di dalam.
                    </p>
                </div>
            </div>

            <div class="bg-[#1A1512] border border-[#2A231F] p-5 rounded-2xl flex flex-col justify-between hover:border-[#4E413B] transition shadow-lg animate-fade-in-smooth delay-3">
                <div>
                    <div class="w-full h-40 rounded-xl overflow-hidden mb-4 bg-[#120F0D]">
                        <img src="https://images.unsplash.com/photo-1517433670267-08bbd4be890f?auto=format&fit=crop&q=80&w=500" alt="Kitchen Atmosphere" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-sm md:text-base font-medium text-[#F3EFEA] mb-2">Finest French Butter</h3>
                    <p class="text-xs text-[#A89F95] leading-relaxed">
                        Kami hanya menggunakan mentega impor pilihan asal Prancis demi menghasilkan aroma gurih khas yang otentik.
                    </p>
                </div>
            </div>

            <div class="bg-[#1A1512] border border-[#2A231F] p-5 rounded-2xl flex flex-col justify-between hover:border-[#4E413B] transition shadow-lg animate-fade-in-smooth delay-4">
                <div>
                    <div class="w-full h-40 rounded-xl overflow-hidden mb-4 bg-[#120F0D]">
                        <img src="https://images.unsplash.com/photo-1588195538326-c5b1e9f80a1b?auto=format&fit=crop&q=80&w=500" alt="Baker at Work" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <h3 class="text-sm md:text-base font-medium text-[#F3EFEA] mb-2">Baked Fresh Daily</h3>
                    <p class="text-xs text-[#A89F95] leading-relaxed">
                        Tanpa bahan pengawet. Semua produk dipanggang setiap subuh agar sampai di tangan Anda dalam kondisi terbaiknya.
                    </p>
                </div>
            </div>

        </section>

        <section class="mb-16 animate-fade-in-smooth delay-4">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-light tracking-wide mb-2">The Journey of LUNE</h2>
                <p class="text-xs text-[#A89F95]">Bagaimana dapur kecil kami bertransformasi menjadi destinasi *patisserie* pilihan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 relative">
                
                <div class="bg-[#1A1512] border border-[#2A231F] p-5 rounded-2xl hover:border-[#4E413B] transition shadow-md">
                    <span class="text-xs font-semibold tracking-widest text-[#D4C5B9] block mb-2">2022</span>
                    <h4 class="text-sm font-medium text-[#F3EFEA] mb-1">A Humble Beginning</h4>
                    <p class="text-[11px] text-[#A89F95] leading-relaxed">
                        Dimulai dari dapur rumahan kecil dengan satu oven konvensional dan mimpi besar membawa resep Paris autentik.
                    </p>
                </div>

                <div class="bg-[#1A1512] border border-[#2A231F] p-5 rounded-2xl hover:border-[#4E413B] transition shadow-md">
                    <span class="text-xs font-semibold tracking-widest text-[#D4C5B9] block mb-2">2024</span>
                    <h4 class="text-sm font-medium text-[#F3EFEA] mb-1">The First Boutique</h4>
                    <p class="text-[11px] text-[#A89F95] leading-relaxed">
                        Membuka butik fisik pertama kami dengan konsep interior gelap elegan yang langsung memikat para pecinta kuliner.
                    </p>
                </div>

                <div class="bg-[#1A1512] border border-[#2A231F] p-5 rounded-2xl hover:border-[#4E413B] transition shadow-md">
                    <span class="text-xs font-semibold tracking-widest text-[#D4C5B9] block mb-2">2025</span>
                    <h4 class="text-sm font-medium text-[#F3EFEA] mb-1">Mastering Laminations</h4>
                    <p class="text-[11px] text-[#A89F95] leading-relaxed">
                        Menyempurnakan teknik 72 jam *cold fermentation* untuk menghasilkan rongga croissant sempurna berstandar internasional.
                    </p>
                </div>


                <div class="bg-[#1A1512] border border-[#2A231F] p-5 rounded-2xl hover:border-[#4E413B] transition shadow-md">
                    <span class="text-xs font-semibold tracking-widest text-[#D4C5B9] block mb-2">2026</span>
                    <h4 class="text-sm font-medium text-[#F3EFEA] mb-1">Serving 98K+ Patrons</h4>
                    <p class="text-[11px] text-[#A89F95] leading-relaxed">
                        Berkembang menjadi brand pilihan utama dengan puluhan ribu pelanggan setia yang merayakan hari spesial bersama LUNE.
                    </p>
                </div>

            </div>
        </section>


        <section class="bg-[#1A1512] border border-[#2A231F] rounded-3xl p-8 md:p-12 text-center mb-6 relative overflow-hidden animate-fade-in-smooth delay-5 shadow-2xl">
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-[#634832]/10 blur-3xl rounded-full pointer-events-none"></div>
            <span class="text-3xl text-[#D4C5B9] font-serif block mb-3">“</span>
            <p class="text-xs md:text-sm text-[#F3EFEA] max-w-2xl mx-auto italic leading-relaxed mb-4">
                Bagi kami, membuat croissant bukan sekadar mencampur tepung dan mentega. Ini adalah tentang kesabaran, ketulusan, dan bagaimana memberikan satu detik kebahagiaan murni di setiap gigitan pertama Anda.
            </p>
            <span class="text-[11px] uppercase tracking-widest text-[#A89F95] font-medium block">
                — Head Pastry Chef & Founder LUNE
            </span>
        </section>

    </div>

</body>
</html>