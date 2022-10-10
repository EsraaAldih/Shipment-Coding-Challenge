<?php

namespace App\Models;

use App\Models\Journal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shipment extends Model
{
    use HasFactory;
 
    protected $fillable = ['code','shipper_name','weight','status','price','description','image','journal_id'];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }
}
