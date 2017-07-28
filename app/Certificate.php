<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model {

	protected $primaryKey = 'gpzh';

	public $incrementing = false;

	public $timestamps = false;

	public function codes() {
		return $this->hasMany('App\Code', 'cert_id', 'gpzh')->orderBy('created_at', 'desc');
	}
}
