<?php
/**
 * Memoire: model des Memoires
 *
 * @author: Lisiane Cresson
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Image;
use Storage;

/**
 * Class Memoire : model des Memoires
 *
 * @author: Lisiane Cresson
 */

class Memoire extends Model
{
  use CrudTrait;
  use Sluggable;
  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    
    protected $fillable = [
      'id','titre', 'slug', 'texte', 'image','resume', 'texte', 'etudiant',
    ];
/*
|--------------------------------------------------------------------------
| FUNCTIONS
|--------------------------------------------------------------------------
*/
  /**
   * sluggable : retourn un slug à partir du titre
   *
   * @author: Lisiane Cresson
   * @return slug
   */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titre'
            ]
        ];
    }

    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->titre;
    }

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setImageAttribute($value)
    {
      if ($value != '') {
            
        $filename="memoire_".time().".jpg";
        $img = Image::make($value)->resize(null, 300, function ($constraint) {
            $constraint->aspectRatio();
        });
        Storage::disk('uploads')->put('memoires/'.$filename, $img->stream());
        $this->attributes['image'] = "uploads/memoires/".$filename;
      }
    }
/*
|--------------------------------------------------------------------------
| RELATIONS
|--------------------------------------------------------------------------
*/


}