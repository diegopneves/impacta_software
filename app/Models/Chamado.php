<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    // Indicar o nome da tabela
    protected $table = 'chamados';


    // Indicar quais colunas podem ser cadastradas
    protected $fillable = [
        'nome',
        'telefone',
        'motificado_em',
        'descrição',
        'logradouro'


    ];


}
