@extends('admin.admin_layout') 
@section('content')
	
<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
{!! Form::open(array('url' => '/update_product_info','files'=>true)) !!}
<table>
	<tr><td>{!! Form::hidden('id', $data->id) !!}</td></tr>
	<tr>
      
		<th>Name</th>			
		<td>{!! Form::text('name', $data->name) !!}</td>	
		<th>description</th>
		<td>{!! Form::text('description', $data->description) !!} </td>
		<th>price</th>
		<td>{!! Form::text('price', $data->price) !!}</td>
		
	</tr>
	<tr>
		<th>Photo</th>
		<td>{!! Form::file('photo', NULL) !!}</td>		
		<th>popular</th>
		<td>{!! Form::text('popular', $data->popular) !!} </td>
	</tr>
    <tr>
       <td><input class= "btn btn-sm btn-primary" type="submit" value="Save"></td>
    </tr>
    
</table>

{!! Form::close() !!} 



</div>
</div>


@endsection

