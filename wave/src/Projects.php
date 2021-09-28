<?php

namespace Wave;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public function link(){
    	return url('/projects/' . $this->owner . '/' . $this->slug);
    }

    public function user(){
        return $this->belongsTo('\Wave\User', 'owner');
    }

    public function image(){
    	return \Voyager::image($this->image);
    }

}
