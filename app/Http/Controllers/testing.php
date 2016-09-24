<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\customer;
use Illuminate\Support\Facades\Input;
use DB;

class testing extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("insert");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new customer;
        $user->name=Input::get("name");
        $user->email=Input::get("email");
        $user->country=Input::get("country");
        $user->gender=Input::get("gender");
        $user->favorite=implode(",",Input::get("favorite"));

        if (Input::hasFile('image')) {
            $files = Input::file('image');
            $name = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$name);
            $user->image=$name;
        }
        $user->save();
        return "databasada saxlandi";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

  public function showall()
    {
        $user = customer::all();
        return view("viewall",compact('user'));
    }

    public function show($name)
    {

        $user = DB::table("customers")->where('name',$name)->first();
        // $user = customer::find($id);

        return view('customername', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
    $user = DB::table("customers")->where('name',$name)->first();
        // $user = customer::find($id);

        return view('update', compact('user'));
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
        // dd($request->all());
      $user =  customer::find($id);
        $user->name=Input::get("name");
        $user->email=Input::get("email");
        $user->country=Input::get("country");
        $user->gender=Input::get("gender");
    

        if (Input::hasFile('image')) {
            $files = Input::file('image');
            $name = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$name);
            $user->image=$name;
        }
        $user->save();
        return "databasada saxlandi";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

       
        $user = customer::find($id);
        $user->delete();
        return redirect("showall");  
    }
}
