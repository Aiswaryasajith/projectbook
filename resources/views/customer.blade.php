@extends("theme1")
@section("content")
</div>
<br><br>
<div class="row">
<div class="text-center">
<h4>CUSTOMER DETAILS</h4>
</div>
</div>

<div class="row">
				<table style="position:relative;width:1375px;left:70px;top:50px;">
						<tr>
							<th> First Name</th>
                            <th>Last Name</th>
							<th>House Name</th>
							<th>Street</th>
                            <th>City</th>
                            <th>State</th>
							<th>phone No</th>
                            <th>Email</th>
                            <th>Password</th>
							<th>Confirm Password</th>
							
							
							
						</tr>
		@foreach($customer as $customer)
        
        <tr>
            <td>{{ $customer->fname }} </td>
  
            <td>{{ $customer->lname }} </td>
            <td>{{ $customer->housename }} </td>
            <td>{{ $customer->street }} </td>
            <td>{{ $customer->city }} </td>
            <td>{{ $customer->state }} </td>
            <td>{{ $customer->phno }} </td>
            <td>{{ $customer->lemail }} </td>
			<td>{{ $customer->lpassword }} </td>
			<td>{{ $customer->lcpassword }} </td>
            
        </tr>
        @endforeach
					

         

         

        </table>
</div>







@endsection