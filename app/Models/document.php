<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    use HasFactory;
    protected $table = 'documents';
    protected $primarykey = 'document_no';
    protected $fillable =[
        'document_no', 'document_subject'
    ];
}