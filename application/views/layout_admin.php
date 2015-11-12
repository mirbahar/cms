<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CMS</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/css/app.css" rel="stylesheet" />

    <script src="/assets/js/jquery-1.11.3.min.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/Shopping/index">Home</a>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/Products/save">Product Add</a></li>
                        <li><a href="/Products/index">Product List</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Order List <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/Orders/index">Order List</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/Categories/save">Category Add</a></li>
                        <li><a href="/Categories/index">Category List</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/auth/create_user">User Add</a></li>
                        <li><a href="/auth/create_group">Group Add</a></li>
                        <li><a href="/auth/index">User List</a></li>
                    </ul>
                </li>
            </ul>


        </div>

    </div>
</nav>

<div style="clear:both"></div>
<div class="jumbotron"></div>
<div class="page-container">
    <div class="row">
        <div class="col-md-12">
            <?php echo $content_for_layout; ?>
        </div>
    </div>
</div>

</body>
</html>
