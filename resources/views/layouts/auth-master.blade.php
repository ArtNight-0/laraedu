<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    {{-- font awesome --}}
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    {{-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> --}}

    <link
        rel="stylesheet"
        href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}"
    />
    <link rel="stylesheet" href="{!! url('assets/css/signin.css') !!}" />
    <body class="text-center">
        <main class="form-signin">@yield('content')</main>
    </body>
</html>
