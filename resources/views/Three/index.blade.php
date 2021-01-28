<!DOCTYPE html>
<html>
<head>
<title>Post Comment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <h2 class="text-center">Users Roles</h2>
<div class="container">
<a href="{{ url('three/create') }}" class="btn btn-success btn-sm mb-1  ">Create</a>    
<ol class="list-group">
  @foreach($users as $user)
  <li class="list-group-item">{{  $user->name }}<a href="{{ url('three/'.$user->id.'/edit') }}" class="float-right">Update Role</a>    
    <ul>
      @foreach($user->roles as $role)
        <li>{{  $role->name }} <a href="{{ url('three/delete/'.$role->id.'/'.$user->id) }}" class="float-right">Delete</a></li>
      @endforeach
    </ul>
  </li><br>
  @endforeach
</ol>
</div>  
</body>
</html>
