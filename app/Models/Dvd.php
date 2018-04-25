<?php
/**
 * Dvd: model des DVD
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
 * Class Dvd : model des DVD
 *
 * @author: Lisiane Cresson
 */

class Dvd extends Model
{
  use CrudTrait;
  use Sluggable;
  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    
    protected $fillable = [
      'id','titre', 'slug', 'texte', 'image','duree', 'prix', 'stock', 'sousTitre',
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

        $filename="dvd_".time().".jpg";
        $img = Image::make($value)->resize(548, 400, function ($constraint) {
            $constraint->aspectRatio();
        });
        Storage::disk('uploads')->put('dvds/'.$filename, $img->stream());
        $this->attributes['image'] = "uploads/dvds/".$filename;
    }
/*
|--------------------------------------------------------------------------
| RELATIONS
|--------------------------------------------------------------------------
*/


}