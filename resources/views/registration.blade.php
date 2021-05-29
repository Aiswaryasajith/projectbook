@extends("theme")
@section("content")


<form action="/customerread" method="post" >
{{ csrf_field() }}
<a class="succcess">REGISTRATION INFORMATION</a>
<table class="table">
<tr>
    <td>FIRST NAME</td>
    <td><input name="fname" type="text" class="form-control" placeholder="First Name"></td>
</tr>
<tr>
    <td>LAST NAME</td>
    <td><input name="lname" type="text" class="form-control" placeholder="Last Name"></td>
</tr>
<tr>
    <td>HOUSE NAME</td>
    <td><input name="housename" type="text" class="form-control" placeholder="House Name"></td>
</tr>
<tr>
    <td>STREET</td>
    <td><input name="street" type="text" class="form-control" placeholder="Street"></td>
</tr>
<tr>
    <td>CITY</td>
    <td><input name="city" type="text" class="form-control" placeholder="City"></td>
</tr>
<tr>
    <td>STATE</td>
    <td><input name="state" type="text" class="form-control" placeholder="State"></td>
</tr>
<tr>
    <td>PHONE NO</td>
    <td><input name="phno" type="text" class="form-control" placeholder="Phone no"></td>
</tr>
<tr>
    <td>EMAIL</td>
    <td><input name="lemail" type="text" class="form-control" placeholder="name@gmail.com"></td>
</tr>
<tr>
    <td>PASSWORD</td>
    <td><input type="password" name="lpassword" type="text" class="form-control" placeholder="Password"></td>
</tr>
<tr>
    <td>CONFIRM PASSWORD</td>
    <td><input type="password" name="lcpassword" type="text" class="form-control" placeholder="Confirm Password"></td>
</tr>

<tr>
    <td><button class="btn btn-secondary">SUBMIT</button></td>
</tr>
</table>
</form>

@endsection