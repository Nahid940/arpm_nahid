<?php

namespace App\Http\Controllers;

use App\Services\CollectionsService;
use Illuminate\Http\Request;

class CollectionOutputController extends Controller
{
    //

    public function output(CollectionsService $collectionsService)
    {
        $output = $collectionsService->dataProcessor();
        echo "<pre>";print_r($output);
    }
}
