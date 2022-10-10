<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalTypes extends Model
{
    use HasFactory;
    
    public $table = "journal_types";
    protected $fillable = ['amount','journal_id','type'];
    
    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }
}
