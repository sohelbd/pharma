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
{!! Form::open(array('url' => '/store_product_info','files'=>true)) !!}
<table>
	<tr>
		<th>Name</th>
		<td>{!! Form::text('name', '') !!}</td>	
		<th>description</th>
		<td>{!! Form::text('description', '') !!} </td>
		<th>price</th>
		<td>{!! Form::text('price', '') !!}</td>
		
	</tr>
	<tr>
		<th>Photo</th>
		<td>{!! Form::file('photo', NULL) !!}</td>		
		<th>popular</th>
		<td>{!! Form::text('popular', '') !!} </td>
	</tr>
    <tr>
       <td><input class= "btn btn-sm btn-primary" type="submit" value="Save"></td>
    </tr>
</table>

{!! Form::close() !!} 

<table class="table table-border">
	<tr>
	 <th>Name</th>
	 <th>Description</th>
	 <th>Price</th>
	 <th>Photo</th>
	 <th>popular</th>
	 <th>action</th>
    </tr>
       @forelse($data as $d)
    <tr>
    	<td>{{$d->name}}</td>
    	<td>{{$d->description}}</td>
    	<td>{{$d->price}}</td>
    	<td>{{$d->photo}}</td>
    	<td>{{$d->popular}}</td>
    	<td>
    		<a href="{{URL::to('/edit_product',['id' => $d->id])}}" class="btn btn-sm btn-primary">Edit</a>

    		<form action="{{URL::to('/delete_product',['id' => $d->id])}}" method="post"> 
    		<input class="btn btn-sm btn-success" onclick= "return confirm('are you sure you want to delete')" type="submit" value="Delete"/>
    		@method('delete')
    		@csrf
    	</form>
    	</td>
    	
    </tr>
    @empty
      <tr>
    	<td>no item !!</td>
      </tr>
    @endforelse

</table>

</div>
</div>


@endsection

