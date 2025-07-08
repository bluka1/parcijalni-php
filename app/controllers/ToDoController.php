<?php

namespace App\Controllers;

use App\Core\BaseController;
use App\Core\Database;
use PDO;
use PDOException;
use App\Models\ToDo;

use function App\Core\view;
use function App\Core\dd;


class ToDoController //extends \App\Core\BaseController
{
    private Database $db;
    private ToDo $model;

    public function __construct($dbinstance = null)
    {
        $this->model = new ToDo(); // Prosljeđivanje instance modela ToDo
        $this->db = $dbinstance ?? Database::getInstance(); // nisam znao kako proslijediti modelu?
    }
    public function index()
    {
        
        
        $todos =  $this->model->getAll();
       // dd($todos);
        view('todo/index', [
            'naslov' => 'To-Do List',
            'todos' => $todos // Ovdje bi trebali biti dohvaćeni zadaci iz baze
        ]);
    }
public function create()
    {
        $title = 'Dodaj novi zadatak'; // Ovdje možete postaviti naslov stranice
     
        view('todo/create', [
            'title' => $title
        ]);
    }   
    public function store()
    {
        $data = $_POST; // Dobivanje podataka iz POST zahtjeva

        $naslov = $data['naslov'] ?? null; 
        $opis = $data['opis'] ?? null; 
        $status = $data['status'] ?? '1'; 
        $createdAt = $data['createdAt'] ?? date('Y-m-d H:i:s'); // ne korisitm, ali može se dodati u model
            
     try {
           
            $this->model->create($naslov, $opis, $status);
            header('Location: /zadaci');
            exit;
        } catch (PDOException $e) {
            dd('Greška pri dodavanju zadatka: ' . $e->getMessage());
            return false;
        }
        
    }


    public function destroy()
    {
       $id = $_POST['id'] ?? null; 
        if ($id) {
           
            $result = $this->model->delete($id);
            if ($result) {
               
                header('Location: /zadaci');
                exit;
            } else {
                
                dd('Greška pri brisanju zadatka.');
            }
        } else {
            dd('ID zadatka nije naveden.');
        }   
    }
    public function edit()

    {
        $title = 'Uredi zadatak'; // Naslov stranice
        $id = $_GET['id']; // Dobivanje ID iz GET 
        
        $todo = $this->model->getById($id);
        if ($todo) {
            view('todo/edit', [
                'naslov' => 'Uredi zadatak',
                'todo' => $todo,
                'title' => $title
            ]);
        } else {
            dd('Zadatak s tim ID-om ne postoji.');
        }
    }
    public function update()
    {
        $data = $_POST; // Dobivanje podataka iz POST zahtjeva
        //dd($data);
        $id = $data['id'] ;
        $naslov = $data['naslov']; 
        $opis = $data['opis'] ; 
        $status = $data['status']; 

        if ($id) {
            try {
             
                $this->model->update($id, $naslov, $opis, $status);
                header('Location: /zadaci');
                exit;
            } catch (PDOException $e) {
                dd('Greška pri ažuriranju zadatka: ' . $e->getMessage());
                return false;
            }
        } else {
            dd('ID zadatka nije naveden.');
        }
    }

}