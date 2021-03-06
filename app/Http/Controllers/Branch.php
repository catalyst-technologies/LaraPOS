<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\Branches as BranchModel;

class Branch extends Controller {

    public function select_branch($id) {
        Session::put('branch',$id);

        $request = new Request();
        $request = $request->capture();
        echo json_encode($request,JSON_PRETTY_PRINT);
    }

    public function all() {
        $branch = BranchModel::get();
        return view('pages.branch.all')->with([
                    'branch' => $branch
        ]);
    }

    public function create() {
        return view('pages.branch.create');
    }

    public function save(Request $request) {
        $new = new BranchModel;
        $new->name = $request->input('name');
        $new->phone = $request->input('phone');
        $new->street_address = $request->input('street_adress');
        $new->city = $request->input('city');
        $new->country = $request->input('country');

        if ($new->save()) {
            flash()->success('Branch creation successful');
            return redirect()->route('branch.all');
        } else {
            flash()->error('Branch creation failed');
            return redirect()->route('branch.create');
        }
    }

    public function edit($id) {
        $branch = BranchModel::where('id', $id)->first();
        return view('pages.branch.edit')->with([
                    'branch' => $branch
        ]);
    }

    public function update(Request $request, $id) {
        $branch = BranchModel::where('id', $id)->first();
        $branch->name = $request->input('name');
        $branch->phone = $request->input('phone');
        $branch->street_address = $request->input('street_adress');
        $branch->city = $request->input('city');
        $branch->country = $request->input('country');

        if ($branch->save()) {
            flash()->success('Branch update successful');
            return redirect()->route('branch.all');
        } else {
            flash()->error('Branch update failed');
            return redirect()->route('branch.edit');
        }
    }

    public function delete($id) {
        $branch = BranchModel::where('id', $id)
                ->delete();
        if ($branch) {
            flash()->success('Branch deletion successful');
            return redirect()->route('branch.all');
        } else {
            flash()->error('Branch deletion failed');
            return redirect()->route('branch.create');
        }
    }

}
