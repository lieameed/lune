<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/lune.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
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
        .delay-2 { animation-delay: 0.2s; }

        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>
<body class="lune-page bg-[#120F0D] text-[#F3EFEA] antialiased min-h-screen flex items-center justify-center py-10 selection:bg-[#4E382A] selection:text-white relative overflow-x-hidden">

    <div class="absolute top-[-20%] left-[-10%] w-[600px] h-[600px] border border-[#2A231F]/30 rounded-full pointer-events-none -z-10"></div>
    <div class="absolute bottom-[-10%] right-[-5%] w-[400px] h-[400px] border border-[#2A231F]/30 rounded-full pointer-events-none -z-10"></div>
    <div class="absolute top-[30%] right-[-15%] w-[500px] h-[500px] border border-[#2A231F]/20 rounded-full pointer-events-none -z-10"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-[#634832]/10 blur-[150px] rounded-full pointer-events-none -z-10"></div>

    <main class="w-full max-w-[460px] px-6 relative z-10">
        <div class="bg-[#1A1512] border border-[#2A231F] rounded-3xl p-8 md:p-10 shadow-2xl animate-fade-in-smooth delay-1">
            <header class="text-center mb-8">
                <h1 class="lune-title text-[28px] font-medium tracking-wide mb-1 text-[#F3EFEA]">Welcome Back to <span class="font-semibold">LUNƐ</span></h1>
                <p class="text-sm text-[#A89F95] font-light">Masuk untuk melanjutkan pesanan pastry favorit Anda.</p>
            </header>

            <form method="POST" action="{{ route('login.store') }}" class="space-y-5 animate-fade-in-smooth delay-2">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-[#F3EFEA] mb-2 tracking-wide">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        autocomplete="email"
                        placeholder="nama@email.com"
                        class="w-full bg-[#120F0D] border border-[#2A231F] text-[#F3EFEA] rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#4E413B] focus:ring-1 focus:ring-[#4E413B] transition-all placeholder-[#4E413B]"
                        @error('email') aria-invalid="true" aria-describedby="email-error" @enderror
                        required
                    >
                    @error('email')
                        <p id="email-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-[#F3EFEA] mb-2 tracking-wide">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        autocomplete="current-password"
                        placeholder="Masukkan password"
                        class="w-full bg-[#120F0D] border border-[#2A231F] text-[#F3EFEA] rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#4E413B] focus:ring-1 focus:ring-[#4E413B] transition-all placeholder-[#4E413B] tracking-widest"
                        @error('password') aria-invalid="true" aria-describedby="password-error" @enderror
                        required
                    >
                    @error('password')
                        <p id="password-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full bg-[#5C4433] hover:bg-[#6A4F3C] text-[#F3EFEA] font-medium py-3.5 rounded-xl transition-colors duration-300 mt-2 text-base tracking-wide shadow-lg shadow-[#5C4433]/20"
                >
                    Log-in
                </button>
            </form>

            <p class="text-center mt-8 text-[13px] text-[#A89F95] font-light">
                Belum Punya Akun?
                <a href="{{ route('pages.signup') }}" class="text-[#F3EFEA] font-medium hover:underline hover:text-white transition-colors ml-1">Sign-up Sekarang</a>
            </p>
        </div>
    </main>
</body>
</html>
