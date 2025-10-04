<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Lab')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 { color: #333; }
        nav {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #eee;
        }
        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #007bff;
        }
        nav a:hover { text-decoration: underline; }
    </style>
</head>
<body>
<div class="container">
    <nav>
        <a href="{{ route('lab.index') }}">Home</a>
        <a href="{{ route('lab.about') }}?mode=debug">About</a>
        <a href="{{ route('lab.status') }}">Status</a>
        <a href="{{ route('lab.echo') }}?mode=debug">Echo</a>
    </nav>
    @yield('content')
</div>
</body>
</html>
