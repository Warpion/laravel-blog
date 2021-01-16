<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class DiggingDeeperController extends Controller
{
    public function collections()
    {
    	$result = [];

    	$eloquentCollection = BlogPost::withTrashed()->get();

    	//dd(__METHOD__, $eloquentCollection, $eloquentCollection->toArray());

    	$collection = collect($eloquentCollection->toArray());

	    // dd(
	    // 	get_class($eloquentCollection),
	    // 	get_class($collection),
	    // 	$collection
	    // );

	    // $result['first'] = $collection->first();
	    // $result['last'] = $collection->last();

	    $result['where']['data'] = $collection
	    	->where('category_id', 10)
	    	->values()
	    	->keyBy('id');

	    	$result['where']['count'] = $result['where']['data']->count();
	    	$result['where']['isEmpty'] = $result['where']['data']->isEmpty();
	    	$result['where']['isNotEmpty'] = $result['where']['data']->isNotEmpty();

	    dd($result);
    }
}
