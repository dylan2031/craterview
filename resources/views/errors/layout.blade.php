<!DOCTYPE html>
<html>
<head>
    <title>Mars Extranet &copy;3002</title>
    <meta charset="UTF-8" />
    <style>
        body {
            background-color: #FFFFCC;
            font-family: 'Courier New', monospace;
            color: #000;
            margin: 0;
            padding: 40px;
            text-align: center;
        }
        .logo {
            width: 96px;
            image-rendering: pixelated;
        }
        .box {
            border: 2px solid #000;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            background: #C0C0C0;
            box-shadow: inset -2px -2px 0 #fff, inset 2px 2px 0 #808080;
        }
        .text-box {
            border: 2px solid #000;
            padding-left: 8px;
            padding-right: 8px;
            max-width: 400px;
            margin: 0 auto;
            background: white;
            box-shadow: inset -2px -2px 0 #fff, inset 2px 2px 0 #808080;
        }
        .red {
            font-size: 18px;
            color: red;
            font-weight: bold;
        }
        .text {
            font-size: 14px;
            margin-top: 10px;
        }
        .faq {
            font-size: 12px;
            text-align: left;
        }
        
        #error {
            display: block;
            opacity: 1;
        }

        button {
            margin: 15px 8px 0 8px;
            font-family: 'Courier New', monospace;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    {{-- show when page is loading --}}
    @include('includes.loading')
    <div class="box">
        <div id="error" role="alert">
            <img src="{{ asset('images/icons/extranet.svg') }}" alt="Extranet Logo" class="logo" />
            @yield('content')
            <button onclick="window.location.href='/'">Home page</button>
            <button onclick="window.history.back()">Go back</button>
        </div>
    </div>
</body>
</html>
