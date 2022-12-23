<h1>upload</h1>
<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
  <input type="file" name="file" ><br><br><br>
    <button type="submit">upload</button>

</form>