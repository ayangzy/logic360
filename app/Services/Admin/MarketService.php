<?php

namespace App\Services\Admin;

use App\Models\Market;
use Illuminate\Http\Request;

class MarketService
{
    public function dataDatables()
    {
        return Market::query()->with(['location:id,name'])->get();
    }

    public function upsert($id)
    {
        $market = new Market();
        if ($id != "new") {
            $market = Market::find($id);
        }
        return $market;
    }

    public function store(array $data)
    {
        return Market::create([
            'location_id' => $data['location_id'],
            'name' => $data['name'],
        ]);
    }

    public function update(Request $request, $id)
    {
        $market = Market::findOrFail($id);
        return $market->update($request->all());
    }


    public function delete($id)
    {
        $market = Market::findOrFail($id);
        return $market->delete();
    }
}