<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
            @extends('layouts.master')

            @section('title','Hello')

            @section('content')
            <h1>This is {{$name}}'s home.</h1>
            @endsection
    </body>
</html>
