<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TablaController extends Controller
{
    function index()
    {
        try{
            //creamos un cliente que puede crear una petición.
            $client = new Client (['verify'=> false]);

            //trae info API
            //$request =$client->(url);
            //$responde=json_decode(request->getBody()getContents());
            return view('usersLicencias');
        }catch(RequestException $e){
            return null;
        }

    }
}
