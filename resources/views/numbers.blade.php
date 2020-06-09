<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-primo-repo-pagina2</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="css/app.css">

        <script src = "js/app.js" type="text/javascript">

        </script>
    </head>
    <body>

<div id="home">



    <div class="container">
        <div class="row">
            <div class="header">

                    <nav id="barra"  class="navbar navbar-default navbar-fixed-top">

                <p >Header della seconda pagina</p>
            </nav>



            </div>

        </div>
        <div class="row">
            <div class="content">

                 {{-- @include('content')  --}}

            </div>

        </div>
        <div class="row">
            <div class="footer">
                <p>Footer della seconda pagina</p>

            </div>

        </div>

    </div>
</div>
    </body>
</html>
