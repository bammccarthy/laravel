<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #000000;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        /*.top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        } */

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" >
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript" src="{{ asset('js/aos.js') }}"></script>
</head>
<body>
<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title m-b-md">
            Portfolio
        </div>

        <div class="links">
            <a href="https://codepen.io/mccjams/">CodePen</a>
            <a href={{"blog"}}>Blog</a>
            <a href="https://github.com/bammccarthy">GitHub</a>
        </div>
    </div>
</div>
<!--scroll down button -->

<!--slide up info -->
<div class="item" data-aos="slide-up">1</div>
</body>
</html>
