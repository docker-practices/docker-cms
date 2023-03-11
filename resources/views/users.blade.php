@extends('layout')
<div class="container">
	<div class="sub_container">
		
		<h1>this is  user page</h1>
		<a href="{{URL::to('/')}}">Home</a>

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
			      <th class="lst">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($AllUsers as $all_users)
			    <tr>
			      <td>{{ $all_users->id }} </td>
			      <td>{{ $all_users->name }}</td>
			      <td>{{ $all_users->address }} </td>
			      <td>{{ $all_users->email }}</td>
			      <td>{{ $all_users->password }}</td>
			      <td>{{ $all_users->phone }}</td>
			      <td class="lsts">
			        <a href="{{ URL::to('EditUser/'.$all_users->id ) }}" class="btns-warning">edit</a>
			        <a href="{{ URL::to('UserShow/'.$all_users->id ) }}" class="btns-info">view</a>
			        <a href="{{ URL::to('DeleteUser/'.$all_users->id ) }}" class="btns-danger">delete</a></td>
			    </tr>
			    @endforeach
			  </tbody>
		</table>
	</div><!--./sub_container-->
</div>