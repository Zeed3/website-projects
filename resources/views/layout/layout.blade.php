<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <header>
        <div style="background-color: black; width: 100vw; height: 50px; color: white; display:flex; justify-content: space-between; align-items: center; padding: 10px;">
            <div>
                <h1>Intro To Laravel</h1>
            </div>
            <div>
                <a href="/login" style="color: white; text-decoration: none">Login</a>
                <a href="/register" style="color: white; text-decoration: none">Register</a>
            </div>
        </div>
    </header>
    <div>
        @yield('content')
    </div>
</body>
</html>
