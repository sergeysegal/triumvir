<?php

namespace App\Http\Controllers;

use App\Demo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class DemoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('demos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg'
        ]);

        $id = Auth::user()->id;

        $file = $request->file('file');

        if(isset($_FILES['file'])){
            Storage::putFileAs("public/users/$id",$file, 'file.jpg');
        }

//        $demo = new Demo();


        return redirect()->route('demos.mobile-net-images');
//        return view('demo', compact('id'));
    }

    public function mobileNet() {
        return view('demos.mobile-net-images');

    }

    public  function pipeline() {
        return view('demos.pipeline');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function show(Demo $demo)
    {
//        return "hello";
//        return view('demos.mobile-net-images');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function edit(Demo $demo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demo $demo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demo  $demo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demo $demo)
    {
        //
    }
}
