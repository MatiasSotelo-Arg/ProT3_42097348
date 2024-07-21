<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        $data['titulo']='Pagina Principal';
        echo view('front/head_view', $data);
        echo view('front/bienvenidos_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function quienes_somos() 
    {
        $data['titulo']='Quienes Somos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos_view.php');
        echo view('front/footer_view');
    }
    public function acerca() 
    {
        $data['titulo']='Acerda de';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acerca_view.php');
        echo view('front/footer_view');
    }
    public function login() 
    {
        $data['titulo'] = 'login'; 
        echo view('front/head_view', $data); 
        echo view('front/navbar_view'); 
        echo view('back/usuario/login');
        echo view('front/footer_view'); 
    }
    public function registro() 
    {
        $data['titulo'] = 'registro'; 
        echo view('front/head_view', $data); 
        echo view('front/navbar_view'); 
        echo view('back/usuario/registro');
        echo view('front/footer_view'); 
    }
}
