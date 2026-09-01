<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUNE - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* Reusing animations from reference */
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
        .delay-3 { animation-delay: 0.3s; }
        
        /* Custom font for specific headings if needed, otherwise fallback to sans */
        body {
            font-family: 'Outfit', sans-serif; /* Adding Outfit to closer match the geometric feel of the image */
        }
    </style>
</head>
<body class="bg-[#120F0D] text-[#F3EFEA] antialiased min-h-screen flex items-center justify-center selection:bg-[#4E382A] selection:text-white relative overflow-hidden">

    <!-- Background Decorative Elements (inspired by the image's faint circles) -->
    <div class="absolute top-[-20%] left-[-10%] w-[600px] h-[600px] border border-[#2A231F]/30 rounded-full pointer-events-none -z-10"></div>
    <div class="absolute bottom-[-10%] right-[-5%] w-[400px] h-[400px] border border-[#2A231F]/30 rounded-full pointer-events-none -z-10"></div>
    <div class="absolute top-[30%] right-[-15%] w-[500px] h-[500px] border border-[#2A231F]/20 rounded-full pointer-events-none -z-10"></div>
    
    <!-- Subtle glow from reference -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-[#634832]/10 blur-[150px] rounded-full pointer-events-none -z-10"></div>

    <!-- Main Login Card Container -->
    <div class="w-full max-w-[460px] px-6 relative z-10">
        
        <div class="bg-[#1A1512] border border-[#2A231F] rounded-3xl p-8 md:p-10 shadow-2xl animate-fade-in-smooth delay-1">
            
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-[28px] font-medium tracking-wide mb-1 text-[#F3EFEA]">Welcome to <span class="font-semibold">LUNƐ</span></h1>
                <p class="text-sm text-[#A89F95] font-light">Masuk untuk melanjutkan pesanan pastry favorit Anda.</p>
            </div>

            <!-- Login Form -->
            <form class="space-y-5 animate-fade-in-smooth delay-2">
                
                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-[#F3EFEA] mb-2 tracking-wide">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        placeholder="e.g Charlotte Windsor" 
                        class="w-full bg-[#120F0D] border border-[#2A231F] text-[#F3EFEA] rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#4E413B] focus:ring-1 focus:ring-[#4E413B] transition-all placeholder-[#4E413B]"
                        required
                    >
                </div>

                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-sm font-medium text-[#F3EFEA] mb-2 tracking-wide">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        placeholder="••••••••••••••••" 
                        class="w-full bg-[#120F0D] border border-[#2A231F] text-[#F3EFEA] rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#4E413B] focus:ring-1 focus:ring-[#4E413B] transition-all placeholder-[#4E413B] tracking-widest"
                        required
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-[#F3EFEA] mb-2 tracking-wide">Enter password again</label>
                    <input 
                        type="password" 
                        id="password" 
                        placeholder="••••••••••••••••" 
                        class="w-full bg-[#120F0D] border border-[#2A231F] text-[#F3EFEA] rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-[#4E413B] focus:ring-1 focus:ring-[#4E413B] transition-all placeholder-[#4E413B] tracking-widest"
                        required
                    >
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full bg-[#5C4433] hover:bg-[#6A4F3C] text-[#F3EFEA] font-medium py-3.5 rounded-xl transition-colors duration-300 mt-2 text-base tracking-wide shadow-lg shadow-[#5C4433]/20"
                >
                    Sign-In
                </button>
            </form>

            <!-- Divider -->
            <div class="my-7 relative flex items-center justify-center animate-fade-in-smooth delay-3">
                <div class="absolute w-full border-t border-dashed border-[#4E413B]"></div>
                <span class="bg-[#1A1512] px-4 text-[13px] text-[#A89F95] relative z-10 font-light tracking-wide">Sign-In with another way</span>
            </div>

            <!-- Social Login Options -->
            <div class="space-y-3 animate-fade-in-smooth delay-3">
                <!-- Google Button -->
                <button type="button" class="w-full bg-[#120F0D] border border-[#2A231F] hover:bg-[#1C1714] hover:border-[#4E413B] transition-all duration-300 py-3 rounded-xl flex items-center justify-center space-x-3 group">
                    <svg class="w-5 h-5 opacity-90 group-hover:opacity-100 transition-opacity" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                    </svg>
                    <span class="text-[13px] text-[#A89F95] font-light group-hover:text-[#F3EFEA] transition-colors">Sign-in with Google</span>
                </button>

                <!-- Apple Button -->
                <button type="button" class="w-full bg-[#120F0D] border border-[#2A231F] hover:bg-[#1C1714] hover:border-[#4E413B] transition-all duration-300 py-3 rounded-xl flex items-center justify-center space-x-3 group">
                    <svg class="w-5 h-5 fill-[#F3EFEA] opacity-90 group-hover:opacity-100 transition-opacity" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.365 7.113c1.037-1.258 1.734-2.915 1.545-4.567-1.424.057-3.18.948-4.24 2.226-.948 1.135-1.758 2.83-1.54 4.453 1.59.123 3.197-.847 4.235-2.112zm-3.834 8.243c-.453-2.607 2.302-3.896 2.417-3.96-.118-1.744-1.492-2.357-2.116-2.434-1.503-.153-2.935 1.055-3.7 1.055-.765 0-1.933-1.026-3.17-.996-1.614.03-3.104.937-3.937 2.387-1.687 2.924-.43 7.25 1.213 9.626.804 1.163 1.745 2.463 2.986 2.414 1.2-.05 1.666-.777 3.118-.777 1.45 0 1.88.777 3.146.75 1.295-.028 2.115-1.196 2.91-2.364.92-1.344 1.302-2.646 1.32-2.712-.03-.01-2.54-.975-2.96-3.52z"/>
                    </svg>
                    <span class="text-[13px] text-[#A89F95] font-light group-hover:text-[#F3EFEA] transition-colors">Sign-in with Apple</span>
                </button>
            </div>

            <!-- Footer -->
            <p class="text-center mt-8 text-[13px] text-[#A89F95] font-light animate-fade-in-smooth delay-3">
                Sudah Punya Akun? 
                <a href="#" class="text-[#F3EFEA] font-medium hover:underline hover:text-white transition-colors ml-1">Log-in Sekarang</a>
            </p>

        </div>
    </div>

</body>
</html>