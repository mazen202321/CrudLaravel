<?php
namespace App\Http\Reprositry;


use App\Http\Interfaces\ClientsInterFace;
use App\Models\Client;
use Illuminate\Support\Facades\Session;
class ClientsRepositry implements ClientsInterFace{
    protected $ClientModel;
    public function __construct(Client $client) {
        $this->ClientModel = $client;
    }


    public function index()
    {
        $clients = $this->ClientModel::get();
        return view('Clients.index', compact('clients'));
    }
    public function create()
    {
        return view('Clients.create');
    }
    public function store($requst)
    {
        $this->ClientModel::create([
            'name' => $requst->name,
            'email' => $requst->email,
            'phone' => $requst->phone
        ]);

        return $this->msgFlash('client has created successfuly');
    }

    public function edite($id)
    {
        $client = $this->ClientModel::findOrfail($id);
        return view('Clients.edite', compact('client'));
    }
    public function update($requst)
    {
        $client = $this->ClientModel::findOrfail($requst->id);
        if ($client) {
            $client->fill([
                'name' => $requst->name,
                'email' => $requst->email,
                'phone' => $requst->phone
            ]);
            $client->save();

            return $this->msgFlash('client updated sucssesfuly');
        } else {
            return redirect()->back();
        }
    }
    public function delete($requst)
    {
        $client = $this->ClientModel::findOrfail($requst->id);
        $client->deleteOrfail();
        return $this->msgFlash('client deleted successfuly');
    }
    public function msgFlash($msg)
    {
        Session::flash('msg', $msg);
        return redirect(route('clients.index'));
    }
}

?>
