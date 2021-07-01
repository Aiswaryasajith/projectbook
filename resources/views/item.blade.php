@extends("theme1")
@section("content")
</div>
<br><br><br><br>
<div class="row">
<div class="text-center">
<h4>ITEM DETAILS</h4>
</div>
</div>

<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    <center><table style="position:relative;width:1000px;left:50px;top:50px;">>
      <tr>
            <th><h4>Category</h4></td>
          
            <th><h4>Subcategory</h4></td>
            
            <th><h4>Item</h4></td>
            <th><h4>Autor</h4></td>
            <th><h4>Description</h4></td>
            <th><h4>Rate</h4></td>
            <th><h4>Quality</h4></td>
            <th><h4>Image</h4></td>


            
      </tr>

        @foreach($item as $item)
        
        <tr>
            <td>{{ $item->categoryname }} </td>
  
            <td>{{ $item->subcategory }} </td>
            <td>{{ $item->item }} </td>
            <td>{{ $item->autor }} </td>
            <td>{{ $item->description }} </td>
            <td>{{ $item->rate }} </td>
            <td>{{ $item->Quality }} </td>
            <td>{{ $item->image }} </td>
            <td><a class="btn btn-warning" href="/item/{{$item->id}}/edit">EDIT</a></td>
            
        </tr>
        @endforeach
    </table></center>
      </div>
</div>
			







@endsection