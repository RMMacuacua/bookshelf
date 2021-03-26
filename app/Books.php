<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table= 'books';
    public $timestamps = false;
   
	public function __construct() {
		parent::__construct();
		
	}
}
