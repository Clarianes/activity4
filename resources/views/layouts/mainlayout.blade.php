<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <title>@yield('title')</title>
    <style>
        body {
            background-image: url('https://nsiteam.com/social/wp-content/uploads/2015/12/blog-background-2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif
        }

    </style>
</head>

<body style="max-width: 50%; margin: auto;">
    @yield('content')
</body>

</html>
