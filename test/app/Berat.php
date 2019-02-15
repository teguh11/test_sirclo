<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Berat extends Model
{
    //
	public function lists($datas = [])
	{
		$conditions = [];
		$params = [];
		if(!empty($datas)){
				if($datas['id'] != "" ){
					$conditions[] = "id = :id";
					$params = array_merge($params, ['id' => $datas['id']]);   
				}

				$condition = " WHERE ".join(" AND ", $conditions);
		}
		return DB::select("select * from berat".(!empty($conditions)?$condition:"") , $datas);
	}

	public function insert($data)
	{
		return DB::insert('insert into berat (tanggal, max, min) values (?, ?, ?)', [date("Y-m-d", strtotime($data['tanggal'])), $data['max'], $data['min']]);
	}

	public function updatedata($data)
	{
		return DB::update('update berat set `max` = ?, `min` = ? where id = ?', [$data['max'], $data['min'], $data['id']]);
	}

	public function deletedata($id)
	{
		return DB::delete('delete from berat where id = ?', [$id]);
	}

}
