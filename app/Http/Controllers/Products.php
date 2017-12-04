<?php

namespace App\Http\Controllers;
use App\Models\Products as ProductsModel;

use Illuminate\Http\Request;

class Products extends Controller {
    public function all(){
        $products = ProductsModel::get();
        return view('pages.products.all')->with([
           'products' => $products
        ]);
    }
    
    public function single($id){
        
    }
    
    public function view($id){
        
    }
    
    public function create(Request $request){
        
    }
    
    public function update(Request $request, $id){
        
    }
    
    public function delete(Request $request, $id){
        
    }
}
