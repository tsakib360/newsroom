<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryStoreRequest;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategories(Request $request)
    {
        $data['title'] = 'All Categories';
        if($request->ajax()) {
            $coin = Category::query();

            return datatables($coin)
                ->addColumn('title', function($item) {
                    return $item->name;
                })
                ->editColumn('description', function($item) {
                    return is_null($item->description) ? 'N/A' : $item->description;
                })
                ->editColumn('image', function($item) {
                    return '<img src="'.cdnAsset(IMG_CATEGORY_ICON, $item->image).'" width="100" />';
                })
                ->editColumn('created_at', function($item) {
                    return Carbon::parse($item->created_at)->diffForHumans();
                })
                ->addColumn('action', function ($item) {
                    return '
                            <a href="'.route('admin_edit_category', encrypt($item->id)).'" class="btn btn-rounded btn-secondary">Edit</a>
                            <a href="'.route('admin_delete_category', encrypt($item->id)).'" class="btn btn-rounded btn-danger delete">Delete</a>
                            ';
                })
                ->rawColumns(['action', 'image'])
                ->make(true);
        }
        return view('admin.pages.category.list', $data);
    }

    public function addCategory()
    {
        $data['title'] = 'Category';
        return view('admin.pages.category.add', $data);
    }

    public function storeCategory(CategoryStoreRequest $request)
    {
        $is_header = checkBoxValue($request->is_header);
        $is_sidebar = checkBoxValue($request->is_sidebar);
        if (!empty($request->icon)) {
            $icon = uploadimage($request->icon, IMG_CATEGORY_ICON, '', 500, 80);
        }
        $store = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $icon,
            'is_header' => $is_header,
            'is_sidebar' => $is_sidebar,
        ]);
        if(!empty($store)) {
            return redirect()->back()->with('toast_success', 'Category Successfully Created');
        }
        return redirect()->back()->with('toast_success', 'Something went wrong!');
    }

    public function editCategory($id)
    {
        $id = decrypt($id);
        $data['cat'] = Category::whereId($id)->first();
        $data['title'] = 'Category';
        return view('admin.pages.category.edit', $data);
    }

    public function updateCategory(Request $request, $id)
    {
        $id = decrypt($id);
        $category = Category::whereId($id)->first();
        $is_header = checkBoxValue($request->is_header);
        $is_sidebar = checkBoxValue($request->is_sidebar);
        if (!empty($request->icon)) {
            $icon = uploadimage($request->icon, IMG_CATEGORY_ICON, $category->image, 500, 80);
        }
        else {
            $icon = $category->image;
        }
        $store = $category->update([
            'name' => is_null($request->name) ? $category->name : $request->name,
            'description' => $request->description,
            'image' => $icon,
            'is_header' => $is_header,
            'is_sidebar' => $is_sidebar,
        ]);
        if(!empty($store)) {
            return redirect()->back()->with('toast_success', 'Category Successfully Created');
        }
        return redirect()->back()->with('toast_success', 'Something went wrong!');
    }

    public function deleteCategory($id)
    {
        $id = decrypt($id);
        $category = Category::whereId($id)->first();
        if(!empty($category)) {
            unlink(IMG_CATEGORY_ICON.$category->image);
            $delete = $category->delete();
            if(!empty($delete)) {
                return redirect()->back()->with('toast_success', 'Category Successfully Deleted');
            }
        }
        return redirect()->back()->with('toast_error', 'Something went wrong');
    }
}
