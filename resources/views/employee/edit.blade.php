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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    style="border: 2px solid #fff;" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
@endsection





