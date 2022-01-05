<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\NewsVisitor;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['news_count'] = Blog::count();
        $data['category_count'] = Category::count();
        $data['visitor_count'] = NewsVisitor::count();
        $data['user_count'] = User::count();
        $data['trending_news'] = Blog::where('status', ACTIVE)->where('is_trending', ACTIVE)->get();
        return view('admin.pages.dashboard', $data);
    }
}
