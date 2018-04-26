<?php
/**
 * FormateurController : Contrôleur des Formateurs
 *
 * @author: Lisiane Cresson
 */
namespace App\Http\Controllers;

use App\Models\Formateur;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Classe FormateurController : Contrôleur des Formateurs
 *
 * @author: Lisiane Cresson
 */

class FormateurController extends Controller
{

/**
    * FormateurEvenement : affiche le details d'un formateur
    *
    * @author: Lisiane Cresson
    * @param string $slugFormateur slug d'un Formateur
    * @return vue pages.formateurs.details
    */

    public function detailsFormateur($slugFormateur){
        $formateur = Formateur::where('slug',$slugFormateur)->first();
        $page = 'les-formateurs';
        return view('pages.formateurs.details')->with(array(
            'formateur'=>$formateur,
            'page'=>$page
        ));
    }


}