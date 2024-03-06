<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("category.index", compact("categories"));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'categoryName' => 'required|string|max:255',
            'categorypicture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = Category::create([
            'name' => $validatedData['categoryName'],
            'photo_url' => $request->file('categorypicture')->store('categories', 'public'),
        ]);
        if ($category) {

            session()->flash('success', 'Category created successfully!');
        } else {
            session()->flash('error', 'failed to create new category');
        }


        return redirect()->back();
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        if ($category) {

            session()->flash('success', 'La catégorie a été supprimée avec succès!!');
        } else {
            session()->flash('error', 'failed to delete new category');
        }

        return $this->index();
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'categoryName' => 'required|string|max:255',
            'categorypicture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $category = Category::findOrFail($request->input("categoryId"));
    
        $category->name = $validatedData['categoryName'];
    
        if ($request->hasFile('categorypicture')) {
            Storage::delete('public/' . $category->photo_url);
    
            $category->photo_url = $request->file('categorypicture')->store('categories', 'public');
        }
    
        $category->save();
    
        session()->flash('success', 'Category updated successfully!');
    
        return redirect()->back();
    }
    
}
