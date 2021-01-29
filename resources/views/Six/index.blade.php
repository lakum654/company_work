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
        <h3 class="text-center">Text Post Tags</h3>
        <ol class="list-group">
            @foreach($postsText as $text)
            <li class="list-group-item">{{ $text->title }}
            <ul>
                @foreach($text->tags as $tag)
                <div class="badge badge-info">{{  $tag->name }}</div>
                @endforeach
            </ul>
            </li><br>
            @endforeach
        </ol>
    </div>
    <div class="col-6">
        <h3 class="text-center">Video Post tags</h3>
        <ol class="list-group">
            @foreach($postsVideo as $video)
            <li class="list-group-item">{{ $video->video_title }}
            <ul>
                @foreach($video->tags as $tag)
                <div class="badge badge-success">{{  $tag->name }}</div>
                @endforeach
            </ul>
            </li><br>
            @endforeach
        </ol>
    </div>
</div>
<a href="{{ url('six/create') }}">Add tag</a>
</div>
</body>
</html>
