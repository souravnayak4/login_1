
 <!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>


    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: yellow;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="dashboard">home</a>
            
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
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">topic</th>
      <th scope="col">subtopic</th>
      <th scope="col">Handle</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach($blog as $blo)
    <tr>
      <th scope="row">{{ $blo->id }}</th>
      <td>{{ $blo->topic }}</td>
      <td>{{ $blo->subtopic }}</td>
      <td>{{ $blo->created_at }}</td>
   <td> <a href="/edit/{{ $blo->id }}" type="button"  class="btn btn-primary">edit</a></td>    
    </tr>
    @endforeach

    
   
    
  </tbody>
</table>