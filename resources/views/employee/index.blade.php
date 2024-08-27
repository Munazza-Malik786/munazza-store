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
    <section class=" list">
        <div class="container">
            <div class="card shadow p-4">
                <div class="card-header bg_primary text-light text-center">
                    <h2 class="m-0 fw-bold py-2">Courses List</h2>
                </div>
                <div class="card-body  p-0 m-0">
                    <table class="table table-bordered">
                        <tr>
                            <th>id</th>
                            <th>Course Name</th>
                        </tr>
                        @foreach ($courses as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->CourseName}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                {{-- <div class="button">
                    <a href="{{ url('CoursesForm') }}" class="btn btn-info bg_primary  text-light">Registration</a>
                </div> --}}
            </div>
        </div>
    </section>
    @endsection




  
