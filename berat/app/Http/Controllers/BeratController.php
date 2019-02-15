<?php

namespace App\Http\Controllers;

use App\Berat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
* 
*/
class BeratController extends Controller
{
	public function index()
	{
		$berat = new Berat();
		$data = $berat->lists();

		return view('berat.index', ['datas' => $data]);
	}

	public function add(Request $request)
	{
		if($request->isMethod('post')){
			$berat = new Berat();
			$insert = $berat->insert($request->all());
			return redirect()->route('indexBerat');
		}	
		return view('berat.form');
	}

	public function edit(Request $request, $id)
	{
		$berat = new Berat();
		$datas = $berat->lists(['id' => $id]);
		if($request->isMethod('post')){
			$data = [
				"id" => $id,
				"max" => $request->input('max'),
				"min" => $request->input('min')
 			];
			$update = $berat->updatedata($data);
			return redirect()->route('indexBerat');
		}	
		return view('berat.form', ['data' => $datas]);
	}

	public function delete($id)
	{
		$berat = new Berat();
		$delete = $berat->deletedata($id);
		return redirect()->route('indexBerat');		
	}

}

?>