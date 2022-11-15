<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://cdn.tailwindcss.com"></script>

        <title>{{ config(key: 'app.name') }}</title>
    </head>

    <body class="antialiased" style="background: deeppink;">
        <div class="container mx-auto my-14 py-4">
            {{ $slot }}
        </div>
    </body>
</html>
