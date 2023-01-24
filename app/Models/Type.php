<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        /*
            - salvare lo slug originale
            - controllare se esiste
            - generarne uno con in aggiunta un contataore
            -- se esiste generarne un'altro e così via fino a che se ne trova uno non esistente
        */
        $original_slug = $slug;
        $c = 1;
        $exists = Type::where('slug',$slug)->first();
        while($exists){
            $slug = $original_slug . '-' . $c;
            $exists = Type::where('slug',$slug)->first();
            $c++;
        }
        return $slug;
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }
}
