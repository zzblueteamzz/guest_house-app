<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\HouseType;
use App\Models\Location;
use Illuminate\Http\Request;

class HouseTypeController extends Controller
{
    public function index(){
        $house_types =  HouseType::all();
        return view('house_types.index')->with(['house_types' => $house_types]);
    }

    public function create()
    {
        return view('house_types.create');
    }

    public function store(HouseTypeRequest $request)
    {
        $data = $request->except('_method', '_token');
        HouseType::create($data);

        return redirect(route('house_types.index'));
    }

    public function edit($id)
    {
        $house_types =  HouseType::find($id);
        return view('house_types.edit')->with(['house_types' => $house_types]);
    }

    public function update(HouseTypeRequest $request, $id)
    {
        $data = $request->except('_method', '_token');
        $house_types =  HouseType::find($id);
        if ($house_types){
            $house_types->update($data);
        }
        return redirect()->action([HouseTypeController::class, 'index']);
    }

    public function delete($id){
        $house_types =  HouseType::find($id);
        if ($house_types){
            $house_types->delete();
        }
        return redirect()->back();
    }
}

