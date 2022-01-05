@extends('layouts.admin', ['menu' => 'category', 'sub_menu' => 'all_categories'])
@section('title', $title)
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Edit Category</h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Category</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">{{$title}}</h4>
                        </div>
                        <div class="card-body">
                            @include('admin.includes.message')
                            <form method="POST" action="{{route('admin_update_category', encrypt($cat->id))}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="firstName">Title</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Category Title" value="{{$cat->name}}" name="name">
                                </div>

                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" placeholder="Description" class="form-control">{{$cat->description}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="icon">Background Image</label>
                                    <input type="file" class="form-control putImage1" name="icon">
                                    <img src="{{asset(IMG_CATEGORY_ICON.$cat->image)}}" alt="{{$cat->name}}" width="500" height="80" class="mt-3" id="target1">
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="is_header" name="is_header" {{$cat->is_header == ACTIVE ? 'checked' : ''}}>
                                    <label class="custom-control-label" for="is_header">Category go to header?</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="is_sidebar" name="is_sidebar" {{$cat->is_sidebar == ACTIVE ? 'checked' : ''}}>
                                    <label class="custom-control-label" for="is_sidebar">Category go to sidebar?</label>
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
