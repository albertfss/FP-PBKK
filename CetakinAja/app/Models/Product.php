<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Printing;
class Product extends Model
{
    public function printing()
    {
    	return $this->belongsTo(Printing::class);
    }

}
