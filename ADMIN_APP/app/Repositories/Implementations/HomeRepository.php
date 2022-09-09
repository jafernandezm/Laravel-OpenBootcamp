<?php
    namespace App\Repositories\Implementations;

    class HomeRepository{
        protected $_usersRespository;

        public function __construct(UsersRepository $usersRepository)
        {
            $this->_usersRespository = $usersRepository;
        }
        public function getUserRepository(){
            return $this->_usersRespository;
        }
        public function helloWordl(){
            echo "hola mundo";
        }
    }
?>