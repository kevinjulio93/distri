<!doctype html>
<html>
    <head>
        <title>@yiel('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    
    
    <body>
        @include('includes.header')
        
        <div class="contenedor">
            @yield('content')

        </div>
    </body>
</html>