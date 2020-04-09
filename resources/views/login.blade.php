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
            .input-div {
                line-height: 2.5;
            }
            .form-container {
                border-bottom: 2px solid #eee;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    pizzas
                </div>
               <!--  @for($i=0; $i<5; $i++)
                    <p>the value is {{$i}} </p>
                @endfor -->
                <p>{{$name}}</p>
                <p>{{$base}}</p>
                @if($price>15)
                    <p>less than</p>
                @endif
               <!--  <div class="form-container">
                    <form>
                        <div class="input-div">
                            <input type="email" name="email" placeholder="Email" />
                        </div>
                        <div class="input-div">
                            <input type="password" name="password" placeholder="Password" />
                        </div>
                        <button type="submit">Login</button>
                    </form>
                </div> -->
            </div>
        </div>
    </body>
</html>
