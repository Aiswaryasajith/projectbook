@extends("theme")

@section("content")



<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">NEW CUSTOMERS</h5>
    <p class="card-text">By creating an account with our store. You will be able to move through the checkout process faster. Store multiple shipping addresss,view and track your orders in your account and more.</p>
    <a href="/registration" class="btn btn-primary">CREATE AN ACCOUNT</a>
  </div>
</div>
</div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<div class="card border-light mb-3" style="max-width: 18rem;">
  
  <div class="card-body">
    <h5 class="card-title">REGISRERED CUSTOMERS</h5>
    <p class="card-text">If you have an account with us, Please LOGIN</p>
  </div>
</div>
<form action="/loginread" method="post" >
{{ csrf_field() }}
<table class="table">
<tr>
    <td>EMAIL</td>
    <td><input name="lemail" type="text" class="form-control" placeholder="name@gmail.com"></td>
</tr>

<tr>
    <td>PASSWORD</td>
    <td><input type="password" name="lpassword" type="text" class="form-control" placeholder="Password" requied></td>
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
</div> 

@endsection
