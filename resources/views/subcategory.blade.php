@extends("theme1")
@section("content")
</div>
<br><br><br><br>
<div class="row">
<div class="text-center">
<h4>CUSTOMER DETAILS</h4>
</div>
</div>

<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    <center><table style="position:relative;width:500px;left:50px;top:50px;">>
      <tr>
            <th><h4>category</h4></td>
          
            <th><h4>Subcategory</h4></td>
            
      </tr>

        @foreach($subcategory as $subcategory)
        
        <tr>
            <td>{{ $subcategory->categoryname }} </td>
  
            <td>{{ $subcategory->subcategory }} </td>

            <td><a class="btn btn-warning" href="/subcategory/{{$subcategory->id}}/edit">EDIT</a></td>
            
        </tr>
        @endforeach
    </table></center>
      </div>
</div>
			







@endsection