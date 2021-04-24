<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            <a class="btn btn-warning" href="{{route('qr.index')}}">Click here for QR Generator</a><br>
            <a class="btn btn-warning" href="{{route('barcode.index')}}">Click here for Barcode</a><br>
            <a class="btn btn-warning" href="{{route('idcard.index')}}">ID Card Generator</a>
            {{--                    <div class="visible-print text-center">--}}
            {{--                        {!! QrCode::size(100)->generate(Request::url()); !!}--}}
            {{--                    </div>--}}
            {{--                    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('11', 'C39')}}" alt="barcode" /><br><br>--}}
            {{--                    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('123456789', 'C39+',1,33,array(0,255,0), true)}}" alt="barcode" /><br><br>--}}
            {{--                    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('4', 'C39+',3,33,array(255,0,0))}}" alt="barcode" /><br><br>--}}
            {{--                    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('12', 'C39+')}}" alt="barcode" /><br><br>--}}
            {{--                    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('523', 'POSTNET')}}" alt="barcode" /><br/><br/>--}}
        </div>
    </div>
</div>
</body>
</html>
