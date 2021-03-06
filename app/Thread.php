<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Thread extends Model
{
    protected $fillable = array('user_id', 'title', 'body');
    /**
     * Fetch a path to the current thread.
     *
     * @return string
     */
    public function path()
    {
        return '/threads/' . $this->id;
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}