<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Livewire</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
<div class="flex">
    <div class="w-2/4">
        <livewire:users-list/>
    </div>
    <div class="w-2/4">
        <livewire:clicker/>
    </div>
</div>
</body>
</html>
