<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman | Login</title>

    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">


    {{-- css style --}}
    <link rel="stylesheet" href="/css/style.css">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet" /> --}}
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}

    {{-- <style>
        .fixed-action-btn {
            position: fixed;
            right: 23px;
            bottom: 23px;
            padding-top: 15px;
            margin-bottom: 0;
            z-index: 997
        }
        .fixed-action-btn.active ul {
            visibility: visible
        }
        .fixed-action-btn.direction-left,
        .fixed-action-btn.direction-right {
            padding: 0 0 0 15px
        }
        .fixed-action-btn.direction-left ul,
        .fixed-action-btn.direction-right ul {
            text-align: right;
            right: 64px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            height: 100%;
            left: auto;
            width: 500px
        }
        .fixed-action-btn.direction-left ul li,
        .fixed-action-btn.direction-right ul li {
            display: inline-block;
            margin: 7.5px 15px 0 0
        }
        .fixed-action-btn.direction-right {
            padding: 0 15px 0 0
        }
        .fixed-action-btn.direction-right ul {
            text-align: left;
            direction: rtl;
            left: 64px;
            right: auto
        }
        .fixed-action-btn.direction-right ul li {
            margin: 7.5px 0 0 15px
        }
        .fixed-action-btn.direction-bottom {
            padding: 0 0 15px 0
        }
        .fixed-action-btn.direction-bottom ul {
            top: 64px;
            bottom: auto;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: reverse;
            -webkit-flex-direction: column-reverse;
            -ms-flex-direction: column-reverse;
            flex-direction: column-reverse
        }
        .fixed-action-btn.direction-bottom ul li {
            margin: 15px 0 0 0
        }
        .fixed-action-btn.toolbar {
            padding: 0;
            height: 56px
        }
        .fixed-action-btn.toolbar.active>a i {
            opacity: 0
        }
        .fixed-action-btn.toolbar ul {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            top: 0;
            bottom: 0;
            z-index: 1
        }
        .fixed-action-btn.toolbar ul li {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            display: inline-block;
            margin: 0;
            height: 100%;
            -webkit-transition: none;
            transition: none
        }
        .fixed-action-btn.toolbar ul li a {
            display: block;
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 100%;
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #fff;
            line-height: 56px;
            z-index: 1
        }
        .fixed-action-btn.toolbar ul li a i {
            line-height: inherit
        }
        .fixed-action-btn ul {
            left: 0;
            right: 0;
            text-align: center;
            position: absolute;
            bottom: 64px;
            margin: 0;
            visibility: hidden
        }
        .fixed-action-btn ul li {
            margin-bottom: 15px
        }
        .fixed-action-btn ul a.btn-floating {
            opacity: 0
        }
        .fixed-action-btn .fab-backdrop {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            width: 40px;
            height: 40px;
            background-color: #26a69a;
            border-radius: 50%;
            -webkit-transform: scale(0);
            transform: scale(0)
        }
        .btn-floating,
        .btn-large,
        .btn-small,
        .btn-flat {
            font-size: 14px;
            outline: 0
        }
        .btn i,
        .btn-large i,
        .btn-small i,
        .btn-floating i,
        .btn-large i,
        .btn-small i,
        .btn-flat i {
            font-size: 1.3rem;
            line-height: inherit
        }
        .btn:focus,
        .btn-large:focus,
        .btn-small:focus,
        .btn-floating:focus {
            background-color: #1d7d74
        }
        .btn,
        .btn-large,
        .btn-small {
            text-decoration: none;
            color: #fff;
            background-color: #26a69a;
            text-align: center;
            letter-spacing: .5px;
            -webkit-transition: background-color .2s ease-out;
            transition: background-color .2s ease-out;
            cursor: pointer
        }
        .btn:hover,
        .btn-large:hover,
        .btn-small:hover {
            background-color: #2bbbad
        }
        .btn-floating {
            display: inline-block;
            color: #fff;
            position: relative;
            overflow: hidden;
            z-index: 1;
            width: 40px;
            height: 40px;
            line-height: 40px;
            padding: 0;
            background-color: #26a69a;
            border-radius: 50%;
            -webkit-transition: background-color .3s;
            transition: background-color .3s;
            cursor: pointer;
            vertical-align: middle
        }
        .btn-floating:hover {
            background-color: #26a69a
        }
        .btn-floating:before {
            border-radius: 0
        }
        .btn-floating.btn-large {
            width: 56px;
            height: 56px;
            padding: 0
        }
        .btn-floating.btn-large.halfway-fab {
            bottom: -28px
        }
        .btn-floating.btn-large i {
            line-height: 56px
        }
        .btn-floating.btn-small {
            width: 32.4px;
            height: 32.4px
        }
        .btn-floating.btn-small.halfway-fab {
            bottom: -16.2px
        }
        .btn-floating.btn-small i {
            line-height: 32.4px
        }
        .btn-floating.halfway-fab {
            position: absolute;
            right: 24px;
            bottom: -20px
        }
        .btn-floating.halfway-fab.left {
            right: auto;
            left: 24px
        }
        .btn-floating i {
            width: inherit;
            display: inline-block;
            text-align: center;
            color: #fff;
            font-size: 1.6rem;
            line-height: 40px
        }
        button.btn-floating {
            border: none
        }
        .btn-flat {
            -webkit-box-shadow: none;
            box-shadow: none;
            background-color: transparent;
            color: #343434;
            cursor: pointer;
            -webkit-transition: background-color .2s;
            transition: background-color .2s
        }
        .btn-flat:focus,
        .btn-flat:hover {
            -webkit-box-shadow: none;
            box-shadow: none
        }
        .btn-flat:focus {
            background-color: rgba(0, 0, 0, 0.1)
        }
        .btn-flat.disabled,
        .btn-flat.btn-flat[disabled] {
            background-color: transparent !important;
            color: #b3b2b2 !important;
            cursor: default
        }
        .btn-large {
            height: 54px;
            line-height: 54px;
            font-size: 15px;
            padding: 0 28px
        }
        .btn-large i {
            font-size: 1.6rem
        }
        .btn-small {
            height: 32.4px;
            line-height: 32.4px;
            font-size: 13px
        }
        .btn-small i {
            font-size: 1.2rem
        }
    </style> --}}

</head>



<body>

    {{-- @include('partials.navbar') --}}

    <div class="container mt-4">
        @yield('container')

        {{-- <div class="fixed-action-btn">
            <a class="btn-floating btn-large turquoise pulse tooltipped fixed" data-position="left"
                data-tooltip="Learn More">
                <i class="large material-icons">add_circle_outline</i>
            </a>
            <ul>
                <li>
                    <a class="btn-floating blue tooltipped" data-position="left"
                        data-tooltip="I'm interested in staying up to date!">
                        <i class="material-icons">favorite</i></a>
                </li>
                <li>
                    <a class="btn-floating green tooltipped" data-position="left"
                        data-tooltip="I'm interested in funding this!">
                        <i class="material-icons">business_center</i></a>
                </li>   
                <li>
                    <a class="btn-floating yellow tooltipped" data-position="left"
                        data-tooltip="I'm interested in beta testing!">
                        <i class="material-icons">pets</i></a>
                </li>
            </ul>
        </div> --}}
        <!-- Button trigger modal -->

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</body>

</html>