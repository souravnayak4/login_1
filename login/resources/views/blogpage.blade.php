<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
  <body>
  <header>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="blog">creat blog</a></li>
      <li><a href="login">login</a></li>
      <li><a href="registration">singup</a></li>
    </ul>
  </div>
</nav>
<h1>Main Page Title</h1>

</header>
 <div class="container">
    <div class="jumbotron">
     <h1>blog page</h1>
         @foreach($blog as $blo)
     <div class="card" style="width: 18rem;">
    <div> <p class="card-text"> </p> </div>
  <img class="card-img-top"  src="{{asset('uploads/blog/' . $blo->image )}}" width="100px;" hight="100px;" alt="Image"> 
  <div class="card-body">
    <h2 class="card-title">{{ $blo->topic }}</h2>
    
    <h5 class="card-text">{{ $blo->created_at }} </h5>

    <a href="/details/{{ $blo->id }}" class="btn btn-primary">read more</a>
    @endforeach
   </div>
    </div>
   </div>
   </body>
</html>



</body>
</html>