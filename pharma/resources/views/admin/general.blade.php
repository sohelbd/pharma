@extends('admin.admin_layout') 
@section('content')
	
<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>General information</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
{!! Form::open(array('url' => '/storee','files'=>true)) !!}
<table>
	<tr>
		<th>Name</th>
		<td>{!! Form::text('name', '') !!}</td>	
		<th>Logo</th>
		<td>{!! Form::file('logo', NULL) !!}</td>
		<th>Address</th>
		<td>{!! Form::text('address', '') !!} </td>
	</tr>
	<tr>
		<th>Email</th>
		<td>{!! Form::text('email', '') !!}</td>	
		<th>Phone</th>
		<td>{!! Form::text('phone', '') !!} </td>
	</tr>
	<tr>
		<th>Slide</th>
		<td>{!! Form::file('slider_photo', NULL) !!}</td>	
		<th>Heading</th>
		<td>{!! Form::text('heading', '') !!}</td>	
	</tr>
	<tr>	
		<th>SubHeading</th>
		<td>{!! Form::text('sub_heading', '') !!}</td>
		<th>F_heading</th>
		<td>{!! Form::text('fi_block_heading', '') !!} </td>
	</tr>
	<tr>
			
		<th>s_b_heading</th>
		<td>{!! Form::text('s_block_heading', '') !!}</td>
	</tr>
	<tr>	
		<th>T_b_heading</th>
		<td>{!! Form::text('t_block_heading', '') !!} </td>	
		<th>fi_block_data</th>
		<td>{!! Form::text('fi_block_data', '') !!}</td>
	</tr>
	<tr>		
		<th>s_block_data</th>
		<td>{!! Form::text('s_block_data', '') !!}</td>
		<th>t_block_data</th>
		<td>{!! Form::text('t_block_data', '') !!} </td>
	</tr>

	<tr>
		<th>fi_block_data</th>
		<td>{!! Form::text('h_1_block_heading', '') !!}</td>	
		<th>h_2_block_heading</th>
		<td>{!! Form::text('h_2_block_heading', '') !!}</td>
	</tr>
	<tr>	
		<th>h_1_block_data</th>
		<td>{!! Form::text('h_1_block_data', '') !!} </td>
		<th>h_2_block_data</th>
		<td>{!! Form::text('h_2_block_data', '') !!}  </td>
	</tr>
	<tr>		
		<th>h_1_block_photo</th>
		<td>{!! Form::file('h_1_block_photo', NULL) !!} </td>
		<th>h_2_block_photo</th>
		<td>{!! Form::file('h_2_block_photo', NULL) !!} </td>
	</tr>
	<tr>   
		<th>about_text</th>
		<td>{!! Form::text('about_text', '') !!} </td>	
		<th>about_right_block</th>
		<td>{!! Form::text('about_right_block', '') !!}</td>
    </tr>
	<tr>
		<th>about_left_block</th>
		<td>{!! Form::text('about_left_block', '') !!} </td>   
		<th>about_right_photo</th>
		<td>{!! Form::file('about_right_photo', NULL) !!}</td>	
    </tr>
	<tr>
		<th>about_left_photo</th>
		<td>{!! Form::file('about_left_photo', NULL) !!}</td>
		<th>about_fi</th>
		<td>{!! Form::text('about_fi', '') !!} </td>
	</tr>
    <tr>   
		<th>about_s</th>
		<td>{!! Form::text('about_s', '') !!} </td>	
		<th>about_t</th>
		<td>{!! Form::text('about_t', '') !!} </td>
	
	</tr>
    <tr><td><input class= "btn btn-sm btn-primary" type="submit" value="Save"></td></tr>
</table>

{!! Form::close() !!} 
<div>
<table class="table table-border">

       @forelse($data as $d)
    <tr>
    	<th>name</th>
    	<td>{{$d->name}}</td>
    	<th>logo</th>
    	<td>{{$d->logo}}</td>
     </tr>
     <tr>
    	<th>address</th>
    	<td>{{$d->address}}</td>
    	 <th>email</th>
    	<td>{{$d->email}}</td>
     </tr>
     <tr>
    	<th>phone</th>
    	<td>{{$d->phone}}</td>
    	<th>slider_photo</th>
    	<td>{{$d->slider_photo}}</td>
     </tr>
     <tr>
    	 <th>heading</th>
    	<td>{{$d->heading}}</td>
    	<th>sub_heading</th>
    	<td>{{$d->sub_heading}}</td>
     </tr>
     <tr>
    	 <th>fi_block_heading</th>
    	<td>{{$d->fi_block_heading}}</td>
    	<th>s_block_heading</th>
    	<td>{{$d->s_block_heading}}</td>
     </tr>
     <tr>
    	 <th>t_block_heading</th>
    	<td>{{$d->t_block_heading}}</td>
    	<th>fi_block_data</th>
    	<td>{{$d->fi_block_data}}</td>
     </tr>
     <tr>
    	<th>s_block_data</th>
    	<td>{{$d->s_block_data}}</td>
    	<th>t_block_data</th>
    	<td>{{$d->t_block_data}}</td>
     </tr>
     <tr>
    	<th>h_1_block_heading</th>
    	<td>{{$d->h_1_block_heading}}</td>
    	<th>h_2_block_heading</th>
    	<td>{{$d->h_2_block_heading}}</td>
     </tr>
     <tr>
    	<th>h_1_block_data</th>
    	<td>{{$d->h_1_block_data}}</td>
    	 <th>h_2_block_data</th>
    	<td>{{$d->h_2_block_data}}</td>
     </tr>
     <tr>
    	<th>h_1_block_photo</th>
    	<td>{{$d->h_1_block_photo}}</td>
    	<th>h_2_block_photo</th>
    	<td>{{$d->h_2_block_photo}}</td>
     </tr>
     <tr>
    	 <th>about_text</th>
    	<td>{{$d->about_text}}</td>
    	 <th>about_right_block</th>
    	<td>{{$d->about_right_block}}</td>
     </tr>
     <tr>
    	<th>about_left_block</th>
    	<td>{{$d->about_left_block}}</td>
    	 <th>about_right_photo</th>
    	<td>{{$d->about_right_photo}}</td>
     </tr>
     <tr>
    	 <th>about_left_photo</th>
    	<td>{{$d->about_left_photo}}</td>
    	<th>about_fi</th>
    	<td>{{$d->about_fi}}</td>
     </tr>
     <tr>
    	<th>about_s</th>
    	<td>{{$d->about_s}}</td>
    	 <th>about_t</th>
    	<td>{{$d->about_t}}</td>
     </tr>
     <tr>    	
    	
        <th>action</th>
    	<td>

    		<a href="{{URL::to('/edit',['id' => $d->id])}}" class="btn btn-sm btn-primary">Edit</a>

    		<form action="{{URL::to('/destroy',['id' => $d->id])}}" method="post"> 
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
</div>
@endsection
