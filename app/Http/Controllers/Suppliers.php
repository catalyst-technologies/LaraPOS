<?php

namespace App\Http\Controllers;

use App\Models\Suppliers as SuppliersModel;
use Illuminate\Http\Request;

class Suppliers extends Controller {

    private $data = [];

    public function __construct() {
        $this->data['_branch'] = \App\Models\Branches::get();
    }

    public function all() {
        $this->data['suppliers'] = SuppliersModel::where('branch_id', Auth::user()->branch_id)
                ->get();
        return view('pages.suppliers.all')->with($this->data);
    }

    public function create() {
        return view('pages.suppliers.create')->with($this->data);
    }

    public function save(Request $request) {
        $supplier = new SuppliersModel;
        $supplier->company_name = $request->input('company_name');
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->phone_number = $request->input('phone_number');
        $supplier->address = $request->input('address');
        $supplier->city = $request->input('city');
        $supplier->state = $request->input('state');
        $supplier->zip = $request->input('zip');
        $supplier->account = $request->input('account');
        if ($supplier->save()) {
            flash()->success('Supplier created successfully');
            return redirect()->route('suppliers.all');
        } else {
            flash()->error('Failed to create supplier');
            return redirect()->route('suppliers.create');
        }
    }

    public function edit($id) {
        $this->supplier = SuppliersModel::where('id', $id)->first();
        return view('pages.suppliers.edit')->with($this->data);
    }

    public function update(Request $request, $id) {
        $supplier = SuppliersModel::where('id', $id)->first();
        $supplier->company_name = $request->input('company_name');
        $supplier->name = $request->input('name');
        $supplier->email = $request->input('email');
        $supplier->phone_number = $request->input('phone_number');
        $supplier->address = $request->input('address');
        $supplier->city = $request->input('city');
        $supplier->state = $request->input('state');
        $supplier->zip = $request->input('zip');
        $supplier->account = $request->input('account');
        if ($supplier->save()) {
            flash()->success('Supplier details updated successfully');
            return redirect()->route('suppliers.edit', ['id' => $id]);
        } else {
            flash()->error('Failed to update supplier');
            return redirect()->route('suppliers.edit', ['id' => $id]);
        }
    }

    public function delete($id) {
        $supplier = SuppliersModel::where('id', $id);
        if ($supplier->delete()) {
            flash()->success('Supplier deleted');
        } else {
            flash()->error('Unable to delete supplier');
        }
        return redirect()->route('suppliers.all');
    }

}
