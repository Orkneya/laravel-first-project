<?php

namespace App\Http\Controllers;

use App\Models\Toys;
use Illuminate\Http\Request;

class ToysController extends Controller
{
    public function index()
    {
$toy = Toys::find(1);
        dd ($toy);

        // dump($str);
        // var_dump($str);
        // return 'My post';
        }
}
