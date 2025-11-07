<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class accueil extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];

    public $translatable = ['textsuivre', 'adresse', 'txtfooter',
        't1Team', 't2Team', 't1Pub', 't2Pub', 'titreTeam', 'descriptionTeam', 'quisommenous', 'titrecabinet', 'contenu'];
          protected $casts = [
        'telphone' => 'array',
    ];
    protected function telphone(): Attribute
{
    return Attribute::get(function ($value) {
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                return $decoded;
            }
        }
        return $value ?: []; // tableau vide par défaut
    });
}
}
