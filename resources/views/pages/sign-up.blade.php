<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Sign-Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeInSlideSlow {
            0% { opacity: 0; transform: translateY(15px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-smooth {
            animation: fadeInSlideSlow 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
        }
    </style>
</head>
<body class="bg-[#1C1613] text-[#F3EFEA] font-sans antialiased w-screen h-screen flex items-center justify-center relative overflow-hidden m-0 p-0">

    <div class="absolute bottom-[-20%] right-[-10%] w-[800px] h-[800px] border border-[#302520]/40 rounded-full pointer-events-none"></div>

    <div class="w-full max-w-[450px] bg-[#2B221D] rounded-2xl p-10 shadow-2xl animate-fade-in-smooth relative z-10 mx-4">

        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold tracking-wide text-white mb-2">Welcome to LUNE</h1>
            <p class="text-[11px] text-[#A09893]">Masuk untuk melanjutkan pesanan pastry favorit Anda.</p>
        </div>

        <form class="space-y-5">
            <div>
                <label class="block text-xs font-bold text-white mb-2">Email Address</label>
                <input type="email" placeholder="e.g Charlotte Windsor" class="w-full bg-[#1B1411] rounded-lg px-4 py-3.5 text-xs text-white placeholder-[#4A403A] focus:outline-none focus:ring-1 focus:ring-[#6F503C] transition">
            </div>
            
            <div>
                <label class="block text-xs font-bold text-white mb-2">Password</label>
                <input type="password" placeholder="••••••••••••••••" class="w-full bg-[#1B1411] rounded-lg px-4 py-3.5 text-xs text-white placeholder-[#4A403A] focus:outline-none focus:ring-1 focus:ring-[#6F503C] transition">
            </div>

            <div>
                <label class="block text-xs font-bold text-white mb-2">Confirm Password</label>
                <input type="password" placeholder="••••••••••••••••" class="w-full bg-[#1B1411] rounded-lg px-4 py-3.5 text-xs text-white placeholder-[#4A403A] focus:outline-none focus:ring-1 focus:ring-[#6F503C] transition">
            </div>

            <button type="submit" class="w-full py-3.5 bg-[#6F503C] hover:bg-[#8A644D] text-white text-sm font-bold rounded-lg transition mt-6">
                Sign-up
            </button>
        </form>

        <div class="text-center mt-8">
            <p class="text-xs text-[#A09893]">
                Sudah Punya Akun? <a href="#" class="text-white font-bold hover:underline">Login Sekarang</a>
            </p>
        </div>
    </div>

</body>
</html>