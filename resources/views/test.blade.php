<!doctype html>
<html lang="en">
<head>
    <title>Signin</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <style>
        form {margin-top:12em ; margin-left:25em;margin-right:25em; background-color: white;
        }
        body{background:url("https://www.itl.cat/pngfile/big/50-508803_human-resource-hr-wallpaper-hd.png") ;
            background-size: cover }
        h1 {margin-top:-1em}

    </style>

</head>

<body class="text-center">
<div class="container">

    <form method="get" action="/dash" >

        <img class="mb-4" src="https://cityhausatlanta.com/wp-content/uploads/2017/09/social_webstore-logo-fingerprint-768x953.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 ">secure Fingreprint</h1>
        <h4 class="h4 mb-3 font-weight-normal">please sign in</h4>
        <label for="inputEmile" class="sr-only"  >Email</label>
        <input type="email" name="email" class="form-control"  placeholder="email"  required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">

        </div>
        <input type="submit" name="login" class="btn btn-primary" value="Login" />
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
</div>


</body>
</html>
