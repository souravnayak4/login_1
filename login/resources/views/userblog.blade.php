<div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="blog">creat blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

     <div class="container">
        <h1>myblog</h1>
        <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field()}}

        <div class="form-group">
            <label>Topic</label>
            <input type="text" name="topic" class="form-control" placeholder="Enter Topic">
        </div>

        <div class="form-group">
            <label>Subtopic</label>
            <input type="text" name="subtopic" class="form-control" placeholder="Enter Subtopic">
        </div>

        <div class="input-group">
          <div class="customfile-file">
             <input type="file" name="image" class="custom-file-input">
             <label class ="custom-file-label">upload</label>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">save</button>

        </form>
     </div>