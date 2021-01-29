<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>	
<div class="container">
<div class="row">
  @foreach($postsText as $value) 
  <div class="col-6">
    <h4>Add Tag</h4>
    <form action="{{ url('six/store1') }}" method="post">
      @csrf
    <div class="post p-3 bg-light">
      {{  $value->title }}
      <input type="hidden" name="id" value="{{  $value->id }}">
      <input type="text" name="tag" placeholder="Add Tag.." class="form-control w-50">
      <button class="btn btn-success m-2" type="submit">Send</button>
    </form>
    </div>
  </div>
  @endforeach
  
  @foreach($postsVideo as $value) 
  <div class="col-6">
    <h4>Video Tag</h4>
    <form action="{{ url('six/store2') }}" method="post">
      @csrf
    <div class="post p-3 bg-light">
      {{  $value->video_title }}<br>
       <input type="hidden" name="id" value="{{  $value->id }}">
      <input type="text" name="tag" placeholder="Add Tag.." class="form-control w-75">
      <button class="btn btn-success mt-2" type="submit">Send</button></form>
    </div>
  </div>
  @endforeach
</div>
</div>
</body>
</html>