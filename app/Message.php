<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public $table = 'myfirsttable';
    public $timestamps = false;

    protected $fillable = [
        'guestname','date_received', 'message'
    ];

    private static $rules = [
           'guestname' => 'required',
           'message'   => 'required'
    ];

    private static $messages = [
           'guestname' => 'Guest Names should not be empty.',
           'message'   => 'The message area should not be empty.'
    ];

    public static function getValidRules(){
         return self::$rules;
    }

    public static function getValMessages(){
        return self::$messages;
    }
}
