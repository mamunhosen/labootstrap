<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{
   
    protected $table = 'contactLaravel';
    protected $primaryKey = 'contact_id';
    protected $fillable = ['contact_name','contact_number','contact_email', 'created_at'];

    protected $rules=[
		'contact_name' => 'required|min:4|max:25',
		'contact_number' => 'required|min:11|max:16',
		'contact_email'  => 'email',
    ];
}

