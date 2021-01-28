<html>
<table align="center" border="1">
<form action="{{ url('one/store') }}" method="POST">
@csrf
<tr>
    <td>Name</td>
    <td><input type="text" name="name"></td>
</tr>
<tr>
<td>Phone</td>
    <td><input type="text" name="phone"></td>
</tr>
<tr>
<td colspan="1"></td>
<td><input type="submit" value="create">
</tr>
</table>
<html>