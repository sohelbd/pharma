@extends('admin.admin_layout') 
@section('content')
	
<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Mail Information</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
{!! Form::open(array('url' => '/store_mail_info','files'=>true)) !!}
<table>
	<tr>
		<th>Name</th>
		<td>{!! Form::text('name', '') !!}</td>	
		<th>email</th>
		<td>{!! Form::text('email', '') !!} </td>
		</tr>
	<tr>
		<th>subject</th>
		<td>{!! Form::text('subject', '') !!}</td>
		
	
		<th>Message</th>
		<td>{!! Form::text('msg', '') !!}</td>		
	</tr>
    <tr>
       <td><input class= "btn btn-sm btn-primary" type="submit" value="Save"></td>
    </tr>
</table>

{!! Form::close() !!} 

<table class="table table-border">
	<tr>
	 <th>Name</th>
	 <th>email</th>
	 <th>subject</th>
	 <th>msg</th>
	 <th>action</th>
    </tr>
      
       @forelse($data as $d)
    <tr>
    	<td>{{$d->name}}</td>
    	<td>{{$d->email}}</td>
    	<td>{{$d->subject}}</td>
    	<td>{{$d->msg}}</td>
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
