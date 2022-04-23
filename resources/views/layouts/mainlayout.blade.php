<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <title>@yield('title')</title>

    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lato", sans-serif;
        }

        body {
            background-image: url('https://thecutestblogontheblock.com/wp-content/uploads/2013/05/cheer-and-dear-free-blog-background-3c.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        footer {
            margin-top: auto;
            text-align: center;
        }

        .shine {
            height: 20px;
            width: 100%;
            background-image: radial-gradient(farthest-side at 50% -50%,
                    hsla(0, 0%, 0%, 0.5),
                    hsla(0, 0%, 0%, 0));
            position: relative;
        }

        .shine::before {
            height: 1px;
            position: absolute;
            top: -1px;
            left: 0;
            right: 0;
            background-image: linear-gradient(90deg,
                    hsla(0, 0%, 0%, 0),
                    hsla(0, 0%, 0%, 0.75) 50%,
                    hsla(0, 0%, 0%, 0));
        }

    </style>
</head>

<body class="w3-display-topmiddle" style="width: 40%">
    <header class="w3-center">
        <h1 class="w3-jumbo w3-wide" style="text-shadow:1px 1px 0 black; color: #3CB371;"><b>PROGRAMMING LANGUAGES</h1>
        </b>
    </header>

    <hr class='shine' />

    <div>
        @yield('content')
    </div>

    <footer>
        <h6>Copyright &copy; 2021 Clarianes. All Rights Reserved</h6>
    </footer>
</body>

</html>
