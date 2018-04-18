<?php
/**
 * BoutiqueController : Contrôleur de la Boutique
 *
 * @author: Lisiane Cresson
 */
namespace App\Http\Controllers;

use App\Models\Dvd;
use App\Models\Vod;
use App\Models\Livre;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Classe BoutiqueController : Contrôleur de la Boutique
 *
 * @author: Lisiane Cresson
 */

class BoutiqueController extends Controller
{

    /**
    * detailLivre : affiche le details d'un article de type Livre
    *
    * @author: Lisiane Cresson
    * @param string $slugLivre slug de l'article Livre à afficher
    * @return vue pages.boutique.livreDetails
    */

    public function detailsLivre($slugLivre){
        $livre = Livre::where('slug',$slugLivre)->first();
        return view('pages.boutique.details.livreDetails')->with('livre',$livre);
    }


    /**
	* detailDvd : affiche le details d'un article de type DVD
	*
	* @author: Lisiane Cresson
    * @param string $slugDvd slug de l'article dvd à afficher
    * @return vue pages.boutique.dvdDetails
	*/

    public function detailsDvd($slugDvd){
        $dvd = Dvd::where('slug',$slugDvd)->first();
        return view('pages.boutique.details.dvdDetails')->with('dvd',$dvd);
    }

    /**
    * detailVod : affiche le details d'un article de type Vod
    *
    * @author: Lisiane Cresson
    * @param string $slugVod slug de l'article dvd à afficher
    * @return vue pages.boutique.vodDetails
    */

    public function detailsVod($slugVod){
        $vod = Vod::where('slug',$slugVod)->first();
        return view('pages.boutique.details.vodDetails')->with('vod',$vod);
    }


}
