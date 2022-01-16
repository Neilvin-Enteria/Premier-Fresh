<x-app-layout>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Premier Fresh</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="{{asset('images/app/PF.png')}}" type="image/x-icon">
    </head>
    <body>

        @yield('nav')
        
        @yield('footer')
    
    </body>
    </html>
    
</x-app-layout>
