<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soldiers extends Model
{
  public function Greeting(){
  return $this->belongsTo(Greeting::class,'id','soldierID')->where('is_delete',0);
  }
  public function ArmyGreeting(){
  return $this->hasMany(Greeting::class,'id','soldierID');
  }
  public function Education(){
  return $this->belongsTo(Education::class,'id','soldierID');
  }
  public function Health(){
  return $this->belongsTo(Health::class,'id','soldierID');
  }
  public function JoinArmy(){
  return $this->belongsTo(JoinArmy::class,'id','soldierID');
  }
  public function Image(){
  return $this->belongsTo(ImageProfile::class,'image_id','id');
  }
}
