<?php

namespace App\Http\Controllers;

use App\Transport;
use Illuminate\Http\Request;
class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $transports = Transport::where('courier_id', auth()->id())->get(); //select * from transports where owner_id =4 ;
        // return view('home', ['transports' => $transports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('transports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $atributes = request()->validate([
            
            'brand' => ['required', 'min:2'],
            'model' => ['required', 'min:1'],
            'registration_number' => ['required', 'min:3'],
            'year' => 'required'
        ]);
        $atributes['courier_id'] = auth()->id();

        // dd($atributes);
        Transport::create($atributes);

        // $transport = new Transport();
        // $transport->brand = request('brand');
        // $transport->model = request('model');
        // $transport->registration_number = request('registration_number');
        // $transport->year = request('year');
        // $transport['courier_id'] = auth()->id();
        // $transport->save();
        
        // Transport::create($attributes);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function show(Transport $transport)
    
    {
        return view('transports.show', compact('transport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function edit(Transport $transport)
    {
        // dd($transport->id);
        return view('transports.edit', compact('transport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transport $transport)
    {
        $transport->update(request([
            'brand',
            'model',
            'registration_number',
            'year',
        ]));
        return view('transports.show',compact('transport'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transport $transport)
    {
        // dd($transport->id);
        $transport->delete();
        return redirect('home');
    }
}
