@extends('layouts.master')
@section('title', 'Home')

@section('content')
<!-- @if(Session::has('success'))
    <div class="container">
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Success!</strong> {{Session::get('success')}}
        </div>
    </div>
@endif -->
<a href="create" class="btn btn-primary pull-right">Create Contact</a>
<table class='table table-bordered'>
	<thead>
		<tr>
			<th>Contact Name</th>
			<th>Number</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $contact)
		<tr>
			<td>{{$contact->contact_name}}</td>
			<td>{{$contact->contact_number}}</td>
			<td>{{$contact->contact_email}}</td>
			<td>
				<a href="{{url('edit')}}/{{$contact->contact_id}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"> Edit</span></a>
				<a href="{{url('delete')}}/{{$contact->contact_id}}" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> Delete</span></a>
			</td>
		</tr>
	@endforeach
		<!-- <tr>
			<td>ABCD</td>
			<td>01715456789</td>
			<td>abcd@gmail.com</td>
			<td>
				<a href="" class="btn btn-warning"><span class="glyphicon glyphicon-edit"> Edit</span></a>
				<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> Delete</span></a>
			</td>
		</tr> -->
	</tbody>
</table>

@stop

