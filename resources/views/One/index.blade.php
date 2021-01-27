<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h1><center>User's Phone Number</center></h1>

<table align="center">
  <tr>
    <td>No</td>
    <th>Name</th>
    <th>Phone</th>
  </tr>
@foreach($users as $user)
  <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->phone->phone}}</td>
  </tr>
 @endforeach 
</table>
<a href="{{ url('one/create') }}">Create More..</a>
</body>
</html>
