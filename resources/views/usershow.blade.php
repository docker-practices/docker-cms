@extends('layout')
<div class="container">
	<div class="sub_container">
		
		<h1>this is  user page</h1>
		<a href="{{URL::to('/')}}">Home</a>
		<a href="{{URL::to('Users')}}">Users Management</a>

		<hr>
		<table class="table">
			  <thead>
			    <tr>
			      <th>ID</th>
			      <th>Name</th>
			      <th>Address</th>
			      <th>Email</th>
			      <th>Password</th>
			      <th>Phone</th>

			    </tr>
			  </thead>
			  <tbody>

			    <tr>
			      <td>{{ $single_data->id }} </td>
			      <td>{{ $single_data->name }}</td>
			      <td>{{ $single_data->address }} </td>
			      <td>{{ $single_data->email }}</td>
			      <td>{{ $single_data->password }}</td>
			      <td>{{ $single_data->phone }}</td>
			      
			  </tbody>
		</table>
	</div><!--./sub_container-->
</div>