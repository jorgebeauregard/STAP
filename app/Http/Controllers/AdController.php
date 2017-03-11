<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;
use App\User;
use App\Category;
use Carbon\Carbon;
use Auth;


class AdController extends Controller
{
    public function index(){
    	return view('ads.index',['ads'=> Ad::all(),'id'=> Auth::user()->getId()]);
    }

    public function create(){
    	$client_names = Category::select('name')->get();
    	foreach($client_names as $client_name){
    		$names[] = $client_name->name;
    	}

    	//clients are the clients in the db to associate the ad with
    	return view('ads.create',['clients' => $names]);
    }

	public function store(Request $request){
		$this->validate($request, [
			"category_id" => "required|string",
			"path" => "required|image",
			"quantity" => "required|string",
			"limit" => "required|string",
			]);

		if($request->hasFile("path")){
            $path = $request->path->store('public');
        }
        else{
            $request->session()->flash('error', "No ha subido la imagen del anuncio");
            return back()->withInput();
        }

        //Get client_id
        $user_id = Auth::user()->getId();
        //The controller will receive a string of the client, we have to get the id of it.

        //Name gets the name from request. client_id should be client_name but meh
        $category_index = $request->category_id;

        $category_names = Category::select('name')->get();
        foreach($category_names as $category_name){
            $names[] = $category_name->name;
        }

        $category_id = Category::where('name', $names[$category_index])->first()->id;

        //Check for duplicated images
        $duplicatedImage = Ad::where('path',$request->path)->count();

        if($duplicatedImage == 0){
            Ad::create([
                "user_id" => $user_id,
                "category_id" => $category_id,
                "path" => $path,
                "quantity" => $request->quantity,
                "limit" => $request->limit,
                "active" => true,
            ]);
        }
        else{
            $request->session()->flash('error', "Este anuncio ya existe");
            return back()->withInput();
        }
        $request->session()->flash('message', "Anuncio creado con exito");
        return redirect()->route('ads.index');
	}

    public function show($id){
        $ad  = Ad::find($id);
        return view('ads.show', ['ad' => $ad]);
    }

    public function edit($id){
        $clientIndex = $request->client_id;

        $clients = User::select('name')->get();
        foreach($clients as $client){
            $clients_names[] = $client->name;
        }

        $ad = Ad::where('id',$id)->firstOrFail();

        return view('ad.edit',['ad'=>$ad, 'clients'=>$clients_names]);
    }

    public function update(Request $request, $id){
        $ad  = Ad::where('id',$id)->firstOrFail();
        $this->validate($request, [
            "client_id" => "required|string",
            "path" => "image",
            "quantity" => "required|string",
            "limit" => "required|string",
            "active" => "required|string",
        ]);

        $updating = $request->all();

        if($request->hasFile('path')){
            $updating['path'] = $request->image->store("public");
        }

        $clientIndex = $request->client_id;
        $clients = User::select('name')->get();
        foreach($clients as $client){
            $clients_names[] = $client->name;
        }
        $client_id = User::where('name', $clients_names[$clientIndex])->first()->id;
        $updating['client_id'] = $client_id;

        //gets the count and inverses it
        $duplicatedImage = Ad::where('image',$request->image)->where('id','<>',$id)->count();

        if($duplicatedImage == 0){
            $ad->update($updating);
        }
        else{
            $request->session()->flash('error', "Este anuncio ya existe");
            return back()->withInput();
        }
        $request->session()->flash('message', "Anuncio creado con exito");
        return redirect()->route('ads.index');

    }

    public function destroy(Request $request,$id){
        $ad  = Ad::where('id',$id)->firstOrFail();   
        $deleted = $ad->delete();

        if($deleted){
            $request->session()->flash("deleted", "Eliminado con &eacute;xito");
        }
        else{
            $request->session()->flash("failDeleted", "Algo sali&oacute; mal. Por favor contacta a desarrollo.");
        }
        return redirect()->route("ad.index");
    }


	/*
public function store(Request $request)
    {
        $id_user = Auth::user()->getId();

        $this->validate($request, [
            "name" => "required|string",
            "description" => "required|string",
            "image" => "image",
            "category" => "required|string",
            ]);

        if($request->hasFile("image")){
            $path = $request->image->store('public');
        }
        else{
            $path = "public/noImgUser.png";
        }

        $indexCat = $request->category;
        $names = Category::select('name')->get();
        foreach ($names as $name) {
            $titulos[] = $name->name;
        }

        $idCat = Category::where('name', $titulos[$indexCat])->first()->id;

        Project::create(["name"=>$request->name, "description"=>$request->description, "image_path"=>$path, "category_id"=>$idCat, "creator_id"=>$id_user]);

        return redirect()->route("projects.create");
    }
	*/
}
