<?php
namespace App\Http\Interfaces;

interface ClientsInterFace{

    public function index();
    public function create();
    public function store($requst);
    public function edite($id);
    public function update($requst);
    public function delete($requst);

}


?>
