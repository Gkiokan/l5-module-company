<?php

namespace Gkiokan\Company;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $table = 'company';

    protected $fillable = [
      'name', 'hr', 'owner',
      'street', 'plz', 'city', 'state', 'country',
      'tel', 'fax', 'email_info', 'email_support'
    ];

    public function owner(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }


}
