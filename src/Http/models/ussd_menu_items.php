<?php

namespace leyo\rapidussd\Http\models;
use Illuminate\Database\Eloquent\Model;

class ussd_menu_items extends Model {

    protected $fillable = ['menu_id','description','type','next_menu_id','step','confirmation_phrase'];


}
