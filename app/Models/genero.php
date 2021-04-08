<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    protected $table = 'generos';

    public function __construct() {
		parent::__construct();
		
	}
}