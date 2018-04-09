<?php
/**
 * Formateur: model des Formateurs
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
 * Class Formateur : model des Formateurs
 *
 * @author: Lisiane Cresson
 */

class Formateur extends Model
{
  use CrudTrait;
  use Sluggable;
  /*
  |--------------------------------------------------------------------------
  | GLOBAL VARIABLES
  |--------------------------------------------------------------------------
  */
    
    protected $fillable = [
      'id','nom', 'prenom', 'slug', 'texte', 'image', 'titre', 
    ];
/*
|--------------------------------------------------------------------------
| FUNCTIONS
|--------------------------------------------------------------------------
*/
  /**
   * getFullNameAttribute : retourn le prenom et le nom
   *
   * @author: Lisiane Cresson
   * @return full_name
   */
  public function getFullNameAttribute($value) {
     return $this->prenom.' '.$this->nom;
  }

  /**
   * sluggable : retourn un slug à partir du nom
   *
   * @author: Lisiane Cresson
   * @return slug
   */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'nom'
            ]
        ];
    }

    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->nom;
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
        $filename="formateur_".time().".jpg";
        $img = Image::make($value)->resize(null, 100, function ($constraint) {
            $constraint->aspectRatio();
        });
        Storage::disk('uploads')->put('formateurs/'.$filename, $img->stream());
        $this->attributes['image'] = "uploads/formateurs/".$filename;
      }
      else{
        $this->attributes['image'] = "uploads/formateurs/formateur.png";
      }
    }
/*
|--------------------------------------------------------------------------
| RELATIONS
|--------------------------------------------------------------------------
*/
/**
        * coursEnLigne: relation 1 à n avec coursEnLigne
        *
        * @author: Lisiane Cresson
        * @return hasMany CoursEnLigne
        */

    public function coursEnLigne(){
        return $this->hasMany('App\Models\CoursEnLigne');
    }

/**
        * formation: relation 1 à n avec formation
        *
        * @author: Lisiane Cresson
        * @return hasMany Formation
        */

    public function formation(){
        return $this->hasMany('App\Models\Formation');
    }

/**
    * formations : relation n à m avec formation
    *
    * @author: Lisiane Creson
    * @return belongsToMany Formation
    */

    public function formations(){
        return $this->belongsToMany('App\Formation');
    }   

}

