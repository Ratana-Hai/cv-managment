<?php

namespace App\Http\Controllers;

use App\Soldiers;
use App\Education;
use App\Greeting;
use App\health;
use App\JoinArmy;

use Auth;
use Illuminate\Http\Request;

class ArmiesController extends Controller
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
      $soldiers = Soldiers::with('Greeting:id,position,grade','Image:id,image')->get();
      return view('list',['soldiers' => $soldiers]);
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
    public function store(Request $request)
    {
        $army = new Soldiers();
        $educate = new Education();
        $Greeting = new Greeting();
        $health = new Health();
        $Join = new JoinArmy();

        if($request->get('fnamekh')){
          $army->khFname = $request->get('fnamekh');
          $army->khLname = $request->get('lnamekh');
          $army->engFname = $request->get('fname');
          $army->engLname = $request->get('lname');
          $army->birthName = $request->get('birthname');
          $army->otherName = $request->get('othername');
          $army->DOB = $request->get('dob');
          $army->sex = $request->get('sex');
          $army->bVillage = $request->get('bVillage');
          $army->bCommune = $request->get('bCommune');
          $army->bDistricts = $request->get('bDistricts');
          $army->bProvinces = $request->get('bProvinces');
          $army->cVillage = $request->get('cVillage');
          $army->cCommune = $request->get('cCommune');
          $army->cDistricts = $request->get('cDistricts');
          $army->cProvinces = $request->get('cProvinces');
          $army->image_id = $request->get('ImageID');


          $save = $army->save();
          if($save){
            $educate->soldierID = $army->id;
            $educate->educate = $request->get('education');
            $educate->foreignLang = $request->get('foreignLang');
            $educate->skill = $request->get('skill');
            $educate->passCourse = $request->get('passCourse');
            $educate->inCountry = $request->get('inCountry');
            $educate->outCountry = $request->get('outCountry');
            $educate->passFight = $request->get('passFight');
            $educate->is_delete = 0;
            $educate->save();
            $Greeting->soldierID = $army->id;
            $Greeting->grade = $request->get('grade');
            $Greeting->dateGrade = $request->get('dateGrade');
            $Greeting->position = $request->get('position');
            $Greeting->datePosition = $request->get('datePosition') ;
            $Greeting->unit = $request->get('unit');
            $Greeting->ethnicity = $request->get('ethnicity');
            $Greeting->nationality = $request->get('nationality');
            $Greeting->religion = $request->get('religion');
            $Greeting->is_delete = 0;


            $Greeting->save();
            $health->soldierID = $army->id;
            $health->health = $request->get('health');
            $health->healthDate =  $request->get('healthDate');
            $health->appreciate = $request->get('appreciate');
            $health->fines = $request->get('fines');
            $health->identity = $request->get('identity');
            $health->is_delete = 0 ;
            $health->save();
            $Join->soldierID = $army->id;
            $Join->joinDate = $request->get('joinDate') ;
            $Join->description = $request->get('description');
            $Join->is_delete = 0;
            $Join->save();

            return response()->json(['success' => true],200);

          }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Armies  $armies
     * @return \Illuminate\Http\Response
     */
    public function show(Armies $armies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Armies  $armies
     * @return \Illuminate\Http\Response
     */
    public function edit(Armies $armies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Armies  $armies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Armies $armies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Armies  $armies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $educate = Education::where('soldierID',$id);
        $educate->delete();
        $greet = Greeting::where('soldierID',$id);
        $greet->delete();
        $health = Health::where('soldierID',$id);
        $health->delete();
        $join = JoinArmy::where('soldierID',$id);
        $join->delete();
        $armies = Soldiers::find($id);
        $armies->delete();

        return response()->json(['success' => true],200);

    }
}
