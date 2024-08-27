@extends('admin.layouts.app')
@section('dashboardContent')
    <!-- START PAGE CONTENT-->
    <body class="bg-silver-300">
    <section class="content">
        <!-- Default box -->
        <form action="{{ route('catagory.add') }}" class="bg-white mt-4" id="catagory" method="post"enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required placeholder="Name">
                                    <p class="invalid-feedback"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="slug">Slug</label>
                                    <input  type="text" name="slug" id="slug" class="form-control" required placeholder="Slug">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="image">Image</label>
                                <input type="file" class="form-control"  name="image">
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" required id="status">
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('catagory.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </form>
        <!-- /.card -->
    </section>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->

    </body>
@endsection



{{--</html>--}}
