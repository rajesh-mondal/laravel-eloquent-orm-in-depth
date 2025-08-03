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

    // Increment & Decrement
    public function increDecrement() {
        return Product::where( 'id', 1 )->increment( 'price', 100 );
        // return Product::where( 'id', 1 )->increment( 'price' );
        // return Product::where( 'id', 1 )->decrement( 'price', 100 );
    }

    // Aggregates
    public function aggregate() {
        return Product::sum( 'price' );
        // return Product::avg( 'price' );
        // return Product::max( 'price' );
        // return Product::min( 'price' );
        // return Product::count( 'price' );
    }

    // Select Clause
    public function select() {
        // return Product::select( 'title', 'price', 'star' )->get();
        return Product::select( 'title' )->distinct()->get();
    }

    // Basic Where Clauses
    public function whereClause() {
        return Product::where( 'price', '=', '1000' )->get();
        // return Product::where( 'price', '>', '2000' )->get();
        // return Product::where( 'price', '!=', '2000' )->get();
        // return Product::where( 'title', 'LIKE', '%New%' )->get();
        // return Product::where( 'title', 'NOT LIKE', '%New%' )->get();
    }

    // Advance Where Clauses
    public function advanceWhere() {
        return Product::whereBetween( 'price', [1, 1000] )->get();
        // return Product::whereNotBetween( 'price', [1, 1000] )->get();
        // return Product::whereIn( 'price', [1, 1000] )->get();
        // return Product::whereNull( 'price' )->get();
        // return Product::whereNotNull( 'price' )->get();
        // return Product::whereDate( 'updated_at', '2023-12-20' )->get();
        // return Product::whereMonth( 'updated_at', '12' )->get();
        // return Product::whereDay( 'updated_at', '20' )->get();
        // return Product::whereYear( 'updated_at', '2023' )->get();
        // return Product::whereTime( 'updated_at', '04:21:17' )->get();
        // return Product::whereColumn( 'updated_at', '>', 'created_at' )->get();
    }

    // Ordering
    public function orderBy() {
        // return Product::orderBy( 'price' )->get();
        return Product::orderBy( 'price', 'desc' )->get();
        // return Brand::inRandomOrder()->first();
        // return Brand::latest()->first();
        // return Brand::oldest()->first();
    }

    // Grouping, Limit
    public function groupHaving() {
        // return Product::groupBy( 'price' )->get();
        return Product::groupBy( 'price' )
            ->having( 'price', '>', 2000 )
            ->get();
        // return Product::skip( 10 )->take( 1 )->get();
    }

    // Paginate
    public function paginate() {
        // return Product::simplePaginate( 2 );
        // return Product::paginate( 2 );
        return Product::paginate(
            $perPage = 10,
            $columns = ['*'],
            $pageName = 'ItemNumber',
        );
    }
}
