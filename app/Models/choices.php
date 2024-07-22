<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class choices extends Model
{
    use HasFactory;
    public function question(){
        return $this->belongsTo(questions::class);
    }

    protected $fillable = [
        'choice_text',
        // Add any other fillable attributes here
    ]
}
