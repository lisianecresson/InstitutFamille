<?php
/**
 * FormationController : Contrôleur des Formations
 *
 * @author: Lisiane Cresson
 */
namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Classe FormationController : Contrôleur des Formations
 *
 * @author: Lisiane Cresson
 */

class FormationController extends Controller
{

/**
    * detailsFormation : affiche le details d'une formation
    *
    * @author: Lisiane Cresson
    * @param string $slugFormation $slug d'une Formation
    * @return vue pages.formations.details
    */

    public function detailsFormation($slugFormation){
        $formation = Formation::where('slug',$slugFormation)->first();
        $page = 'les-formations';
        return view('pages.formations.details')->with(array(
            'formation'=>$formation,
            'page'=>$page
        ));
    }


}