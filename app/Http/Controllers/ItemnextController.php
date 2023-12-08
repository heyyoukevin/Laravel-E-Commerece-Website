<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\item;

use DB;
use Session;

class ItemnextController extends Controller
{
    public function viewitem()
    {
     $user=item::all();
     return view('viewitem',compact('user'));
    }



    public function edititem($id)
    {
    $user=item::find($id);
    return view('edititem',compact('user'));
    }



    public function updateitem(Request $request)
    {
        $updating=DB::table('items')->where('id',$request->input('id'))->update([
        
            'pname'=>$request->input('pname'),
            'pdesc'=>$request->input('pdesc'),
            'pimg'=>$request->input('pimg'),
            'pprice'=>$request->input('pprice'),
        ]);
           return redirect('/viewitem');
    }


    
    public function deleteitem($id)
    {
        $user=item::find($id);
        $user->delete();
        return redirect('/viewitem');
    }
}
