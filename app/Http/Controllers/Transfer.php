<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branches as BranchModel;
use App\Models\Transfer as TransferModel;

class Transfer extends Controller {
    private $data = [];

    public function __construct() {

    }

    public function index() {

      $this->data['transfer'] = TransferModel::orderBy('id', 'desc')
      ->first();
      $this->data['branch'] = BranchModel::select('name', 'id')
      ->get();

      return view('pages.transfer.main')->with($this->data);
    }


    public function save(Request $request)  {
      $new = new TransferModel;
    }
}
