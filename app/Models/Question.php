<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    public function choices(){
        return $this->hasMany(choices::class);
    }

    protected $fillable = [
        'question_text',
        // Add any other fillable attributes here
    ];
}
