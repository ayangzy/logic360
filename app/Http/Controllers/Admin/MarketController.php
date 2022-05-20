<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\MarketService;
use App\Http\Requests\CreateMarketRequest;

class MarketController extends Controller
{
    private $marketService;
    public function __construct(MarketService $marketService)
    {
        $this->marketService = $marketService;
    }


    public function index()
    {
        return view('admin.markets.index');
    }

    public function loadPartial()
    {
        $markets = $this->marketService->dataDatables();
        return view('admin.markets.partials._table-data', compact('markets'));
    }

    public function upsert($id)
    {
        $market = $this->marketService->upsert($id);
        $locations = Location::query()->get();
        return view('admin.markets.partials._upsert', compact('market', 'locations'));
    }


    public function store(CreateMarketRequest $request)
    {

        $this->marketService->store($request->validated());

        return $this->successResponse('Market added successfully');
       
    }

   
    public function update(Request $request, $id)
    {
        $this->marketService->update($request, $id);

        return $this->successResponse('Market updated successfully');
        
    }

   
    public function destroy($id)
    {
        $this->marketService->delete($id);

        return $this->successResponse('Market deleted successfully');
    }
}
