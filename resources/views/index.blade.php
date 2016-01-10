@extends('layouts.master')
@section('title', 'Home')

@section('content')
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
		<tr>
			<td>Hossain Mamun</td>
			<td>01716340278</td>
			<td>hossainmamun278@gmail.com</td>
			<td>
				<a href="" class="btn btn-warning"><span class="glyphicon glyphicon-edit"> Edit</span></a>
				<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> Delete</span></a>
			</td>
		</tr>
		<tr>
			<td>ABCD</td>
			<td>01715456789</td>
			<td>abcd@gmail.com</td>
			<td>
				<a href="" class="btn btn-warning"><span class="glyphicon glyphicon-edit"> Edit</span></a>
				<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> Delete</span></a>
			</td>
		</tr>
	</tbody>
</table>

@stop

