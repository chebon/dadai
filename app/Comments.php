<?php  namespace App;
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 15/11/20
 * Time: 02:45
 */



use Illuminate\Database\Eloquent\Model;

class Comments extends Model {

    //comments table in database
    protected $guarded = [];

    // user who has commented
    public function author()
    {
        return $this->belongsTo('App\User','from_user');
    }

    // returns post of any comment
    public function post()
    {
        return $this->belongsTo('App\Posts','on_post');
    }

}