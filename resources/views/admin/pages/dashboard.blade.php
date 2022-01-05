@extends('layouts.admin', ['menu' => 'dashboard', 'submenu' => ''])
@section('title', $title)
@section('content')
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Dashboard </h2>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="ecommerce-widget">
        <div class="row">
            <!-- ============================================================== -->
            <!-- sales  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <div class="card-body">
                        <h5 class="text-muted">News</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{$news_count}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end sales  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- new customer  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <div class="card-body">
                        <h5 class="text-muted">Category</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{$category_count}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end new customer  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- visitor  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <div class="card-body">
                        <h5 class="text-muted">Visitor</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{$visitor_count}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end visitor  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- total orders  -->
            <!-- ============================================================== -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="card border-3 border-top border-top-primary">
                    <div class="card-body">
                        <h5 class="text-muted">Users</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{$user_count}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end total orders  -->
            <!-- ============================================================== -->
        </div>
        <div class="row">
            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- recent orders  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Trending</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>
                                    <th class="border-0">Image</th>
                                    <th class="border-0">Title</th>
                                    <th class="border-0">Category</th>
                                    <th class="border-0">Description</th>
                                    <th class="border-0">Publish Time</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($trending_news as $news)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="m-r-10"><img src="{{asset('admin/assets/images/product-pic.jpg')}}" alt="user" class="rounded" width="45"></div>
                                        </td>
                                        <td>Product #1 </td>
                                        <td>id000001 </td>
                                        <td>20</td>
                                        <td>$80.00</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center"> No Data Found</td>
                                    </tr>
                                @endforelse
                                <tr>
                                    <td colspan="6"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end recent orders  -->
        </div>
    </div>
@endsection
