<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB; 

class MyController extends Controller
{
    
    public function show()
    {
        return view('lgn');
    }
    public function display(Request $req)
    {
       
        $req->validate([
            'username'=>'required | regex:/^[a-z A-Z]+$/u | max:10',
            'userpassword'=>'required | min:5',
            'usercontact'=>'required',

        ]);
       // $userName =  $req->input('username');
        //$userPassword= $req->input('userpassword');

       // return view('myview')->with('user',$userName);
      // return view('myview',['user'=>$userName,'pass'=>$userPassword]);

      $ss = new Student();
      $ss->name= $req->username;
      $ss->email= $req->userpassword;
      $ss->contact= $req->usercontact;
      $ss->save();
      //return back()->with('success','Registration Successfully');
      return redirect('data')->with('success','Registration Successfully');;
    }

    public function GetData()
    {
        $data= Student::all();
       // return view('MyList',['member'=>$data]);

       return response()->json($data);
       //return['member'=>$data];


    }

    public function EditExample($id)
    {
       
        $data = Student::find($id);
        return view('MyEdit',['da'=>$data]);

    }
    public function MySave(Request $req)
    {

    $ss=Student::find($req->id);
    $ss->name= $req->username;
    $ss->email= $req->userpassword;
    $ss->contact= $req->usercontact;
    $ss->save();
    return back()->with('update','update Successfully');
    
    }

    public function delete($id)
    {
       $data=Student::where('id',$id)->delete();
       return redirect('data');


    }

    public function AddDisplay(Request $req)
    {
        $ss = new Student();
      $data=$ss->AddDisplay($req->all());
      
    }
    public function deleteStu(Request $req)
    {
      $id=$req->id;
      $ss = new Student();
      $data=$ss->deleteStudent($id);
      
    }
    public function updateStu(Request $req )
    {
        $id =$req->id;
        $ss = new Student();
        $ss->updateStudent($id,$req->all());
      
    }

    public function getOneStudent(Request $req )
    {
        $id =$req->id;
        echo $id;
        $ss = new Student();
       $data= $ss->uStudent($id);
       return response()->json($data);
       
    }
   



   
}
