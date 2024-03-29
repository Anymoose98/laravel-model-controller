<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/js/app.js')
    </head>

    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center d-flex justify-content-center mt-3">
                        <div class="background-movie">
                            <h1>MOVIE</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <div class="background-movie">
                            <h1>Footer</h1>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>