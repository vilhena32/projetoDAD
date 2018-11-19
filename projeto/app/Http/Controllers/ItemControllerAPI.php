<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Resources\Item as ItemResource;



class ItemControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
       // dd(ItemResource::collection(Item::all()));
        //return ItemResource::collection(Item::all()->paginate(5));

        //if ($request->has('page')) {
           // return ItemResource::collection(Item::paginate(5));
        //} else {
          //  return ItemResource::collection(Item::all());

          $items = ItemResource::collection(Item::paginate(5));

          $response = [
              'pagination' => [
                  'total' => $items->total(),
                  'per_page' => $items->perPage(),
                  'current_page' => $items->currentPage(),
                  'last_page' => $items->lastPage(),
                  'from' => $items->firstItem(),
                  'to' => $items->lastItem()
              ],
              'data' => $items
          ];
  
          return response()->json($response);
       // }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
