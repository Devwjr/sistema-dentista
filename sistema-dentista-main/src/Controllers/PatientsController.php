<?php 

namespace App\Controllers;
use App\Models\PatientsModels;

class PatientsController {

    private $patientsModel;

    private $patientsArray = [];

    public function __construct() {

        $this->patientsModel = new PatientsModels();

    }

    public function list() {
        
        $patients = $this->patientsModel->getAllPatients();
        $patientsArray = [];
    
        foreach ($patients as $patient) {
            $patientsArray[] = [
                'id' => $patient['id'],
                'nome' => $patient['nome'],
                'email' => $patient['email'],
                'telefone' => $patient['telefone'],
                'data_nascimento' => $patient['data_nascimento']
            ];
        }

        $this->render('pacientes', ['results' => $patientsArray]);
    }
    
    private function render($view, $data = []){
        extract($data);
        require_once __DIR__ . "/../Views/{$view}.php";
    }
    

}