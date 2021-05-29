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
<form action="/categoryeditprocess/{{ $category->id }}" method="post">
{{ csrf_field() }}
<table class="table">
<tr>
    <td>category</td>
    <td><input value="{{ $category->categoryname }}" name="categoryname" type="text" class="form-control"></td>
</tr>
<tr>
    <td><button class="btn btn-secondary">SUBMIT</button></td>
</tr>
</table>
</form>
</div></center>

</div>

@endsection