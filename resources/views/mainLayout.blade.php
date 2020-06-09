<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-primo-repo-pagina1</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="css/app.css">

        <script src = "js/app.js" type="text/javascript">

        </script>
    </head>
    <body>






<div id="home">

                <nav id="barra"  class="navbar navbar-default navbar-fixed-top">

            @yield("content")

            </nav>

        <div class="row">
            <div class="content">

                <p>
                    hola amigos
                </p>




            </div>

        </div>
        <div class="row">
            <div class="footer">
                <p>Footer della prima pagina</p>

                @yield("babuiu")

            </div>

        </div>

    </div>
</div>
    </body>
</html>
