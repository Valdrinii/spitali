<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Doctor extends Eloquent
{
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
}