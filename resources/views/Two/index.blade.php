<!DOCTYPE html>
<html>
<head>
<title>Post Comment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<h1><center>Added Comment On Post</center></h1>
<ol>
@foreach($posts as $post)
 <li>{{ $post->title }}
    @foreach($post->comments as $comment)
        <ul>{{ $comment->comment }}</ul>
    @endforeach
</li>
@endforeach
<ol>
</table>
<a href="{{ url('two/create') }}">Add Comment..</a>
</body>
</html>
