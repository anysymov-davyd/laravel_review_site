<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body class="bg-dark text-light">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm text-white">
            <h5 class="my-0 mr-md-auto font-weight-normal">Special Lists</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-white" href="/">Главная</a>
                <a class="p-2 text-white" href="/about">Про страницу</a>
            </nav>
            <a class="btn btn-outline-success" href="/review">Оставить отзыв</a>
        </div>
        @yield('main_content')
    </body>
</html>