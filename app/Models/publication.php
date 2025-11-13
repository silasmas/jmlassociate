<?php

namespace App\Models;

use Str;
use App\Models\User;
use App\Models\avocat;
use App\Models\categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class publication extends Model
{
    use HasFactory;

    use HasTranslations;
    protected $guarded=[];
    protected $dates=['created_at','updated_at'];


   // public $with = ['avocat','categorie','user'];
    public $translatable = ['titre','soustitre','contenu'];

    public function avocat(){
        return $this->belongsTo(avocat::class);
    }
    public function categorie(){
        return $this->belongsTo(categorie::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

      // Image de couverture : colonne "image_path" stockée dans storage/app/public/...
    public function getCoverUrlAttribute(): string
    {
        return $this->image_path
            ? Storage::url($this->cover)
            : asset('images/placeholder-post.png'); // fallback
    }

    // Extrait automatique si pas de champ dédié
    public function getExcerptAttribute($value): ?string
    {
        if ($value) return $value;
        return \Str::limit(strip_tags($this->content ?? ''), 180);
    }
 /* Scope de publication */
    public function scopePublished($q)
    {
        return $q->where('status', true)
                 ->whereNotNull('created_at')
                 ->where('created_at', '<=', now());
    }
}
