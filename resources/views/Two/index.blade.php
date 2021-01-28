<!DOCTYPE html>
<html>
<head>
<title>Post Comment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <h2 class="text-center">Posts Comments</h2>
<div class="container">
<ol class="list-group">
  @foreach($posts as $post)
  <li class="list-group-item">{{  $post->title }}
    <ul>
      @foreach($post->comments as $comment)
        <li>{{  $comment->comment }}</li>
      @endforeach
    </ul>
  </li><br>
  @endforeach
</ol>
</div>  
</body>
</html>
