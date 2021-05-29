@extends("theme1")
@section("content")
</div>
<div class="row">
<div class="text-center">
<h4>Category</h4>
</div>
</div>

<div class="row">
<center><div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<table>
        <tr>
            <td></td>
            
        </tr>

        @foreach($category as $category)
        
        <tr>
          <td>{{ $category->categoryname }} </td>

          <td><a class="btn btn-warning" href="/category/{{$category->id}}/edit">EDIT</a></td>
            
        </tr>
        @endforeach
        </table>
      </div></center>
</div>
			







</div>
    





@endsection