<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Definindo os campos que podem ser preenchidos em massa
    protected $fillable = [
        'cpf',
        'nome',
        'data_nascimento',
        'sexo',
        'endereco',
        'estado_id',
        'cidade_id',
    ];

    // Relacionamento com o modelo Estado
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    // Relacionamento com o modelo Cidade
    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
}


