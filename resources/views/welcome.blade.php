<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" >
        <script src="https://cdn.tailwindcss.com"></script>
        <title>light</title>

        @livewireStyles
    </head>
    <body>
            <div class="min-h-screen flex flex-col justify-center items-center">

                <div >
                    <h1 class="text-4xl font-black text-gray-900 dark:text-white">light</h1>
                </div>

                @livewire('light')

                
            </div>

            @livewireScripts
    </body>
</html>
