<?php
/**
 * Slider: model du slider
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
 * Class Slider : model du slider
 *
 * @author: Lisiane Cresson
 */

class Slider extends Model
{
  use CrudTrait;
  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    
    protected $fillable = [
      'id', 'conference_id', 'image', 
    ];
/*
|--------------------------------------------------------------------------
| FUNCTIONS
|--------------------------------------------------------------------------
*/
 /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setImageAttribute($value)
    {

        $filename="slide_".time().".jpg";
        $img = Image::make($value)->resize(1200, 563, function ($constraint) {
            $constraint->aspectRatio();
        });
        Storage::disk('uploads')->put('slides/'.$filename, $img->stream());
        $this->attributes['image'] = "uploads/slides/".$filename;
    }


/*
|--------------------------------------------------------------------------
| RELATIONS
|--------------------------------------------------------------------------

/**
* conference: relation 1 à n avec conference
*
* @author: Lisiane Cresson
* @return belongsTo conference
*/
        public function conference(){
            return $this->belongsTo('App\Models\Conference');
        }       
        
}