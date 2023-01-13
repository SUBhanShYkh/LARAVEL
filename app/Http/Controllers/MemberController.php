<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        return view('crud.add');
    }
    public function store(Request $request)
    {   $db_obj =new member();

        $db_obj->name = $request->name;
        $db_obj->lname = $request->lname;
        $db_obj->email = $request->email;
        $db_obj->pswd = md5($request->Password);
        $db_obj->phone = $request->phone;
        toast('Member added','success')->position('top-right');
        $db_obj->save();
        return redirect('Member-List!');
    }
    public function show(member $member)
    {
        return view('crud.members',["controller_obj"=>member::all()]);
    }
    public function delete(string $name,Int $id)
    {
        $db_obj = member::find($id);
        $db_obj->delete();
        toast('Member Deleted','success')->position('top-right');
        return redirect('Member-List!');


     }
    public function edit(string $name,Int $id)
    {
        $db_obj = member::find($id);

        return view('crud.update',["controller_obj"=>$db_obj]);
     }

    public function update(Request $request)
    {   $db_obj =member::find($request->id,);
        $db_obj->name =$request->name;
        $db_obj->lname = $request->lname;
        $db_obj->email = $request->email;
        $db_obj->pswd = md5($request->Password);
        $db_obj->phone = $request->phone;
        $db_obj->save();
        toast('Success Toast','Member Updated')->position('top-right');
        return redirect('Member-List!');
     }
}
