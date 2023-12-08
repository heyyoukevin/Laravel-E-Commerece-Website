<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\item;

class ItemController extends Controller
{
    public function additem()
    {
        return view('additem');
    }

    public function aditem(Request $request)
    {
        $this->validate($request,[
            
            'pname' => 'required',
            'pdesc' => 'required',
            'pimg' => 'required',
            'pprice' => 'required',
        ]);

        $getpname=request('pname');
        $getpdesc=request('pdesc');
        $getpimg=request('pimg');
        $getpprice=request('pprice');
        
       
       
        $user=new item();


        $user->pname=$getpname;
        $user->pdesc=$getpdesc;
        if(request()->hasfile('pimg'))   
        {
            $extension= request('pimg')->extension();
            $filename = 'prod_image_'.time().'.'.$extension;
            request('pimg')->move('uploads/itemimages/',$filename);
            $user->pimg=$filename;
        }
        $user->pprice=$getpprice;


        $user->save();
        return redirect('/viewitem');
    }


}
