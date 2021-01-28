<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
	@foreach($posts as $post)
    <div class="container">
                <div class="row comment-box p-1 pt-3 pr-4">
                  <div class="col-lg-10 col-9 user-comment bg-light rounded pb-1">
                  <div class="row">
                         <div class="col-lg-8 col-6 border-bottom pr-0">
                            <p class="w-100 p-2 m-0">{{  $post->title  }}</p>
                         </div>
                         <div class="col-lg-4 col-6 border-bottom">
                            <p class="w-100 p-2 m-0"><span class="float-right"><i class="fa fa-clock-o mr-1" aria-hidden="true"></i>01 : 00</span></p>
                         </div>
                       </div>  
                  </div>
                </div>
            </li>
			<hr>
			<form action="{{ url('two/store') }}" method="post">
				@csrf
            <div class="row">
              <div class="col-lg-10 col-10">
				<input type="hidden" name="id" value="{{  $post->id }}">
                <input type="text" class="form-control" placeholder="write comments ..." name="comment">
              </div>
              <div class="col-lg-2 col-2 send-icon">
                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			  </div>
			</div>
          </ul>
	  </div>
	</div>
</form>
	@endforeach
</body>
</html>