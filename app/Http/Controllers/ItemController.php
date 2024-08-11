<?php

namespace App\Http\Controllers;


use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Show the form for creating a new item.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created item in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'condition' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Create the item and associate it with the authenticated user
        $item = new Item([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'price' => $request->price,
            'condition' => $request->condition,
            'image' => $imagePath,
        ]);

        // Save the item with the authenticated user
        auth()->user()->items()->save($item);

        return redirect()->route('items.index');
    }



    public function index(Request $request)
    {
        $search = $request->input('search');

        $items = Item::query()
            ->when($search, function($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                             ->orWhere('description', 'like', "%{$search}%")
                             ->orWhere('category', 'like', "%{$search}%")
                             ->orWhere('condition', 'like', "%{$search}%");
            })
            ->paginate(24);

        return view('items.index', compact('items'));
    }
        
        public function description($id)
    {
        $item = Item::findOrFail($id);
        return view('items.description', compact('item'));
    }
    
    public function userItems()
    {
        // Get the currently authenticated user
        $user = auth()->user();
    
        // Retrieve items that belong to the authenticated user
        $items = Item::where('user_id', $user->id)->get();
    
        // Return the view with the items
        return view('items.user')->with('items', $items);
    }

    public function destroy($id)
    {
        $item = Item::findOrFail($id);

        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }

        $item->delete();

        return redirect()->route('items.user')->with('success', 'Item deleted successfully.');
    }

    

    // Other methods...

    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('items.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string',
            'price' => 'required|numeric',
            'condition' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);

        $item = Item::findOrFail($id);

        // Update item details
        $item->name = $request->name;
        $item->description = $request->description;
        $item->category = $request->category;
        $item->price = $request->price;
        $item->condition = $request->condition;

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
            // Store new image
            $imagePath = $request->file('image')->store('images', 'public');
            $item->image = $imagePath;
        }

        $item->save();

        return redirect()->route('items.user')->with('success', 'Item updated successfully.');
    }

    

}

