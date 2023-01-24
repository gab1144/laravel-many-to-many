<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
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

    public function project(){
        return $this->belongsToMany(Projects::class);
    }
}
