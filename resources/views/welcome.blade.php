<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>iPhone School</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div id="app">
            <post-component/>
        </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        Vue.component("modal", {
        template: "#modal-template"
      });
     </script>
    </body>
</html>
