<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Counter::first();
		return response()->json([
		'allData' => $allData
		]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function increment()
    {
        $data = Counter::first();
        $data->count = $data->count + 1;
        $update = $data->update();
        if($update)
        {
            $message="Incremented successfully.";
            $status = 1;
            return response()->json([
                'message' => $message,
                'status' => $status
                ]);  
        }
        else
        {
            $message="Unable to incremented,please try again.";
            $status = 0;
            return response()->json([
                'message' => $message,
                'status' => $status
            ]); 
        }
    }
    public function decrement()
    {
        $data = Counter::first();
        $data->count = $data->count - 1;
        $update = $data->update();
        if($update)
        {
            $message="Decremented successfully.";
            $status = 1;
            return response()->json([
                'message' => $message,
                'status' => $status
                ]);  
        }
        else
        {
            $message="Unable to decremented,please try again.";
            $status = 0;
            return response()->json([
                'message' => $message,
                'status' => $status
            ]); 
        }
    }

    public function increment_100()
    {
        $data = Counter::first();
        $data->count = $data->count + 100;
        $update = $data->update();
        if($update)
        {
            $message="Incremented 100 successfully.";
            $status = 1;
            return response()->json([
                'message' => $message,
                'status' => $status
                ]);  
        }
        else
        {
            $message="Unable to incremented 100,please try again.";
            $status = 0;
            return response()->json([
                'message' => $message,
                'status' => $status
            ]); 
        }
    }
    public function decrement_100()
    {
        $data = Counter::first();
        $data->count = $data->count - 100;
        $update = $data->update();
        if($update)
        {
            $message="Decremented 100 successfully.";
            $status = 1;
            return response()->json([
                'message' => $message,
                'status' => $status
                ]);  
        }
        else
        {
            $message="Unable to decremented 100,please try again.";
            $status = 0;
            return response()->json([
                'message' => $message,
                'status' => $status
            ]); 
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function show(Counter $counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function edit(Counter $counter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Counter $counter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counter $counter)
    {
        //
    }
}
