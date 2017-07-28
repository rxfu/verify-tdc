<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model {

	protected $dates = ['verified_at', 'valid_date'];

	public function certificate() {
		return $this->belongsTo('App\Certificate', 'cert_id', 'gpzh');
	}
}
