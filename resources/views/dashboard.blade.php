<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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
            max-width: 700px;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome,{{ $user->name }}!</h1>

        <p>This is your dashboard.</p>

        <p><img src="{{ $user->avatar }}" alt="Avatar"></p>
        <p><strong>Google ID:</strong> {{ $user->id }}</p>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        
    </div>
</body>
</html>
