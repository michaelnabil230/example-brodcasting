<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="antialiased">
    javascript
</body>
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>
<script type="module">
    import Echo from 'https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.11.7/echo.js';
    window.Echo = new Echo({
        broadcaster: 'socket.io',
        client: io,
        host: window.location.hostname + ':6001',
    });

    window.Echo.channel("my-channel")
        .listen('.event', (e) => {
            console.log(e);
        });
</script>

</html>
