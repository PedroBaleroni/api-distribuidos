<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model{

    public $timestamps = false;
    protected $fillable = ['name','director', 'duration'];

    public function Name(){
        return $this->name;
    }

    public function Director(){
        return $this->director;
    }

    public function Duration(){
        return $this->duration();
    }
}
