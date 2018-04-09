<?php
/**
 * Vod: model des VOD
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
 * Class Vod : model des VOD
 *
 * @author: Lisiane Cresson
 */

class Vod extends Model
{
  use CrudTrait;
  use Sluggable;
  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    
    protected $fillable = [
      'id','titre', 'slug', 'texte', 'image','resume', 'duree', 'prix', 'stock', 'auteur',
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

        $filename="vod_".time().".jpg";
        $img = Image::make($value)->resize(null, 400, function ($constraint) {
            $constraint->aspectRatio();
        });
        Storage::disk('uploads')->put('vods/'.$filename, $img->stream());
        $this->attributes['image'] = "uploads/vods/".$filename;
    }
/*
|--------------------------------------------------------------------------
| RELATIONS
|--------------------------------------------------------------------------
*/


}