@extends('layouts.links')
@section('content')
    <!-- ---Header start--- -->
    <nav class=" fixed- shadow">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid p-0">
                    <a class="navbar-brand" href="{{ url('employe') }}">
                        <span class="fs-4 dark-primary">Our Employees</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" style="border: 2px solid #fff;"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon rounded"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li><a class="nav-link active" href="{{ url('employe') }}">Home</a></li>
                            <!-- <li><a class="nav-link" href="#portfolio">Media</a></li> -->
                            <li><a class="nav-link" href="{{ url('edit') }}">Edit</a></li>
                            <li><a class="nav-link" href="{{ url('create') }}">Create</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
    <!-- ---Header end--- -->
    <div class="container w-50">
        <div class="card shadow mt-3">
            <div class="card-header py-2 bg_primary text-light text-center">
                <h2 class="fw-bold m-0"> Student Admition Form</h2>
            </div>
            <div class="card-body">
                <form action="{{url('index')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control border-secondary"
                                placeholder="Type Your Name Here">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Father Name</label>
                            <input name="fname" type="text" class="form-control border-secondary"
                                placeholder="Type Your Father Name Here">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Phone Number</label>
                            <input name="number" type="text"
                                class="form-control border-secondary"placeholder="Type Your Number Here">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control border-secondary"
                                placeholder="Type Your Email Here">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>CNIC</label>
                            <input name="cnic" type="text" class="form-control border-secondary"
                                placeholder="Type Your CNIC Here">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Address</label>
                            <input name="address" type="text" class="form-control border-secondary"
                                placeholder="Type Your Address Here">
                        </div>
                        <div class="col-md-12 d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary bg_primary px-4 border-0">Submit</button>
                            <a href="#" class="btn btn-primary bg_primary px-4 border-0">Employee
                                List</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
