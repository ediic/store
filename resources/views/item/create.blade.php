@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<form action="{{ route('items.store') }}" method = "POST" enctype="multipart/form-data">
				  <div class="form-group">
				    <input type="file" name="image" value="{{ old('image') }}">
				    @error('image')
					    <small class="form-text text-muted">{{ $errors->first('image') }}</small>
					@enderror
				  </div>

				  <div class="form-group">
				    <label for="title">Title</label>
				    <input class="form-control" name="title" value="{{ old('title') }}">
				    <small class="form-text text-muted">{{ $errors->first('title') }}</small>
				  </div>

				  <div class="form-group">
				    <label for="text">Text</label>
				    <input class="form-control" name="text" value="{{ old('text') }}">
				    <small name="emailHelp" class="form-text text-muted">{{ $errors->first('text') }}</small>
				  </div>
				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				  @csrf
				</form>
		    </div>
		</div>
    </div>

@endsection
