<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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
           <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

               <p>{{$name}} -- {{$id}}</p>
               <p>{{$obj-> name}} -- {{$obj->id}}</p>

               @if($obj->name=='Ahmed Ouf')
                    <p>Yes I'm Ahmed Ouf</p>
               @else
                   <p>No I'm not Ahmed Ouf</p>

               @endif

               @foreach($obj as $_obj)
                   <p>{{$_obj}}</p>
               @endforeach

               {{--@forelse($test5 as $_test5)
                   <p>{{$_test5}}</p>
               @empty
                   <p>Array is Empty</p>
               @endforelse--}}


               {{--@if($obj->name=='Ahmed Ouf')
                   <p>Yes I'm Ahmed Ouf</p>
               @elseif($obj->name=='Ahmed Ouf')
                   <p></p>
               @elseif($obj->name=='Ahmed Ouf')
                   <p></p>
               @elseif($obj->name=='Ahmed Ouf')
                    <p></p>
               @else
                   <p></p>
               @endif--}}


           </div>
        </div>
    </body>
</html>
