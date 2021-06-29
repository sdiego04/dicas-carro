<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    protected $primaryKey='id';
    protected $table='veiculo';
    public $fillable=['marca','modelo','versao'];
    public $incrementing=true;
    public $timestamps=false;


    public function dicas(){
        return $this->hasMany(Dicas::class);
    }
    use HasFactory;
}
