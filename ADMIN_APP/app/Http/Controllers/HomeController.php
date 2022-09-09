<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Implementations\HomeRepository;
use App\Repositories\Implementations\UsersRepository;

class HomeController extends Controller
{
    protected $_homeRepository;
    //protected $_usersRespository;

    public function __construct(HomeRepository $homeRespository)
    {   
        $this->_homeRepository = $homeRespository;
       // $this->_usersRespository = $usersRespository;
    }

    public function index(){
        $this->_homeRepository->helloWordl();
        $this->_homeRepository->getUserRepository()->helloWordl();
        die();
        return view('panel.index');
    }
}
