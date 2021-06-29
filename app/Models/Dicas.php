<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dicas extends Model
{
    protected $primaryKey='id';
    protected $table='dicas';
    protected $fillable=['dica'];
    public $incrementing=true;
    public $timestamps=false;

    

    public function veiculos(){
        return $this->belongsTo(Veiculos::class);
    }
    public function usuarios(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
