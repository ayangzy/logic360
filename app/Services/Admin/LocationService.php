<?php

namespace App\Services\Admin;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationService
{
    public function dataDatables()
    {
        return Location::query()->with(['state:id,name'])->get();
    }

    public function upsert($id)
    {
        $location = new Location();
        if ($id != "new") {
            $location = Location::find($id);
        }
        return $location;
    }

    public function store(array $data)
    {
        return Location::create([
            'name' => $data['name'],
            'head_quarters' => $data['head_quarters']
        ]);
    }

    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        return $location->update($request->all());
    }


    public function delete($id)
    {
        $location = Location::findOrFail($id);
        return $location->delete();
    }
}