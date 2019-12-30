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
{!! Form::open(array('url' => '/update_general_info','files'=>true)) !!}
<table>
	<tr><td>{!! Form::hidden('id', $data->id) !!}</td>	</tr>
	<tr>
		<th>Name</th>
		<td>{!! Form::text('name', $data->name) !!}</td>	
		<th>Logo</th>
		<td>{!! Form::file('logo', NULL) !!}</td>
		<th>Address</th>
		<td>{!! Form::text('address', $data->address) !!} </td>
	</tr>
	<tr>
		<th>Email</th>
		<td>{!! Form::text('email', $data->email) !!}</td>	
		<th>Phone</th>
		<td>{!! Form::text('phone', $data->phone) !!} </td>
	</tr>
	<tr>
		<th>Slide</th>
		<td>{!! Form::file('slider_photo', NULL) !!}</td>	
		<th>Heading</th>
		<td>{!! Form::text('heading', $data->heading) !!}</td>	
	</tr>
	<tr>	
		<th>SubHeading</th>
		<td>{!! Form::text('sub_heading', $data->sub_heading) !!}</td>
		<th>F_heading</th>
		<td>{!! Form::text('fi_block_heading', $data->fi_block_heading) !!} </td>
	</tr>
	<tr>
			
		<th>s_b_heading</th>
		<td>{!! Form::text('s_block_heading', $data->s_block_heading) !!}</td>
	</tr>
	<tr>	
		<th>T_b_heading</th>
		<td>{!! Form::text('t_block_heading', $data->t_block_heading) !!} </td>	
		<th>fi_block_data</th>
		<td>{!! Form::text('fi_block_data', $data->fi_block_data) !!}</td>
	</tr>
	<tr>		
		<th>s_block_data</th>
		<td>{!! Form::text('s_block_data', $data->s_block_data) !!}</td>
		<th>t_block_data</th>
		<td>{!! Form::text('t_block_data', $data->t_block_data) !!} </td>
	</tr>

	<tr>
		<th>fi_block_data</th>
		<td>{!! Form::text('h_1_block_heading', $data->h_1_block_heading) !!}</td>	
		<th>h_2_block_heading</th>
		<td>{!! Form::text('h_2_block_heading', $data->h_2_block_heading) !!}</td>
	</tr>
	<tr>	
		<th>h_1_block_data</th>
		<td>{!! Form::text('h_1_block_data', $data->h_1_block_data) !!} </td>
		<th>h_2_block_data</th>
		<td>{!! Form::text('h_2_block_data', $data->h_2_block_data) !!}  </td>
	</tr>
	<tr>		
		<th>h_1_block_photo</th>
		<td>{!! Form::file('h_1_block_photo', NULL) !!} </td>
		<th>h_2_block_photo</th>
		<td>{!! Form::file('h_2_block_photo', NULL) !!} </td>
	</tr>
	<tr>   
		<th>about_text</th>
		<td>{!! Form::text('about_text', $data->about_text) !!} </td>	
		<th>about_right_block</th>
		<td>{!! Form::text('about_right_block', $data->about_right_block) !!}</td>
    </tr>
	<tr>
		<th>about_left_block</th>
		<td>{!! Form::text('about_left_block', $data->about_left_block) !!} </td>   
		<th>about_right_photo</th>
		<td>{!! Form::file('about_right_photo', NULL) !!}</td>	
    </tr>
	<tr>
		<th>about_left_photo</th>
		<td>{!! Form::file('about_left_photo', NULL) !!}</td>
		<th>about_fi</th>
		<td>{!! Form::text('about_fi', $data->about_fi) !!} </td>
	</tr>
    <tr>   
		<th>about_s</th>
		<td>{!! Form::text('about_s', $data->about_s) !!} </td>	
		<th>about_t</th>
		<td>{!! Form::text('about_t', $data->about_t) !!} </td>
	
	</tr>
    <tr><td><input class= "btn btn-sm btn-primary" type="submit" value="Save"></td></tr>
</table>

{!! Form::close() !!} 
</div>
</div>
@endsection
