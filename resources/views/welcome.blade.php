<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    @livewire('sample')

    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit
    </p>
    <div class="container mx-auto">
        <div class="cold-md-6">
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, odit.
            </p>
        </div>
    </div>

    <table>

        <thead>
            <th>

            </th>
        </thead>
        <tbody>

        </tbody>
    </table>
</body>

</html>
