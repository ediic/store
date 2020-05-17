@extends('layouts.app')

@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-3">

            <div class="dropdown sidebar d-flex flex-column justify-content-around">
                
                <a href="/user">
                    user
                </a>

                <a href="#">
                    author
                </a>

                <a href="#">
                    admin
                </a>

                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    link 2
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>

                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    link 3
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

        </div>
        
        <div class="col-md-9">
            <!-- <img src="https://placehold.it/300x400" class="img-fluid img-thumbnail" alt="Responsive image"> -->
            <div class="card bg-dark text-white one">
              <img src="https://placehold.it/800x500" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h2 class="card-title">Card title</h2>
              </div>
            </div>

        </div>    
    </div>
    <div class="row pt-4">
        <div class="col-md-4">
            <div class="card bg-dark text-white two">
              <img src="https://placehold.it/300x200" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h2 class="card-title">Card title</h2>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-white two">
              <img src="https://placehold.it/300x200" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h2 class="card-title">Card title</h2>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark text-white two">
              <img src="https://placehold.it/300x200" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h2 class="card-title">Card title</h2>
              </div>
            </div>            
        </div>
        
    </div>

</div>
@endsection



