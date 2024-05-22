<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Players</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #main {
            background-color: #f5f5f5;
            padding: 20px;
        }

        #upbar {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #title h1 {
            margin: 0;
            font-size: 24px;
        }

        #main-nav {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        #main-nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        #main-nav a:hover {
            background-color: #555;
        }

        .active {
            background-color: #555;
        }

        #content {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
        }

        body {
            background-color: #f5f5f5;
            font-family: 'Times New Roman', Times, serif;
            color: #343a40;
        }
        .card {
            border: 1px solid #ced4da;
            transition: box-shadow 0.3s;
            background-color: #ffffff;
            padding: 1rem;
        }
        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #212529;
        }
        .card-text {
            font-size: 1.1rem;
            color: #495057;
        }
        .btn-primary {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-primary:hover {
            background-color: #00376d;
            border-color: #002752;
        }
        .header-buttons {
            padding: 1rem 0;
            background-color: #e9ecef;
        }
        .container {
            padding-top: 2rem;
        }
        .icon {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }
        .header-buttons .btn-outline-secondary {
            color: #343a40;
            border-color: #343a40;
        }
        .header-buttons .btn-outline-secondary:hover {
            background-color: #343a40;
            color: #ffffff;
        }

    </style>

</head>
<body>

<div id="main">
    <div id="upbar">
        <div id="title">
            <h1>Tinangnan Volleyball Players</h1>
        </div>

        <nav id="main-nav">
            <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
            <a href="{{ url('/players') }}" class="{{ Request::is('players') ? 'active' : '' }}">Players</a>
            <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a>
        </nav>
    </div>
    <div id="content">
        @yield('content')
    </div>
</div>

</body>
</html>
