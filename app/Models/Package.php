<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = "id_pack";
    protected $fillable = ["lib_pack", "prix_pack", "desc_pack", "duree_pack"];
}
