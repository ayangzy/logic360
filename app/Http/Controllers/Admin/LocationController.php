<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\LocationService;
use App\Http\Requests\CreateLocationRequest;

class LocationController extends Controller
{
    private $locationService;
    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }


    public function index()
    {
        return view('admin.locations.index');
    }

    public function loadPartial()
    {
        $locations = $this->locationService->dataDatables();
        return view('admin.locations.partials._table-data', compact('locations'));
    }

    public function upsert($id)
    {
        $location = $this->locationService->upsert($id);

        return view('admin.locations.partials._upsert', compact('location'));
    }


    public function store(CreateLocationRequest $request)
    {

        $this->locationService->store($request->validated());

        return $this->successResponse('Location added successfully');
       
    }

   
    public function update(Request $request, $id)
    {
        $this->locationService->update($request, $id);

        return $this->successResponse('Location updated successfully');
        
    }

   
    public function destroy($id)
    {
        $this->locationService->delete($id);

        return $this->successResponse('Location deleted successfully');
    }
}
