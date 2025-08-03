<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
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

    // Retrieving All Rows
    function getAll() {
        // return Brand::get();
        return Brand::all();
    }

    // Retrieving Single Row
    public function singleRow() {
        return Brand::first();
        // return Brand::find( 2 );
    }

    // Retrieving List of Column Values
    public function columnList() {
        // return Product::pluck( 'price' );
        return Product::pluck( 'price', 'title' );
    }

}
