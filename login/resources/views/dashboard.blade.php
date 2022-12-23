<!DOCTYPE html>
<html>
<head>
    <title> Login and Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: red;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">home</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href="blogdashboard">blog</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="blog"> add blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container"><br/><br/>
    <div class="row">
    <p><h3>Hello :  {{ Auth::user()->name }} </h3> </p>
    </div>
    </div>
    @yield('content')


   <div>  <a href="blog"> creat your blog</a> </div>











</body>
</html>