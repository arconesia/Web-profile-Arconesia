<?php include __DIR__ . '/partials/header.php'; ?>

<main id="login" class="min-h-screen relative">
  <!-- Background Image with Overlay -->
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/img/hero.png')">
    <div class="absolute inset-0 bg-black/30"></div>
  </div>
  
  <!-- Login Content -->
  <div class="relative z-10 min-h-screen flex items-center justify-center px-4 py-8">
    <div class="w-full max-w-md">
      <!-- Login Card -->
      <div class="bg-white/20 backdrop-blur-lg rounded-3xl p-8 border border-white/30 shadow-2xl">
        <!-- Header -->
        <div class="text-center mb-8">
          <h1 class="text-4xl font-bold text-white mb-2">Halo Sanak!</h1>
        </div>
        
        <!-- Login Form -->
        <form class="space-y-6">
          <!-- Username Field -->
          <div class="relative">
            <input 
              type="text" 
              placeholder="Username" 
              class="w-full px-6 py-4 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-white/50 transition-all"
            />
            <div class="absolute right-4 top-1/2 -translate-y-1/2">
              <svg class="w-5 h-5 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg>
            </div>
          </div>
          
          <!-- Password Field -->
          <div class="relative">
            <input 
              type="password" 
              placeholder="Password" 
              class="w-full px-6 py-4 bg-white/20 backdrop-blur-sm border border-white/30 rounded-full text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-white/50 transition-all"
            />
            <div class="absolute right-4 top-1/2 -translate-y-1/2">
              <svg class="w-5 h-5 text-white/70" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </div>
          </div>
          
          <!-- Remember Me & Forgot Password -->
          <div class="flex items-center justify-between text-sm">
            <label class="flex items-center text-white">
              <input type="checkbox" class="w-4 h-4 text-yellow-400 bg-white/20 border-white/30 rounded focus:ring-yellow-400 focus:ring-2">
              <span class="ml-2">Remember me</span>
            </label>
            <a href="#" class="text-white hover:text-yellow-300 transition-colors">Forgot password?</a>
          </div>
          
          <!-- Login Button -->
          <button 
            type="submit" 
            class="w-full bg-gradient-to-r from-yellow-400 to-orange-500 hover:from-yellow-300 hover:to-orange-400 text-white font-bold py-4 px-6 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg"
          >
            Login
          </button>
          
          <!-- Divider -->
          <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-white/30"></div>
            </div>
            <div class="relative flex justify-center text-sm">
              <span class="px-4 bg-transparent text-white/70">Or</span>
            </div>
          </div>
          
          <!-- Social Login -->
          <div class="flex items-center justify-center gap-4">
            <!-- Facebook Button -->
            <button 
              type="button" 
              class="w-12 h-12 bg-blue-600 hover:bg-blue-700 rounded-full flex items-center justify-center transition-colors shadow-lg"
            >
              <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </button>
            
            <!-- Google Button -->
            <button 
              type="button" 
              class="w-12 h-12 bg-white hover:bg-gray-100 rounded-full flex items-center justify-center transition-colors shadow-lg"
            >
              <svg class="w-6 h-6" viewBox="0 0 24 24">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
              </svg>
            </button>
          </div>
          
          <!-- Register Link -->
          <div class="text-center mt-6">
            <p class="text-white/80">
              Don't have an account? 
              <a href="#" class="text-white font-semibold hover:text-yellow-300 transition-colors">Register Now</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <!-- Floating Chat Widget -->
  <div class="fixed bottom-6 right-6 z-50">
    <div class="relative">
      <div class="w-14 h-14 bg-gradient-to-r from-orange-400 to-orange-500 rounded-full flex items-center justify-center shadow-lg cursor-pointer hover:scale-110 transition-transform">
        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 20 20">
          <path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"/>
          <path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3-3V7a2 2 0 00-2-2h-1z"/>
        </svg>
      </div>
      <div class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center text-white text-xs font-bold">1</div>
    </div>
  </div>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>