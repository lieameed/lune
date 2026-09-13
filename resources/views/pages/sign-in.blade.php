<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Log-In</title>
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
    </style>
</head>
<body class="bg-[#1C1613] text-[#F3EFEA] font-sans antialiased min-h-screen flex items-center justify-center selection:bg-[#6A4A3A] selection:text-white relative overflow-hidden px-4">

    <div class="absolute top-0 left-0 w-[400px] h-[400px] border border-[#2D231E]/30 rounded-full -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] border border-[#2D231E]/30 rounded-full translate-x-1/3 translate-y-1/3 pointer-events-none"></div>

    <div class="max-w-md w-full bg-[#2A211C] border border-[#3A2E28] rounded-2xl p-8 shadow-2xl animate-fade-in-smooth relative z-10">
        <div class="text-center mb-8">
            <h1 class="text-xl font-semibold tracking-wide text-white mb-1">Welcome Back to LUNE</h1>
            <p class="text-[11px] text-[#A09893]">Masuk untuk melanjutkan pesanan pastry favorit Anda.</p>
        </div>

        <form class="space-y-4">
            <div>
                <label class="block text-xs font-semibold text-white mb-2">Email Address</label>
                <input type="email" placeholder="e.g Charlotte Windsor" class="w-full bg-[#16110E] border border-[#16110E] rounded-lg px-4 py-3 text-xs text-white placeholder-[#524842] focus:outline-none focus:border-[#6A4A3A] transition shadow-inner">
            </div>
            
            <div>
                <label class="block text-xs font-semibold text-white mb-2">Password</label>
                <input type="password" placeholder="••••••••••••••••" class="w-full bg-[#16110E] border border-[#16110E] rounded-lg px-4 py-3 text-xs text-white placeholder-[#524842] focus:outline-none focus:border-[#6A4A3A] transition shadow-inner">
            </div>

            <button type="submit" class="w-full py-3 bg-[#6A4A3A] hover:bg-[#7D5A47] text-white text-xs font-medium rounded-lg transition shadow-md mt-2">
                Log-in
            </button>
        </form>

        <div class="flex items-center justify-center space-x-3 my-6">
            <div class="h-px w-full border-t border-dashed border-[#4A3D36]"></div>
            <span class="text-[11px] text-[#A09893] whitespace-nowrap">Log-in with another way</span>
            <div class="h-px w-full border-t border-dashed border-[#4A3D36]"></div>
        </div>

        <div class="space-y-3">
            <button class="w-full py-3 bg-[#16110E] hover:bg-[#1E1713] border border-[#2D231E] text-white text-[11px] font-medium rounded-lg flex items-center justify-center gap-3 transition">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                Log-in with Google
            </button>
            <button class="w-full py-3 bg-[#16110E] hover:bg-[#1E1713] border border-[#2D231E] text-white text-[11px] font-medium rounded-lg flex items-center justify-center gap-3 transition">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.05 20.28c-.98.68-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 13.25 3.51 5.98 9.05 5.68c1.3.07 2.44.82 3.12.82.69 0 2.02-.9 3.59-.76 1.54.14 2.89.8 3.68 2.12-3.11 1.77-2.63 6 0 7.33-.67 1.8-1.57 3.73-2.39 5.09zm-3.87-16.1c.3-1.92-1.12-3.81-2.9-4.18-.46 2.05 1.34 3.91 2.9 4.18z"/>
                </svg>
                Log-in with Apple
            </button>
        </div>

        <div class="text-center mt-6">
            <p class="text-[11px] text-[#A09893]">
                Belum Punya Akun? <a href="#" class="text-white font-bold hover:underline">Sign-up Sekarang</a>
            </p>
        </div>
    </div>

</body>
</html>