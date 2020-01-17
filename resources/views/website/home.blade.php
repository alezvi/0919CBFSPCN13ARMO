<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style type="text/css" rel="stylesheet">
        .hidden {
            display: none;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <form id="js-products-search" action="/" method="get">
                    <div class="form-group">
                        <label for="">Precio desde</label>
                        <input type="text" class="form-control" name="price_min">
                    </div>
                    <div class="form-group">
                        <label for="">Precio hasta</label>
                        <input type="text" class="form-control" name="price_max">
                    </div>
                    <div class="form-group">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <button class="btn btn-primary" id="js-fetch-products">Cargar Productos</button>
                </form>
            </div>

            <div class="col-9">
                <img id="js-spinner" src="{{ asset('images/spinner.gif') }}" alt="spinner" class="hidden">

                <div id="js-ajax-products-list"></div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>