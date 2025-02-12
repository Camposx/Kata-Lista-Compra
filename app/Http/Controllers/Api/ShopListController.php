<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ShopList;
use Illuminate\Http\Request;

class ShopListController extends Controller
{

    public function index()
    {
        $shopList = ShopList::all();

        return response()->json($shopList, 200);
    }

    public function store(Request $request)
    {
        $shopList = ShopList::create([
            'product' => $request->product,
            'quantity' => $request->quantity,
        ]);

        $shopList->save();

        return response()->json($shopList, 200);
    }

    public function update(Request $request, string $id)
    {
        $shopList = ShopList::findOrFail($id);

        $shopList->update([
            'product' => $request->product,
            'quantity' => $request->quantity,
        ]);
        
        $shopList->save();

        return response()->json($shopList, 200);
    }

    public function destroy(string $id)
    {
        $shopList = ShopList::findOrFail($id);
        $shopList->delete();
    }

    public function destroyAll(){
        ShopList::truncate();
    }
}
