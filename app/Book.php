<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Request;

class Book extends Model
{
    //
    //protected $table = '<table name>';
    protected $primaryKey = 'isbn';
    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
          'isbn',
          'bookTitle',
          'bookAuthor'
    ];

    protected $guarded =[];

    private static $rules = [
        'isbn' => "required|numeric|unique:books,isbn",
        'booktitle' => "required",
        'bookauthor' => "regex:/^[A-Za-z \-\.Ññ]+/"
    ];

    private static $messages = [
        'isbn.required' => 'The ISBN must not be empty.',
        'isbn.numeric' => 'The ISBN must not contain alphabetic characters.',
        'isbn.unique' => 'The ISBN already exists on file.',
        'booktitle' => 'The Title must not be empty.',
        'bookauthor' => 'Numbers not allowed for author names.'
    ];

    public static function getBookRules($mode){
        if($mode === 'edit'){
          $temp_array = array_shift(self::$rules);
          return self::$rules;
        }
        else
          return self::$rules;
    }

    public static function getRuleMessages(){
        return self::$messages;
    }

    public static function getAllBooks(){
        return self::paginate(5);
    }

    public static function searchBookID($bookID){
        return self::find($bookID);
    }
}
