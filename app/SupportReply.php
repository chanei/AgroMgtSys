<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupportReply extends Model
{
    protected $table = 'support_replies';

    protected $fillable = ['support_id', 'user_id', 'reply'];

    public function support()
    {
        return $this->belongsTo('App\Support', 'support_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
