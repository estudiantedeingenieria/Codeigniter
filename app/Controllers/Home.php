<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }


public function persona1(){


    $variable= array(

        "id"=>"1",
        "nombres"=>"Jorge Luis",
        "apellidos"=>"Chasipanta Llulluna",
        "cedula"=>"1714142591"


    );


return $this->response->setJson($variable);
}

public function persona2(){


    $variable= array(

        "id"=>"2",
        "nombres"=>"Becsy Cecibel",
        "apellidos"=>"Loor Rubio",
        "cedula"=>"2300371982"


    );


return $this->response->setJson($variable);
}

public function persona3(){


    $variable= array(

        "id"=>"3",
        "nombres"=>"Maria Isabel",
        "apellidos"=>"Garcia Gutierrez",
        "cedula"=>"2300398910"


    );


return $this->response->setJson($variable);
}

public function persona4(){


    $variable= array(

        "id"=>"4",
        "nombres"=>"Maria Ines",
        "apellidos"=>"Ushina Ushina",
        "cedula"=>"1723398910"


    );


return $this->response->setJson($variable);
}

}
