<?php

namespace App\Http\Controllers;
use App\Http\Requests\RecordsRequest;
use App\Models\Record;
use App\Models\Stock;
use App\Models\Order;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Record::get();
        return view('record.index',compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stock=Stock::all();
        $order=Order::all();
        return view('record.create',compact('stock','order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecordsRequest $request)
    {
        $record=new Record();
        $record->create($request->input('record'));
        return redirect('/records');

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
    public function edit(Record $record)
    {
        $stock=Stock::all();
        $order=Order::all();
        return view('record.edit',compact('record','stock','order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Record $record)
    {
        $record->update($request->input('record'));
        return redirect('/records');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record=new Record();
        $record->find($id)->delete();
        return redirect('/records');
    }
}
