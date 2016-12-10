<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peripheral;
use App\Models\TmpPeripheral;
use App\Models\Type;
use App\Models\Location;

class PeripheralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peripherals = Peripheral::all();
        return view('peripheral.index')->with('peripherals', $peripherals);
    }

    public function add_peripheral(Request $request)
    {
        $this->validate($request, [
            'barcode'  => 'required|unique:tmp_peripherals,barcode,NULL,id,user_id,'.user()->id
        ]);

//        dd($request->barcode);
        $count = TmpPeripheral::where('user_id', user()->id)->count();
//        dd($count);
        if($count > 0){
            if ($request->barcode == '111000'){
                $request->merge([
                    'user_id'   => user()->id
                ]);

                TmpPeripheral::create($request->all());

                return redirect()->route('peripheral.create');
            } else {
                $request->merge([
                    'user_id'   => user()->id
                ]);

                TmpPeripheral::create($request->all());

                return redirect()->route('peripheral.barcode');
            }
        } else {
            if($request->barcode == '000111'){
                $request->merge([
                    'user_id'   => user()->id
                ]);

                TmpPeripheral::create($request->all());

                return redirect()->route('peripheral.barcode');
            } else {
                flash()->error('Barcode tidak dikenali.');
                return redirect()->route('peripheral.index');
            }
        }
    }

    public function barcode()
    {
        $tmp_peripherals = TmpPeripheral::where('user_id', user()->id)->with('pic')->get();

        return view('peripheral.barcode')->with('tmp_peripherals', $tmp_peripherals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        $locations = Location::all();
        $tmp_peripherals = TmpPeripheral::where('user_id', user()->id)->get();
        return view('peripheral.create')
            ->with('tmp_peripherals', $tmp_peripherals)
            ->with('types', $types)
            ->with('locations', $locations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'barcode'   => 'required|unique:peripherals',
            'name'      => 'required',
            'location'  => 'required',
            'type'      => 'required'
        ]);


        if($request->type == 'new'){
            $this->validate($request, [
                'type_text'  => 'required'
            ]);

            $type_id = Type::create([
                'name' => $request->type_text
            ])->id;
            $request->merge([
                'type_id' => $type_id,
                'location_id'   => $request->location
            ]);
        } else {
            $request->merge([
                'type_id'       => $request->type,
                'location_id'   => $request->location
            ]);
        }
        $request->merge([
            'user_id' => user()->id
        ]);

        Peripheral::create($request->all());
        TmpPeripheral::where('user_id', user()->id)->delete();

        flash()->success('Success add peripheral.');
        return redirect()->route('peripheral.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
