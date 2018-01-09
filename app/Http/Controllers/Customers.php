<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Session;
use App\Models\Customers as CustomersModel;
use Illuminate\Pagination\LengthAwarePaginator;

class Customers extends Controller {

    private $data = [];

    public function __construct() {
        $this->data['_branch'] = \App\Models\Branches::get();
        if(empty(Session::get('branch'))) Session::put('branch',0);
    }

    public function all() {
        $custoners = null;
        if (Auth::user()->user_type == 0) {
            $this->data['customers'] = CustomersModel::get();
        } else {
            $this->data['customers'] = CustomersModel::where('branch_id', Auth::user()->branch_id)
                    ->get();
        }
        
        $tdata = $this->data['customers'];  
				$currentPage = LengthAwarePaginator::resolveCurrentPage();
				$perPage = 10;		
				
				$itemCollection = collect($tdata);		
				$currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
				
				$paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage );
				$paginatedItems->setPath(request()->url());
        
        return view('pages.customers.all')->withCustomers($paginatedItems)->with('_branch', $this->data['_branch']); 
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
