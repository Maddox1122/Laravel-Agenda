<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda_items';

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'begin_datum',
        'eind_datum',
        'prioriteit',
        'status'
    ];
}
