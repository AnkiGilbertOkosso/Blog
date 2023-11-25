<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <!-- Default bootstrap navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Laravel Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact us</a>
                    </li>
                </ul>
                <li class="nav-item dropdown list-unstyled">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">My Account</a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </div>
        </div>
    </nav>
    <!-- end of Default bootstrap navbar -->
    <!-- header container starts -->
    <div class="container">
        <!-- header row start   -->
        <div class="row"> 
            <div class="col-md-12 text-center py-5">
                <div class="display-4">
                    <h1>Welcome to my blog!</h1>
                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos aut ex ullam neque assumenda, recusandae odit velit, suscipit excepturi soluta a eius inventore debitis in corrupti. Architecto qui quisquam illum.</p>
                    <p><a href="#" class="btn btn-primary btn-lg" role="button">Popular post</a></p>
                </div>
            </div>
        </div>
        <!-- header row ends   -->
        <div class="row g-5">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente fugiat debitis odio dolor
                        e dolores reiciendis voluptatibus excepturi possimus quo tempora, tempore nostrum nesciunt veniam voluptate? Dolore molestias odit autem a? ...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente fugiat debitis odio dolor
                        e dolores reiciendis voluptatibus excepturi possimus quo tempora, tempore nostrum nesciunt veniam voluptate? Dolore molestias odit autem a? ...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente fugiat debitis odio dolor
                        e dolores reiciendis voluptatibus excepturi possimus quo tempora, tempore nostrum nesciunt veniam voluptate? Dolore molestias odit autem a? ...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>

                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente fugiat debitis odio dolor
                        e dolores reiciendis voluptatibus excepturi possimus quo tempora, tempore nostrum nesciunt veniam voluptate? Dolore molestias odit autem a? ...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            
            </div>

            <div class="col-md-3">
                <h2>SideBar</h2>
            </div>
        </div>
    </div>
    <!-- header container ends -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>