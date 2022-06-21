<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    @yield('content')
</body>
</html>

<style>

body{
    height: 1520px;
    background: linear-gradient(45deg, #000000, #0d004b, #000000);
    background-size: 300% 300%;
    animation: colors 15s ease infinite;
  }

  @keyframes colors {
    0% {
      background-position: 0% 50%;
    }
    50% {
      background-position: 100% 50%;
    }
    100% {
      background-position: 0% 50%;
    }
  }

  h1{
    color: #fff;
  }
  hr{
    background: #fff;
  }
  </style>