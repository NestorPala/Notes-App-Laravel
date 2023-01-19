<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel React</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div id="react-app"></div>
    <div id="api-url" hidden>{{ 'http:' . route('notes.index') }}</div>
</body>
</html>
