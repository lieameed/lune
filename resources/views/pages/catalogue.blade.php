<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Create Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInSlideSlow {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-smooth {
            animation: fadeInSlideSlow 1.1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
        }
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.25s; }
    </style>
</head>
<body class="bg-[#120F0D] text-[#F3EFEA] font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-[#4E382A] selection:text-white relative overflow-x-hidden">

    <!-- Efek Cahaya / Glow Modern di Belakang -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[300px] bg-[#634832]/15 blur-[140px] rounded-full pointer-events-none -z-10"></div>

    <!-- Container Utama -->
    <div class="max-w-md mx-auto px-6 py-10 w-full flex flex-col justify-center flex-grow relative z-10">
        
        <!-- Logo Header -->
        <div class="text-center mb-8 animate-fade-in-smooth delay-1">
            <a href="#" class="inline-flex w-12 h-12 rounded-full border border-[#4E413B] items-center justify-center bg-[#1A1512] mb-3 shadow-md">
                <span class="text-sm">🥐</span>
            </a>
            <h1 class="text-2xl font-light tracking-wide text-[#F3EFEA] font-serif">Join LUNE Atelier</h1>
            <p class="text-xs text-[#A89F95] mt-1">Buat akun untuk mulai menikmati koleksi artisan pastry eksklusif.</p>
        </div>

        <!-- Card Form Sign-Up -->
        <main class="bg-[#1A1512] border border-[#2A231F] rounded-3xl p-8 shadow-2xl animate-fade-in-smooth delay-2">
            <form action="#" method="POST" class="space-y-4">
                
                <div>
                    <label class="block text-[11px] uppercase tracking-wider text-[#D4C5B9] mb-2 font-medium">Full Name</label>
                    <input type="text" placeholder="Eleanor Vance" class="w-full bg-[#120F0D] border border-[#2A231F] rounded-xl px-4 py-3 text-xs text-[#F3EFEA] placeholder-[#5C524A] focus:outline-none focus:border-[#4E413B] transition">
                </div>

                <div>
                    <label class="block text-[11px] uppercase tracking-wider text-[#D4C5B9] mb-2 font-medium">Email Address</label>
                    <input type="email" placeholder="name@example.com" class="w-full bg-[#120F0D] border border-[#2A231F] rounded-xl px-4 py-3 text-xs text-[#F3EFEA] placeholder-[#5C524A] focus:outline-none focus:border-[#4E413B] transition">
                </div>

                <div>
                    <label class="block text-[11px] uppercase tracking-wider text-[#D4C5B9] mb-2 font-medium">Password</label>
                    <input type="password" placeholder="Minimal 8 karakter" class="w-full bg-[#120F0D] border border-[#2A231F] rounded-xl px-4 py-3 text-xs text-[#F3EFEA] placeholder-[#5C524A] focus:outline-none focus:border-[#4E413B] transition">
                </div>

                <button type="submit" class="w-full py-3 bg-[#4E382A] hover:bg-[#5D4333] text-[#F3EFEA] text-xs uppercase tracking-wider rounded-full transition shadow-md font-medium mt-2">
                    Create Account
                </button>

            </form>

            <div class="text-center mt-6 pt-6 border-t border-[#2A231F]">
                <p class="text-xs text-[#A89F95]">
                    Sudah punya akun? <a href="#" class="text-[#F3EFEA] font-medium hover:underline">Log-In di sini</a>
                </p>
            </div>
        </main>

    </div>

</body>
</html>