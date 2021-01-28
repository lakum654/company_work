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
<form action="{{ url('three/update') }}" method="post">
@csrf
 <select name="user" class="form-control-sm custome-select">
     <option>Select User</option>
     @foreach($users as $value)
     @if($value->id == $user->id)
     <option value="{{ $value->id }}" selected>{{  $value->name }}</option>
     @endif
     <option value="{{ $value->id }}">{{  $value->name }}</option>
     @endforeach
 </select><br><br>
 <div class="row">
@php $arrayRoles = $user->roles->pluck('id') @endphp    
 @foreach($roles as $role)
 <div class="col-sm-6">
    <input type="checkbox" {{ in_array($role->id,$arrayRoles->toArray()) ? 'checked' : '' }} name="role[]" value="{{ $role->id }}" class="custome-control"> {{ $role->name }}
</div>
 @endforeach
</div><br><br>
<input type="submit" value="Update" class="btn btn-success">
</form>
</div>  
</body>
</html>
