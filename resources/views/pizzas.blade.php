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
           
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Pizza List
                </div>
                <!-- @for($i=0 ; $i < count($pizzas) ; $i++)
                    <p>{{ $pizzas[$i]['type'] }}</p>
                @endfor -->

                @foreach($pizzas as $pizza)
                    <div>
                        {{$pizza['type']}} - {{$pizza['base']}}
                    </div>
                @endforeach
                </div>
        </div>
    </body>
</html>