<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Patient extends Eloquent
{
    public function appointments(){
        return $this->hasMany(Appointment::class);
    }



}