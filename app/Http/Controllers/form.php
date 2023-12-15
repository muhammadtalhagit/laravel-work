<?php

namespace App\Http\Controllers;
use App\Models\FormModel;
use Illuminate\Http\Request;

class form extends Controller
{
    function reg(){
        return view('form');
    }

    public function register_data(Request $request){
        // print_r($request->all());
        // return view('form');
        $request->validate([
            'name'=> 'required',
            'email'=> 'required | email',
            'password'=> 'required'
        ]);
        $data = new FormModel();
        $data->name = $request['name'];
        $data->email = $request['email'];
        $data->password = $request['password'];
        $data->save();
        // return redirect('/form');
        return redirect('/userdata');
    }
public function show_user(){
    $records = FormModel::all();
    // echo '<pre>';
    // print_r($records->toArray());
    $userdata = compact('records');
    return view('show_user')->with($userdata);
}
                // for delete

public function dlt($id){
    $records = FormModel::find($id);
   if(!is_null($records)){
    $records->delete();
    return redirect('/userdata');

   }else{
    return redirect('/userdata');
   }

    // dd($records);
}

public function edit($id){
    $editdata = FormModel::find($id);
    $data = compact('editdata');
    return view('user-edit')->with($data);

}


}
