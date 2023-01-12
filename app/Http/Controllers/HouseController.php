<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseRequest;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        $house = House::all();
        return view('houses.index')->with(['houses' => $house]);
    }

    public function create()
    {
        return view('houses.create');
    }

    public function store(HouseRequest $request)
    {
        $data = $request->except('_method', '_token');
        House::create($data);

        return redirect(route('houses.index'));
    }

    public function edit($id)
    {
        $house = House::find($id);
        return view('houses.edit')->with(['house' => $house]);
    }

    public function update(HouseRequest $request, $id)
    {
        $data = $request->except('_method', '_token');
        $house = House::find($id);
        if ($house)
        {
            $house->update($data);
        }
        return redirect()->action([HouseController::class, 'index']);
    }

    public function delete($id)
    {
        $house = House::find($id);
        if ($house)
        {
            $house->delete();
        }
        return redirect()->back();
    }
}
