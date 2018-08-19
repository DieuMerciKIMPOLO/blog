<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model{
    //Pour eviter le probleme lie au updated_at et created_at
    public $timestamps =false;
    public $fillable=['title','body'];
}