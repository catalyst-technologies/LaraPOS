<?php

namespace App\Http\Controllers;
use App\Models\Deliveries as DeliveriesModel;
use Illuminate\Http\Request;

class Deliveries extends Controller {

    public function all(){
        $deliveries = DeliveriesModel::get();
        return view('pages.Deliveries.all')->with([
           'Deliveries' => $deliveries
        ]);
    }

    public function create(){
      return view('pages.Deliveries.create');
    }

    public function save(Request $request){
      $new = new DeliveriesModel;

      $new->driver = $request->input('driver');
      $new->plate_num = $request->input('plate_num');
      $new->tracking_num = $request->input('tracking_num');
      $new->from = $request->input('from');
      $new->to = $request->input('to');

      if ($new->save()) { # save the new user
          flash()->success('delivery registered successfully');
          return redirect()->route('Deliveries.all');
      } else {
          flash()->error('delivery registration failed');
          return redirect()->route('Deliveries.create');
      }

    }

    public function edit($id) {

        $deliveries = DeliveriesModel::where('id',$id)->first();
        return view('pages.Deliveries.edit')->with([
          'Deliveries' => $deliveries
      ]);

    }

    public function update(Request $request, $id){
      $deliveries = DeliveriesModel::where('id', $id)->first();
      $deliveries->name = $request->input('delivery_name');
      $deliveries->description = $request->input('delivery_description');
      if ($deliveries->save()) {
        echo "Success";
      }else{
        echo "failed";
      }

    }

    public function delete($id){
      $deliveries = DeliveriesModel::where('id', $id)
        ->delete();

        if ($deliveries) { # save the new user
            flash()->success('delivery deleted successfully');
            return redirect()->route('Deliveries.all');
        } else {
            flash()->error('delivery deletion failed');
            return redirect()->route('deliveries.create');
        }

    }
}
