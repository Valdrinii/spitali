<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Appointment extends Eloquent
{
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}