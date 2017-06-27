<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Route List</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>
    <!-- Custom CSS -->
    <style>
        body {
            font-size: 14px;
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">RouteList</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Routes</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">


        <div class="row">

            <div class="col-md-6">

                <select name="" id="">
                    <option value="">Method</option>
                    <option value="">URI</option>
                    <option value="">Name</option>
                    <option value="">Action</option>
                    <option value="">Middleware</option>
                </select>

                <input type="text" placeholder="Search">
            </div>
        </div>

        <div class="row">

            
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Method</th>
                        <th>URI</th>
                        <th>Name</th>
                        <th>Action</th>
                        <th>Middleware</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($routes as $route)
                        <tr>
                            <td>{{  $route->method  }}</td>
                            <td>{{ $route->uri  }}</td>
                            <td>{{ $route->name }}</td>
                            <td>{{ $route->action }}</td>
                            <td>{{ $route->middleware }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div>
</body>
</html>