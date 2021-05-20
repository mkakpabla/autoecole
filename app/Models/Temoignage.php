<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Temoignage extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = "id_tge";
    protected $fillable = ["nom_tge", "contenu_tge", "date_tge"];
}
