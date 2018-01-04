<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers as CustomersModel;

class Customers extends Controller {

    private $data = [];

    public function __construct() {
        $this->data['_branch'] = \App\Models\Branches::get();
    }

    public function all() {
        $this->data['customers'] = CustomersModel::get();
        return view('pages.customers.all')->with($this->data);
    }

    public function create() {
        return view('pages.customers.create')->with($this->data);
    }

    public function save(Request $request) {
        $customer = new CustomersModel;
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone_number = $request->input('phone_number');

        $customer->address = $request->input('address');
        $customer->city = $request->input('city');
        $customer->state = $request->input('state');
        $customer->zip = $request->input('zip');
        $customer->comment = $request->input('comment');
        $customer->company_name = $request->input('company_name');
        $customer->account = $request->input('account');

        if ($customer->save()) {
            flash()->success('Item created successfully');
            return redirect()->route('customers.all');
        } else {
            flash()->error('Failed to create item');
            return redirect()->route('customers.create');
        }
    }

    public function edit($id) {
        $this->data['customer'] = CustomersModel::where('id', $id)->first();
        return view('pages.customers.edit')->with($this->data);
    }

    public function update(Request $request, $id) {
        $customer = CustomersModel::where('id', $id)->first();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone_number = $request->input('phone_number');

        $customer->address = $request->input('address');
        $customer->city = $request->input('city');
        $customer->state = $request->input('state');
        $customer->zip = $request->input('zip');
        $customer->comment = $request->input('comment');
        $customer->company_name = $request->input('company_name');
        $customer->account = $request->input('account');
        if ($customer->save()) {
            flash()->success('Customer updated successfully');
            return redirect()->route('customers.all');
        } else {
            flash()->error('Customer not updated');
            return redirect()->route('customers.all');
        }
    }

    public function delete($id) {
        $customers = CustomersModel::where('id', $id);
        if ($customers->delete()) {
            flash()->success('Customer deleted successfully');
        } else {
            flash()->error('Failed to delete customer');
        }
        return redirect()->route('customers.all');
    }

}
