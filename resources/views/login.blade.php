<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Signin</title>

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
    <form class="form-signin" action="http://localhost:8000/dash" method="get">
        <img class="mb-4" src="https://cityhausatlanta.com/wp-content/uploads/2017/09/social_webstore-logo-fingerprint-768x953.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 ">secure Fingreprint</h1>
        <h4 class="h4 mb-3 font-weight-normal">please sign in</h4>
        <label for="inputUsername" class="sr-only"  >username</label>
        <input type="name" id="inputUsername" class="form-control"  placeholder="username"  required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" href="/dash" >Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
</div>


</body>
</html>
