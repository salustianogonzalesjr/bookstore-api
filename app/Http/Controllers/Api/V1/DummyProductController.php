<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\DummyJsonApiService;

class DummyProductController extends Controller
{
    private $dummyJsonApiService;

    public function __construct(DummyJsonApiService $dummyJsonApiService)
    {
        $this->dummyJsonApiService = $dummyJsonApiService;
    }
    
    public function index()
    {
        $data = $this->dummyJsonApiService->getResourceData();

        return response()->json($data, 200);
        
    }    

}
