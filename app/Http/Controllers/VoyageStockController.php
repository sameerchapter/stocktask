<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
class VoyageStockController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController

{
 
    public function update(Request $request, $id) {
        $data=$request->except(['_method','_token','created_at','updated_at']);
        $data['is_edit']=1;
        Stock::where("id", $id)->update($data);
        $redirect = redirect()->route("voyager.stocks.index");
        return $redirect->with([
            'message'    => __('voyager::generic.successfully_updated')." stock",
            'alert-type' => 'success',
        ]);
    }
    
}
