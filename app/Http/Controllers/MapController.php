<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use DB;


class MapController extends Controller
{


    public function gmaps()
    {
    	$locations = DB::table('locations')->get();
    	return view('gmaps',compact('locations'));
    }


}