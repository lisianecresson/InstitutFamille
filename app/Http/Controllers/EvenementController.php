<?php
/**
 * EvenementController : Contrôleur des Evenements
 *
 * @author: Lisiane Cresson
 */
namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Classe EvenementController : Contrôleur des Evenements
 *
 * @author: Lisiane Cresson
 */

class EvenementController extends Controller
{

    /**
    * detailEvenement : affiche le details d'un Evenement
    *
    * @author: Lisiane Cresson
    * @param string $slugEvenement slug de l'Evenement
    * @return vue pages.evenement.details
    */

    public function detailsEvenement($slugEvenement){
        $evenement = Conference::where('slug',$slugEvenement)->first();
        $page = 'les-evenements';
        return view('pages.evenements.details')->with(array(
            'evenement'=>$evenement,
            'page'=>$page
        ));
    }


}