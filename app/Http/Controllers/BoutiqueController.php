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
use App\Models\Memoire;
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
    * listeLivres : affiche les produits par categorie livre
    *
    * @author: Lisiane Cresson
    * @return vue pages.boutique.livres
    */

    public function listeLivres(){
        $livres = Livre::All();
        $page = 'livre';
        return view('pages.boutique.livres')->with(array(
            'livres'=>$livres,
            'page'=>$page
        ));
          
    }

    /**
    * detailLivre : affiche le details d'un article de type Livre
    *
    * @author: Lisiane Cresson
    * @param string $slugLivre slug de l'article Livre à afficher
    * @return vue pages.boutique.livreDetails
    */

    public function detailsLivre($slugLivre){
        $livre = Livre::where('slug',$slugLivre)->first();
        $page = 'livre';
        return view('pages.boutique.details.livreDetails')->with(array(
            'livre'=>$livre,
            'page'=>$page
        ));
    }

    /**
    * listeDvds : affiche les produits par categorie Dvd
    *
    * @author: Lisiane Cresson
    * @return vue pages.boutique.dvd
    */

    public function listedvds(){
        $dvds = Dvd::All();
        $page = 'dvd';
        return view('pages.boutique.dvd')->with(array(
            'dvds'=>$dvds,
            'page'=>$page
        ));
          
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
        $page = 'dvd';
        return view('pages.boutique.details.dvdDetails')->with(array(
            'dvd'=>$dvd,
            'page'=>$page
        ));
    }

    /**
    * listeVods : affiche les produits par categorie Vod
    *
    * @author: Lisiane Cresson
    * @return vue pages.boutique.dvd
    */

    public function listeVods(){
        $vods = Vod::All();
        $page = 'vod';
        return view('pages.boutique.vod')->with(array(
            'vods'=>$vods,
            'page'=>$page
        ));
          
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
        $page = 'vod';
        return view('pages.boutique.details.vodDetails')->with(array(
            'vod'=>$vod,
            'page'=>$page
        ));
    }


    /**
    * listeMemoires : affiche les produits par categorie Memoire
    *
    * @author: Lisiane Cresson
    * @return vue pages.boutique.dvd
    */

    public function listeMemoires(){
        $memoires = Memoire::All();
        $page = "memoire";
        return view('pages.boutique.memoires')->with(array(
            'memoires'=>$memoires,
            'page'=>$page
        ));
          
    }

    /**
    * detailMemoire : affiche le details d'un article de type Memoire
    *
    * @author: Lisiane Cresson
    * @param string $slugMemoire slug de l'article dvd à afficher
    * @return vue pages.boutique.memoireDetails
    */

    public function detailsMemoire($slugMemoire){
        $memoire = Vod::where('slug',$slugMemoire)->first();
        $page = "memoire";
        return view('pages.boutique.details.memoireDetails')->with(array(
            'memoire'=>$memoire,
            'page'=>$page
        ));


}
}