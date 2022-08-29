<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booklist;

class Book extends Model
{
    use HasFactory;

    protected $guarded=[];
    public function setFilenamesAttribute($value){
        $this->attributes['file']=json_encode($value);
    }
     public function booklist(){
        return $this->belongsTo(Booklist::class);
    }

}