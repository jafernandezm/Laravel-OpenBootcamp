<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//data base
use Illuminate\Support\Facades\DB;

use App\Models\ModelTable;
use App\Models\User;
use App\Models\UserRole;

class DatabaseController extends Controller
{
    public function index(){
        //$users= User::whereNotNull('email_verified_at')->orWhere('id','>',3)->with(['role'])->get();
        $users= User::with(['role'])->get();
        
      
    }
}
