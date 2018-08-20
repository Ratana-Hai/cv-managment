<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Greeting;
use App\Soldiers;
use Carbon\Carbon;


class GreetingController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return view('grade');
    }
    public function searchArmy(Request $request){
      $lnamekh = $request->get('lnamekh');
      $fnamekh = $request->get('fnamekh');
      $army = Soldiers::with('Greeting','Education:soldierID,skill,foreignLang','JoinArmy:soldierID,joinDate','Image:id,image')->where(['khLname'=>$lnamekh,'khFname'=>$fnamekh])->get()->last();
      $greet = Greeting::where('soldierID',$army->id)->get();
      return response()->json(['success' => true,'army'=>$army,'greet'=>$greet],200);
    }
    public function upGrade(Request $request){

      $id =$request->get('upid');
      $greet = Greeting::find($id);
      $greet->is_delete = 1;
      $save = $greet->save();
      if($save){

      $upgrade = new Greeting();
      $upgrade->soldierID = $request->get('upsoldierID');
      $upgrade->grade = $request->get('upgrade');
      $upgrade->dateGrade = $request->get('updateGrade');
      $upgrade->position = $request->get('upposition');
      $upgrade->datePosition = $request->get('updatePosition');
      $upgrade->unit = $request->get('upunit');
      $upgrade->ethnicity = $request->get('upethnicity');
      $upgrade->nationality = $request->get('upnationality');
      $upgrade->religion = $request->get('upreligion');
      $upgrade->is_delete = 0;

      $upgrade->save();


      return response()->json(['success' => true,'dataArmy'=>$upgrade],200);
      }
    }

}
