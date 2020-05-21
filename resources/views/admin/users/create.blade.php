@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form action="{{ route('admin.users.store') }}" method = "POST">
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input class="form-control" name="name" value="{{ old('name') }}">
				    <small class="form-text text-muted">{{ $errors->first('name') }}</small>
				  </div>

				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" name="email" value="{{ old('email') }}" aria-describedby="emailHelp">
				    <small name="emailHelp" class="form-text text-muted">{{ $errors->first('email') }}</small>
				  </div>

				  <div class="form-group">
			        <label for="role">Roles</label>
			        <select class="form-control" name="role" value="{{ old('name') }}">
			          <option>user</option>
			          <option>author</option>
			          <option>admin</option>
			        </select>
			        <small name="emailHelp" class="form-text text-muted">{{ $errors->first('role') }}</small>
			      </div>

				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" name="password">
				    <small name="emailHelp" class="form-text text-muted">{{ $errors->first('password') }}</small>
				  </div>
				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				  @csrf
				</form>
		    </div>
		</div>
    </div>

@endsection