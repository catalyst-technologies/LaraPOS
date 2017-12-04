<?php

namespace App\Http\Controllers;

use App\Models\Products as ProductsModel;
use Illuminate\Http\Request;

class Products extends Controller {

    public function all(){
      $products = ProductsModel::get();
      return view('pages.products.list')->with([
          'products' => $products
      ]);

    }

    public function create(){
      return view('pages.products.create');
    }

    public function single($id){

    }

    public function view($id){

    }


    public function save(Request $request){
      $new = new ProductsModel;

      $new->name = $request->input('product_name');
      $new->description = $request->input('product_description');
      $new->price = $request->input('product_price');

      if ($new->save()){
          echo "Save success";
      }else{
          echo "save failed";
      }

    }

    public function edit($id) {

        $product = ProductsModel::where('id',$id)->first();
        return view('pages.products.edut')->with(['products' => $products
      ]);

    }

    public function update(Request $request, $id){
      $products = ProductModel::where('id', $id)->first();
      $products->name = $request->input('name');
      $products->description = $request->input('description');
      if ($prodcuts->save()) {
        echo "Success";
      }else{
        echo "failed";
      }

    }

    public function delete($id){
      $products = ProductsModel::where('id', $id)
        ->delete();

      if ($products) {
        echo "Success";
      }else{
        echo "Failed";
      }

    }
}
