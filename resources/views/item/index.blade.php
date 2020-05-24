@extends('layouts.app')

@section('title', 'Index Title')

@section('content')
<div class="container-fluid">
	<div class="row">
		<a href="{{ route('items.create') }}" class="d-block mx-auto">
			<button type="submit" class="btn btn-primary px-5">Add</button>
		</a>
	</div>
	<div class="row pt-4">
        @foreach($items as $item)
	        <div class="col-md-3">
	            <div class="card">
		            <div class="two">	
		            	<img src="{{asset('storage/' . $item->image)}}" class="card-img-top" alt="...">
		            </div>  
		            <div class="card-body">
		                <a href="{{ route('items.show', $item->id) }}">
		                	<h5 class="card-title">{{$item->title}}</h5>
		                </a>
		                <p class="card-text">{{$item->text}}</p>
		        	</div>
		        	<div class="d-flex justify-content-around">
		            </div>
		        </div>
		    </div>
        @endforeach
	</div>      
</div>

@endsection
