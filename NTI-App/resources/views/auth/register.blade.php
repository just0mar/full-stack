<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #d6bcfa, #ebf8ff);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-box {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            width: 350px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #6b46c1;
        }
        input {
            width: 100%;
            padding: 0.7rem;
            margin: 0.5rem 0;
            border: 1px solid #cbd5e0;
            border-radius: 0.5rem;
        }
        button {
            background-color: #4299e1;
            color: white;
            padding: 0.7rem;
            width: 100%;
            border: none;
            border-radius: 0.5rem;
            margin-top: 1rem;
            cursor: pointer;
        }
        button:hover {
            background-color: #3182ce;
        }
        a {
            display: block;
            margin-top: 1rem;
            text-align: center;
            color: #5a67d8;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-box">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
            <a href="{{ route('login') }}">Already have an account?</a>
        </form>
    </div>
</body>
</html>
