<?php


namespace App\Http\Controllers;
use App\Store;
use Illuminate\Support\Facades\Validate;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $s = Store::orderByRaw('name, location')->get();
        return view('stores.index', ['stores'=>$s]);
    }


    

    public function create(){
        return view('stores.create');
    }

    public function new(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'location'=>'required',
            'owner'=>'required',
            'net_worth'=>'required'

        ]);

        Store::create([
            'name'=> $request['name'],
            'location'=> $request['location'],
            'owner'=> $request['owner'],
            'net_worth'=> $request['net_worth']
        ]);

        return redirect('/stores')->with('info', 'A new Store has been created.');

    
        }    

}
