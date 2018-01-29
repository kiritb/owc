<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;

class CarController extends Controller
{
    public function __construct()
    {
        
    }

    public function getAllCars(){
       $m = new \MongoDB\Client("mongodb://127.0.0.1/");
       $mongoCollection = $m->selectCollection('owo', 'car');
       $cursor = $mongoCollection->find();
       foreach($cursor as $document) 
       {
            $bson = \MongoDB\BSON\fromPHP($document);
            echo \MongoDB\BSON\toJSON($bson), "\n";
       }
    }
    
}
