<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class DemoController extends Controller {
    // Insert Using Model
    public function create( Request $request ) {
        return Brand::create( $request->input() );
    }

    // Update Using Model
    public function update( Request $request ) {
        return Brand::where( 'id', $request->id )->update( $request->input() );
    }

    // Update or Create Using Model
    public function updateOrCreate( Request $request ) {
        return Brand::updateOrCreate(
            ['brandName' => $request->brandName],
            $request->input()
        );
    }

    // Delete Using Model
    public function delete( Request $request ) {
        return Brand::where( 'id', '=', $request->id )->delete();
    }
}
