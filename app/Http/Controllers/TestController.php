<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Exhibit;
use App\Models\Hint;
use App\Models\Question;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function test()
    {

       $link=  \Share::load('aa', 'aa')->services('gplus');

        return $link['gplus'];
    }

}
