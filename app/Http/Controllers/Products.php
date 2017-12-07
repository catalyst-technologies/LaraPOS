<?php

namespace App\Http\Controllers;

use App\Models\Products as ProductsModel;
use Illuminate\Http\Request;

class Products extends Controller {

    public function all() {
        $products = ProductsModel::get();
        return view('pages.products.all')->with([
                    'products' => $products
        ]);
    }

    public function create() {
        return view('pages.products.create');
    }

    public function save(Request $request) {
        $new = new ProductsModel;

        $new->name = $request->input('product_name');
        $new->description = $request->input('product_description');
        $new->price = $request->input('product_price');
        $new->qty = $request->input('product_quantity');
        $new->expiry = $request->input('product_expiry');

        if ($new->save()) { # save the new user
            flash()->success('Product registered successfully');
            return redirect()->route('products.all');
        } else {
            flash()->error('Product registration failed');
            return redirect()->route('products.create');
        }
    }

    public function edit($id) {

        $products = ProductsModel::where('id', $id)->first();
        return view('pages.products.edit')->with([
                    'products' => $products
        ]);
    }

    public function update(Request $request, $id) {
        $products = ProductsModel::where('id', $id)->first();
        $products->name = $request->input('product_name');
        $products->description = $request->input('product_description');
        if ($products->save()) {
            echo "Success";
        } else {
            echo "failed";
        }
    }

    public function delete($id) {
        $products = ProductsModel::where('id', $id)
                ->delete();

        if ($products) { # save the new user
            flash()->success('Product deleted successfully');
            return redirect()->route('products.all');
        } else {
            flash()->error('Product deletion failed');
            return redirect()->route('products.create');
        }
    }

}
