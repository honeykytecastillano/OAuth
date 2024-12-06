<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
  
    <style>
        body {
            background-color: #30c996;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(221, 221, 221, 0.5); 
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            text-align: left;
            font-size: 14px;
            color: #555;
        }

        input {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            width: 100%; 
            box-sizing: border-box;
        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        button[type="submit"] {
            background-color:#1abd87;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        button.google-login {
            background-color: #db4437; 
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%; 
            display: inline-block;
            text-align: center;
        }

        button.google-login:hover {
            background-color: #c1351d; 
        }

        .register-link,
        .google-link {
            margin-top: 15px;
            font-size: 14px;
            color: #555;
        }

        .register-link a,
        .google-link a {
            color: #007bff;
            text-decoration: none;
        }

        .register-link a:hover,
        .google-link a:hover {
            text-decoration: underline;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        h5{
            border-color:white;
            font-size: small;
            padding-top: 0px;
            padding-bottom: 0px;
            }

    </style>
</head>
<body>

    <div class="container">
        <h1>Login</h1>

        <!-- Error messages display -->
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        
        <h5>Or</h5>
        
            <a href="{{ route('google.redirect') }}"><button type="submit"><i class="fa-google"></i>Login with Google</button></a>
        </div>
    </div>

</body>
</html>
