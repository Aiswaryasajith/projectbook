@extends("theme1")
@section("content")
</div>
</div>
<br><br><br><br>
<div class="row">
<div class="text-center">
<h4>SUBCATEGORY DETAILS</h4>
</div>
</div>
<br><br><br><br>
<div class="row">
<br><br><br><br>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
</div>

<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

<form action="/subcategoryread" method="post">
{{ csrf_field() }}
<table class="table">
<tr>
    <td><h5>category</h5></td>
    <td><input name="categoryname" type="text" class="form-control"></td>
</tr>
<tr>
    <td><h5>subcategory</h5></td>
    <td><input name="subcategory" type="text" class="form-control"></td>
</tr>
<tr>
    <td><button class="btn btn-secondary">SUBMIT</button></td>
</tr>
</table>
</form>
 
  
</div>

<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

</div>
</div>














@endsection