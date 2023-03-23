<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

      
    </head>
    <body>
   <h1>Hello! This is testing: {{$posts}} </h1>
   <p>{{dd($cookies)}} </p>
   <p>{{dd($_COOKIE)}} </p>
    </body>
</html>
