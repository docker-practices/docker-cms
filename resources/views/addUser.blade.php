@extends('layout')
<div class="container">
	<div class="sub_container">
		
		<h1>this is add user page</h1>
		<a href="{{URL::to('/')}}">Home</a>
		<a href="{{URL::to('Users')}}">Users Management</a>
		<hr>
		<form class="form-horizontal" action="{{ url('InsertUser') }}" method="POST">
			@csrf
			<!--{{ csrf_field() }}-->
			<fieldset>
			  
			  <div class="control-group">
				<label class="control-label" for="focusedInput">Name</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="name">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Address</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="address">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Email Address</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="email">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Password</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="password">
				</div>
			  </div>

			  <div class="control-group">
				<label class="control-label" for="focusedInput">Mobile Number</label>
				<div class="controls">
				  <input class="input-xlarge focused" id="focusedInput" type="text" name="phone">
				</div>
			  </div>

			  
			  <div class="form-actions">
				<button type="submit" class="btn btn-primary">Add Contact</button>
			  </div>
			</fieldset>
   		</form>
	</div><!--./sub_container-->
</div>