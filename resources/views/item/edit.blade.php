@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h3>Edit item</h3>
				<form action="{{ route('items.update', $item->id) }}" method = "POST" enctype="multipart/form-data">
				  <div class="form-group">
		            <div class="two">	
		            	<img src="{{asset('storage/' . $item->image)}}" class="card-img-top" alt="...">
		            </div>
				    <input type="file" name="image">
				    @error('image')
					    <small class="form-text text-muted">{{ $errors->first('image') }}</small>
					@enderror
				  </div>

				  <div class="form-group">
				    <label for="title">Title</label>
				    <input class="form-control" name="title" value="{{ $item->title }}">
				    <small class="form-text text-muted">{{ $errors->first('title') }}</small>
				  </div>

				  <div class="form-group">
				    <label for="text">Text</label>
				    <input class="form-control" name="text" value="{{ $item->text }}">
				    <small name="emailHelp" class="form-text text-muted">{{ $errors->first('text') }}</small>
				  </div>
				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				  @csrf
				  @method('PUT')
				</form>
		    </div>
		</div>
    </div>

@endsection
