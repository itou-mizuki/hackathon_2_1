<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #4dd5d5 0%, #2bb8c8 100%);
        }
        
        input {
            background: rgba(173, 216, 230, 0.6);
        }
        
        input:focus {
            background: rgba(173, 216, 230, 0.7);
        }
        
        input::placeholder {
            color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-5">
    <div class="w-full max-w-lg text-center">
        <!-- Title -->
        <h1 class="text-white text-6xl font-bold tracking-wider mb-4 drop-shadow-md">
            SIGNUP
        </h1>
        
        <!-- Divider -->
        <div class="w-full h-[3px] bg-white opacity-80 mb-16"></div>
        
        <!-- Form -->
        <form id="signupForm" class="space-y-8">
            <!-- Username Input -->
            <div>
                <input 
                    type="text" 
                    id="username" 
                    placeholder="User name" 
                    required
                    class="w-full px-9 py-6 rounded-full text-white text-lg outline-none shadow-lg transition-all duration-300 hover:shadow-xl focus:shadow-xl focus:-translate-y-1"
                >
            </div>
            
            <!-- Email Input -->
            <div>
                <input 
                    type="email" 
                    id="email" 
                    placeholder="Mail adress" 
                    required
                    class="w-full px-9 py-6 rounded-full text-white text-lg outline-none shadow-lg transition-all duration-300 hover:shadow-xl focus:shadow-xl focus:-translate-y-1"
                >
            </div>
            
            <!-- Password Input -->
            <div>
                <input 
                    type="password" 
                    id="password" 
                    placeholder="Password" 
                    required
                    class="w-full px-9 py-6 rounded-full text-white text-lg outline-none shadow-lg transition-all duration-300 hover:shadow-xl focus:shadow-xl focus:-translate-y-1"
                >
            </div>
            
            <!-- Signup Button -->
            <button 
                type="submit"
                class="w-3/4 py-5 mt-12 rounded-full bg-white text-cyan-600 text-2xl font-bold tracking-widest shadow-xl transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl active:translate-y-0"
            >
                SIGNUP
            </button>
        </form>
        
        <!-- Login Link -->
        <div class="mt-24 text-left pl-12">
            <p class="text-white text-base mb-2">Already have an account?</p>
            <a href="login.html" class="text-white text-3xl font-bold underline hover:opacity-80 transition-opacity">
                Log in
            </a>
        </div>
    </div>
    
    <script>
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            console.log('Signup attempt:', { username, email, password });
            alert('サインアップが完了しました！');
        });
    </script>
</body>
</html>
