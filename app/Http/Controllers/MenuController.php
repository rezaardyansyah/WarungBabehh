<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MenuController extends Controller
{

    public function topList()
    {
        $topDishes = Dish::orderBy('rating', 'desc')->take(3)->get();
        return view('content.home', compact('topDishes'));
    }

    public function menu(): View
    {
        $categories = Category::with('dishes')->get();
        return view('content.menu', compact('categories'));
    }

    public function index(): View
    {
        $categories = Category::with('dishes')->get();
        return view('dishes.index', compact('categories'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('dishes.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validasi data
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'name'          => 'required|min:5',
            'description'   => 'required|min:10',
            'price'         => 'required|numeric',
            'rating'        => 'required|numeric|between:0,5',
            'category_id'   => 'required|exists:categories,id'
        ]);

        //mengupload gambar
        $image = $request->file('image');
        $image->storeAs('public/dishes', $image->hashName());

        //membuat menu
        Dish::create([
            'image'         => $image->hashName(),
            'name'          => $request->name,
            'description'   => $request->description,
            'price'         => $request->price,
            'rating'        => $request->rating,
            'category_id'   => $request->category_id
        ]);

        return redirect()->route('dishes.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $dish = Dish::findOrFail($id);
        return view('dishes.show', compact('dish'));
    }

    public function edit($id)
{
    $dish = Dish::find($id);
    $categories = Category::all();
    return view('dishes.edit', compact('dish', 'categories'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'rating' => 'required|numeric',
    ]);

    $dish = Dish::find($id);
    $dish->name = $request->name;
    $dish->description = $request->description;
    $dish->price = $request->price;
    $dish->rating = $request->rating;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('dishes', 'public');
        $dish->image = basename($imagePath);
    }

    $dish->save();

    return redirect()->route('dishes.index')->with('success', 'Dish updated successfully');
}

public function destroy($id)
{
    $dish = Dish::find($id);
    $dish->delete();

    return redirect()->route('dishes.index')->with('success', 'Dish deleted successfully');
}
}
