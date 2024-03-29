<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="text-center">

                    <img src="images/animat-rocket-color.gif" alt="" height="160">

                    <h3 class="mt-4">Stay tunned, we're launching very soon</h3>
                    <p class="text-muted">We're making the system more awesome.</p>

                    <div class="row mt-5 justify-content-center">
                        <div class="col-md-8">
                            <div data-countdown="2019/11/31" class="counter-number"></div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->
                </div>
                <div class="title m-b-md">
                    gaesteservices in coming .....
                </div>


            </div>
        </div>
        <!-- Vendor js -->
        <script src="js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="js/libs/jquery-countdown/jquery.countdown.min.js"></script>

        <!-- Countdown js -->
        <script src="js/pages/coming-soon.init.js"></script>

        <!-- App js -->
        <script src="js/app.min.js"></script>
    </body>
</html>
