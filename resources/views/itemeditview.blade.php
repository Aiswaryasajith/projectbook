@extends("theme1")
@section("content")
</div>
</div>
<br><br><br><br>
<div class="row">
<div class="text-center">
<h4>CATEGORY DETAILS</h4>
</div>
</div>
<br><br><br><br>

<center><div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<form action="/itemeditprocess/{{ $item->id }}" method="post">
{{ csrf_field() }}
<table class="table">
<tr>
    <td>category</td>
    <td><input value="{{ $item->categoryname }}" name="categoryname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Subcategory</td>
    <td><input value="{{ $item->subcategory }}" name="subcategory" type="text" class="form-control"></td>
</tr>
<tr>
    <td>item</td>
    <td><input value="{{ $item->item }}" name="item" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Autor</td>
    <td><input value="{{ $item->autor }}" name="autor" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Description</td>
    <td><input value="{{ $item->description }}" name="description" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Rate</td>
    <td><input value="{{ $item->rate }}" name="rate" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Quality</td>
    <td><input value="{{ $item->quality }}" name="quality" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Image</td>
    <td><input value="{{ $item->image }}" name="image" type="text" class="form-control"></td>
</tr>
<tr>
    <td><button class="btn btn-secondary">SUBMIT</button></td>
</tr>
</table>
</form>
</div></center>

</div>

@endsection