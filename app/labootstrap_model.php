<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class labootstrap_model extends Model

{
	
     protected $table = 'contactlaravel';
     protected $fillable = ['contact_name','contact_number','contact_email', 'created_at'];
}


?>
