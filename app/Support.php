<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $table = 'supports';
    protected $fillable = ['user_id', 'subject', 'message', 'status'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function supportreplies()
    {
        return $this->hasMany('App\SupportReply', 'support_id');
    }
}
