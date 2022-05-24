<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Atividade
 *
 * @property $id
 * @property $datadeinicio
 * @property $horadeinicio
 * @property $datafinal
 * @property $horafinal
 * @property $descriçãoatividade
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Atividade extends Model
{
    
    static $rules = [
		'datadeinicio' => 'required',
		'horadeinicio' => 'required',
		'datafinal' => 'required',
		'horafinal' => 'required',
		'descriçãoatividade' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['datadeinicio','horadeinicio','datafinal','horafinal','descriçãoatividade'];



}
