<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Courier New', monospace;
            background: #25b8cc;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }

        .login-title {
            color: white;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 10px;
            letter-spacing: 0.2em;
            font-weight: bold;
        }

        .title-underline {
            border-top: 2px dashed rgba(255, 255, 255, 0.6);
            margin: 0 auto 50px;
            width: 80%;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-input {
            width: 100%;
            padding: 20px 25px;
            border: none;
            border-radius: 50px;
            background: #9bdce6;
            color: white;
            font-size: 1rem;
            outline: none;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.8);
        }

        .form-input:focus {
            opacity: 70;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .login-button {
            width: 60%;
            padding: 18px;
            border: none;
            border-radius: 50px;
            background: white;
            color: #1cb5b5;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            display: block;
            margin: 40px auto 60px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            letter-spacing: 0.1em;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        .signup-section {
            text-align: center;
            color: white;
        }

        .signup-text {
            font-size: 0.95rem;
            margin-bottom: 5px;
        }

        .signup-link {
            font-size: 1.3rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1 class="login-title">LOGIN</h1>
        <div class="title-underline"></div>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="form-group">
                <input 
                    type="email" 
                    name="email" 
                    class="form-input" 
                    placeholder="Mail adress"
                    required
                >
            </div>

            <div class="form-group">
                <input 
                    type="password" 
                    name="password" 
                    class="form-input" 
                    placeholder="Password"
                    required
                >
            </div>

            <button type="submit" class="login-button">LOGIN</button>
        </form>

        <div class="signup-section">
            <p class="signup-text">Don't have an account yet?</p>
            <a href="#" class="signup-link">Sign up</a>
        </div>
    </div>
</body>
</html>
