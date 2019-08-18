<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Book Store</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light px-0">
                    <a class="navbar-brand" href="#">BookStore</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link pr-0" href="#">Login</a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="container mb-5">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-4 mb-4 mb-md-0">
                        <img class="w-100" src="{{ url('/images/book-example-1.jpg') }}" alt="">
                    </div>
                    <div class="col-12 col-md-8 d-md-flex flex-md-column">
                        <div>
                            <h1 class="display-4 font-weight-bold">Pride and Prejudice</h1>
                            <p class="display-4">Jane Austen</p>
                            <hr class="my-4">
                            <h4 class="d-inline">
                                <span class="badge badge-light">
                                    <a href="#" class="text-dark">Classic</a>
                                </span>
                            </h4>
                            <h4 class="d-inline">
                                <span class="badge badge-light">
                                    <a href="#" class="text-dark">Romance</a>
                                </span>
                            </h4>
                        </div>
                        <a class="btn btn-primary btn-lg mt-4 mt-lg-auto mr-auto rounded-pill" href="#" role="button">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <h2>Latest Books</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3">
                    <div>
                        <img src="{{ url('/images/book-example-2.jpg') }}" class="w-100 mb-3">
                        <h5 class="mb-0">All Ask Again, Yes</h5>
                        <p class="text-muted">Mary Beth Keane</p>
                        <hr>
                        <a href="#" class="btn btn-link btn-sm font-weight-bold px-0">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <footer class="pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-4 bg-dark text-white text-center">
                        &copy; Book Store
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
