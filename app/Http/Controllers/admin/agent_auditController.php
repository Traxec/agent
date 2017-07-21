<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class agent_auditController extends Controller
{
    public function index(){
        return view('admin.agent_audit');
    }
}
