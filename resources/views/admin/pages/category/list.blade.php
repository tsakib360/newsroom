@extends('layouts.admin', ['menu' => 'category', 'sub_menu' => 'all_categories'])
@section('title', $title)
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Category</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All Categories</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- ============================================================== -->
        <!-- data table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">{{$title}} <a href="{{route('admin_add_category')}}" class="btn btn-outline-success float-right">Add</a></h5>
                    <p>List of {{$title}}</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end data table  -->
        <!-- ============================================================== -->
    </div>

    @push('post_scripts')
        <script>
            $(document).ready(function() {
                var table = $('table.second').DataTable({
                    lengthChange: false,
                    processing: true,
                    serverSide: true,
                    pageLength: 25,
                    responsive: true,
                    ajax: "{{route('admin_all_categories')}}",
                    order: [1, 'desc'],
                    autoWidth:false,
                    columns: [
                        {"data": "title"},
                        {"data": "description"},
                        {"data": "image"},
                        {"data": "created_at"},
                        {"data": "action",orderable: false, searchable: false}
                    ],
                    buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
                });

                table.buttons().container()
                    .appendTo('#example_wrapper .col-md-6:eq(0)');
            });
        </script>
    @endpush
@endsection
