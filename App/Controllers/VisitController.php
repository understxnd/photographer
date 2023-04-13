<?php

namespace App\Controllers;

use App\Models\VisitModel;
use Framework\Container;
use Framework\Controller;
use Framework\Request;


//use UserModel;

class VisitController extends Controller
{
    public function index(Request $request){
        return $this->view('visits.php', ['user' =>  $request->getUser(), 'message' => $request->getSession()['msg'], 'visits' => VisitModel::all()]);

    }

}
