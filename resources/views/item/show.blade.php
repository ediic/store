@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
        <div class="col-md-3">
            <div class="card">
	            <div class="two">	
	            	<img src="{{asset('storage/' . $item->image)}}" class="card-img-top" alt="...">
	            </div>  
	            <div class="card-body">
                	<h5 class="card-title">{{$item->title}}</h5>
	                <p class="card-text">{{$item->text}}</p>
	        	</div>
	        	<div class="d-flex justify-content-around">
		        	@can('edit-users')
		        		<a href="{{ route('items.edit', $item->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
		        	@endcan
		        	@can('delete-users')
			        	<form action="{{ route('items.destroy', $item) }}" method="POST">
			        	    @csrf
			        	    @method('DELETE')
			        	    <button type="submit" class="btn btn-warning">Delete</button>
			        	</form>
		        	@endcan
	            </div>
	        </div>
	    </div>
	</div>    
@endsection
