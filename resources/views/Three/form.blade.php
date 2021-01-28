<!DOCTYPE html>
<html>
<head>
<title>Post Comment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<h2 class="text-center">Attach Users Roles</h2>
<div class="container w-50">
<form action="{{ url('three/store') }}" method="post">
@csrf
 <select name="user" class="form-control-sm custome-select">
     <option>Select User</option>
     @foreach($users as $user)
     <option value="{{ $user->id }}">{{  $user->name }}</option>
     @endforeach
 </select><br><br>
 <div class="row">
 @foreach($roles as $role)
 <div class="col-sm-6">
 <input type="checkbox" name="roles[]" value="{{ $role->id }}"> {{ $role->name }}
</div>
 @endforeach
</div>
<input type="submit" value="Attach" class="btn btn-success">
</form>
</div>  
</body>
</html>
