<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function AddDisplay($data)
    {
        DB::table('students')->insert($data);
    }
    public function deleteStudent($id)
    {
        DB::table('students')->where('Id',$id)->delete();
    }
    public function updateStudent($id,$data)
    {
        DB::table('students')->where('Id',$id)->update($data);
    }
    public function uStudent($id)
    {
        DB::table('students')->where('Id',$id)->get()->first();
        return $data;
      
    }
}
