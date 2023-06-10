<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
class Department extends Eloquent
{
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}