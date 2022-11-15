<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto asperiores beatae
            culpa, distinctio doloribus earum enim id molestias nostrum officia porro qui quia sint tempora totam ullam
            voluptates voluptatibus.
        </div>
        <div class="col">Ad aliquid asperiores corporis dolorum ea, eos error esse hic laborum nihil nisi nobis, quam
            quod recusandae rerum sequi temporibus ullam voluptate? Commodi eius est ipsa iusto, laborum provident
            voluptas!
        </div>
        <div class="col">Ad amet aut debitis dolores eligendi esse illo laborum laudantium nobis, nostrum odio suscipit?
            A, adipisci architecto cupiditate earum eveniet id iure magnam nesciunt porro quam quia quo soluta
            veritatis!
        </div>
    </div>
</div>
</body>
</html>
