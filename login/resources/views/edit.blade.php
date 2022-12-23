<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        
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
                        <a class="nav-link" href="blog">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

     <div class="container">
        <h1>update</h1>
        <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}

        <div class="form-group">
            <label>Topic</label>
            <input type="text" name="topic" value="{{$blog->topic}}" class="form-control" placeholder="Enter Topic">
        </div>

        <div class="form-group">
            <label>Subtopic</label>
            <input type="text" name="subtopic" value="{{$blog->subtopic}}" class="form-control" placeholder="Enter Subtopic">
        </div>

       
        <button type="submit" name="submit" class="btn btn-primary">save</button>

        </form>

        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script> {!! Toastr::message() !!)
            
     </div>
    </body>
</html>