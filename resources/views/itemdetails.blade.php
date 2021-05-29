@extends("theme1")
@section("content")
</div>
</div>
<br><br><br><Br>
<div class="row">
<div class="text-center">
<h4>SUBCATEGORY DETAILS</h4>
</div>
</div>
<br><br>
<div class="row">

<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
</div>

<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

<form action="/itemread" method="post">
{{ csrf_field() }}
<table class="table">
<tr>
    <td>category</td>
    <td><input name="categoryname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>subcategory</td>
    <td><input name="subcategory" type="text" class="form-control"></td>
</tr>
<tr>
    <td>item</td>
    <td><input name="item" type="text" class="form-control"></td>
</tr>
<tr>
    <td>autor</td>
    <td><input name="autor" type="text" class="form-control"></td>
</tr>
<tr>
    <td>description</td>
    <td><input name="description" type="text" class="form-control"></td>
</tr>
<tr>
    <td>rate</td>
    <td><input name="rate" type="text" class="form-control"></td>
</tr>
<tr>
    <td>quality</td>
    <td><input name="quality" type="text" class="form-control"></td>
</tr>
<tr>
    <td><label for="formFile" class="form-label">Image</label></td>
    <td><input name="image" class="form-control" type="file"></td>
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