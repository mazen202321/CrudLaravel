<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientDeletedRequest;
use App\Http\Requests\ClientsStoreRequst;
use App\Http\Requests\ClientUpdateRequest;
use App\Http\Interfaces\ClientsInterFace;

class ClientsController extends Controller
{
    protected $clientInterFace;
    public function __construct(ClientsInterFace $clientInterface) {
       return  $this->clientInterFace = $clientInterface;
    }
    public function index()
    {
       return $this->clientInterFace->index();
    }
    public function create()
    {
      return $this->clientInterFace->create();
    }
    public function store(ClientsStoreRequst $requst)
    {
       return $this->clientInterFace->store($requst);
    }

    public function edite($id)
    {
      return $this->clientInterFace->edite($id);
    }
    public function update(ClientUpdateRequest $requst)
    {
       return $this->clientInterFace->update($requst);
    }
    public function delete(ClientDeletedRequest $requst)
    {
       return $this->clientInterFace->delete($requst);
    }

}
