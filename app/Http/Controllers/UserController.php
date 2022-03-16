<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistartion;
use App\Mail\WelcomeMail;
use App\Models\UserReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("register.index");
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
    public function store(UserRegistartion $request)
    {
        $reg = new UserReg();
        $reg->name = $request->name;
        $reg->email =$request->email;
        $reg->phone =$request->phone;

        $email =$request->get("email");
         $data =([
            'name' =>  $request->get('name'), 
            'email' => $request->get('email'),
            'phone' =>$request->get('phone')
         ]);

      Mail::to($email)->queue(new WelcomeMail($data));
        $reg->save();
        return redirect()->back()->with('success','Registration Successfully Done Please Check Email');
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
