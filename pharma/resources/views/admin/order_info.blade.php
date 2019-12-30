@extends('admin.admin_layout') 
@section('content')
	
<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Customer Order Information</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">

<table class="table table-border">
	<tr>
	 <th>SL</th>
	 <th>Name</th>
	 <th>email</th>
	 <th>phone</th>
	 <th>address</th>
	 <th>productName</th>
	 <th>qty</th>
	 <th>subTotal</th>
	 <th>tax</th>
	 <th>total</th>
	 <th>action</th>
    </tr>
      
       @forelse($data as $d)
    <tr>
    	<td>{{$d->id}}</td>
    	<td>{{$d->name}}</td>
    	<td>{{$d->email}}</td>
    	<td>{{$d->phone}}</td>
    	<td>{{$d->address}}</td>
    	<td>{{$d->productName}}</td>
    	<td>{{$d->qty}}</td>
    	<td>{{$d->subTotal}}</td>
    	<td>{{$d->tax}}</td>
    	<td>{{$d->total}}</td>  	
    	<td>

    		<a href="{{URL::to('/edit_mail',['id' => $d->id])}}" class="btn btn-sm btn-primary">Edit</a>

    	<form action="{{URL::to('/delete_mail',['id' => $d->id])}}" method="post"> 
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
