<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 5/18/2018
 * Time: 9:50 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
    public function addStudent(){

        $rollnumber = Input::get('rollnumber');
        $name = Input::get('name');
        $phone = Input::get('phone');
        $email = Input::get('email');
        DB::insert('insert into students(rollnumber,name,phone,email) value (?,?,?,?)',[$rollnumber,$name,$phone,$email]);
        return view('list');
    }

}