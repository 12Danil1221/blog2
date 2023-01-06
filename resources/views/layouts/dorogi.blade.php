<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/bootstrap.css">
    <title>Дороги</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand">
            <ul class="navbar-nav">
                <li><a class="nav-link" href="{{ route('dorogi.index') }}">Main</a></li>
                <li><a class="nav-link" href=""></a>About</li>
                <li><a class="nav-link" href=""></a>Contact</li>
            </ul>
        </nav>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Price</th>
                </tr>
            </thead>
            @yield('content')
        </table>
    </div>
</body>
</html>