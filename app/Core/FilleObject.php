<?php
namespace App\Core;

use Illuminate\Http\Request;

class FillObject
{
    public static  function filled(Request $request , $table , $fill)
    {
        foreach($fill as $attribute){
            $table->{$attribute} = $request->$attribute;
        }
        return $table ;
    }
}
