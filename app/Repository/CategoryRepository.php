<?php

namespace App\Repository;

use App\Models\Category;
use App\Models\note;

class CategoryRepository
{
    public function getAll()
    {
        $categories = Category::all();
        return $categories;
    }

//    public function create($request)
//    {
//
//    }

    public function store($request)
    {
        $data = $request->only('name','description','image');
        $image = $request->file('file');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img');
        $image->move($path, $data['image']);
        $category = Category::query()->create($data);
        return $category;
    }

    public function getByUserId($userId)
    {
        $categories = Category::where('user_id',$userId)->get();
        return $categories;
    }

    public function getById($id)
    {
        $category = Category::findOrFail($id);
        return $category;
    }

    public function update($request, $id)
    {
        Category::query()->findOrFail($id);
        $data = $request->only('name', 'description', 'image');
        $image = $request->file('file');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img');
        $image->move($path, $data['image']);
        return Category::query()->where('id', '=', $id)->update($data);
    }

    public function delete($id)
    {
        $category = Category::query()->findOrFail($id);
        $category->delete();
    }
}
