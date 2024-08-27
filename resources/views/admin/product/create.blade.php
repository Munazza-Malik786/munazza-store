@extends('admin.layouts.app')
@section('dashboardContent')
    <!-- START PAGE CONTENT-->
    <body class="bg-silver-300">
    <section class="content">
        <!-- Default box -->
        <form action="{{ route('product.add') }}" class="bg-white mt-4" id="product" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="span">Product</label>
                                    <input type="text" name="name" id="span" class="form-control" required
                                           placeholder="Product Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="para">Catagory</label>
                                    <input type="text" name="catagory" id="para" class="form-control" required
                                           placeholder="Catagory">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="para">Sub Catagory</label>
                                    <input type="text" name="subcatagory" id="para" class="form-control" required
                                           placeholder="Sub Catagory">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="head">Brand</label>
                                    <input type="text" name="brand" id="head" class="form-control" required
                                           placeholder="Brand">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="image">Image</label>
                                <input type="file" class="form-control" name="image">
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
                <div class="pb-5 pt-3 ml-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="{{ route('product.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
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
