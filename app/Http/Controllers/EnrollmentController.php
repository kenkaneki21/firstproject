<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entity;
class EnrollmentController extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth');
    }
    public function index($id){
   	$entities = Entity::find($id);
    return view('admin.enrolment.enroll',compact('entities'));
    }
}
