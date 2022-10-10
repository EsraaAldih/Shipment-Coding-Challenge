<?php

namespace App\Models;

use App\Models\Shipment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Journal extends Model
{
    use HasFactory;
    public $table = "journal_entity";
    protected $fillable = ['amount'];
    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }
    public function types()
    {
        return $this->hasMany(JournalTypes::class);
    }

}
