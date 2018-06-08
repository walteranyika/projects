<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{URL::asset('/images/icon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <title>404</title>
    <style>
        body{ background: #235480;
              font-family: Raleway, sans-serif;}

        img{ margin-top: 40px;}

        h2 {color: #fff;
            font-weight:600;}

        a{color: #fff;
          text-decoration: none;
          font-size: 2em;}

        a:hover{ color: #ff2121;
                 text-decoration: none;}
    </style>
</head>
<body>
    <div class="container text-center">
        <img src="{{URL::asset('/images/error.png')}}" alt="Page not found">
        <h2>Oops! The page you are looking for could not be found.</h2>
        <a href="{{route('home')}}">Go Back Home</a>
    </div>
</body>
</html>