<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #c3dafe, #bee3f8);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            width: 300px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #4299e1;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.7rem;
            margin: 0.5rem 0;
            border: 1px solid #cbd5e0;
            border-radius: 0.5rem;
        }
        button {
            background-color: #805ad5;
            color: white;
            padding: 0.7rem;
            width: 100%;
            border: none;
            border-radius: 0.5rem;
            margin-top: 1rem;
            cursor: pointer;
        }
        button:hover {
            background-color: #6b46c1;
        }
        a {
            display: block;
            margin-top: 0.8rem;
            text-align: center;
            color: #4c51bf;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <a href="{{ route('password.request') }}">Forgot Password?</a>
            <a href="{{ route('register') }}">Don't have an account? Register</a>
        </form>
    </div>
</body>
</html>
