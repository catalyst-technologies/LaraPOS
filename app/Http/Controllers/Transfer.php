<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transfer as TransferModel;

class Transfer extends Controller {
    private $data = [];

    public function __construct() {

    }

    public function all() {
      $this->data['transfer'] = TransferModel::get();

      return view('pages.transfer.all')->with($this->data);
    }

    public function create()  {
      return view('pages.transfer.create')->with($this->data);
    }

    public function edit($id) {
      $this->data['transfer'] = TransferModel::where('id',$id)->first();
      return view('pages.transfer:edit')->with($this->data);
    }

    public function save(Request $request)  {
      $new = new TransferModel;
    }
}
