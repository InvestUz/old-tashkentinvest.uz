<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Street extends Model
{
    use HasFactory;

    protected $table = 'streets';
    protected $fillable = ['name', 'name_ru', 'type', 'comment', 'code', 'district_id'];



    public function district()
    {
        return $this->belongsTo(Districts::class, 'district_id');
    }


    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
