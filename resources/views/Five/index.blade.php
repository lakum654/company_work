<!DOCTYPE html>
<html>
<head>
<title>Post Comment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
<div class="row">
    <div class="col-6">
        <h3 class="text-center">Text Post Comments</h3>
        <ol class="list-group">
            @foreach($postsText as $text)
            <li class="list-group-item">{{ $text->title }}
            <ul>
                @foreach($text->bothComments as $comment)
                <li>{{  $comment->comment }}</li>
                @endforeach
            </ul>
            </li>
            @endforeach
        </ol>
    </div>
    <div class="col-6">
        <h3 class="text-center">Video Post Comments</h3>
        <ol class="list-group">
            @foreach($postsVideo as $video)
            <li class="list-group-item">{{ $video->video_title }}
            <ul>
                @foreach($video->bothComments as $comment)
                <li>{{  $comment->comment }}</li>
                @endforeach
            </ul>
            </li><br>
            @endforeach
        </ol>
    </div>
</div>
<a href="{{ url('five/create') }}">Add Comment</a>
</div>
</body>
</html>
