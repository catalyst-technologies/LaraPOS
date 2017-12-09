<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items as ItemsModel;

class Items extends Controller{
    public function all(){
        $items = ItemsModel::get();
    	return view('pages.items.all')->with([
            'items' => $items,
        ]);
    }
    public function create(){
    	return view('pages.items.create');
    }
    public function save(Request $request){
        $item = new ItemsModel;
        $item->upc_ean_isbn = $request->input('upc_ean_isbn');
        $item->item_name = $request->input('item_name');
        $item->size = $request->input('size');
        $item->description = $request->input('description');
        $item->cost_price = $request->input('cost_price');
        $item->selling_price = $request->input('selling_price');
        $item->quantity = $request->input('quantity');
        if($item->save()){
            flash()->success('Item created successfully');
            return redirect()->route('items.all');
        }else{
            flash()->error('Failed to create item');
            return redirect()->route('items.create');
        }
    }
    public function edit($id){
        $item = ItemsModel::where('id',$id)->first();
    	return view('pages.items.edit')->with([
            'item' => $item,
        ]);
    }
    public function update(Request $request,$id){
        $item = ItemsModel::where('id',$id)->first();
        $item->upc_ean_isbn = $request->input('upc_ean_isbn');
        $item->item_name = $request->input('item_name');
        $item->size = $request->input('size');
        $item->description = $request->input('description');
        $item->cost_price = $request->input('cost_price');
        $item->selling_price = $request->input('selling_price');
        $item->quantity = $request->input('quantity');
        if($item->save()){
            flash()->success('Item updated successfully');
        }else{
            flash()->error('Failed to update item');
        }
        return redirect()->route('items.edit',['id'=>$id]);
    }
    public function delete(Request $request){
        $item = ItemsModel::where('id',$id);
        if($item->delete()){
            flash()->success('Item deleted successfully');
        }else{
            flash()->error('Failed to delete item');
        }
        return redirect('items.all');
    }
}
