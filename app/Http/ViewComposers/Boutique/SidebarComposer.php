<?php
/**
 * SidebarComposer : viewComposer de la sidebar de la boutique
 *
 * @author: Lisiane Cresson
 */
namespace App\Http\ViewComposers\Boutique;

use App\Models\Dvd;
use App\Models\Vod;
use App\Models\Livre;
use App\Models\Memoire;
use Illuminate\View\View;

/**
 * Class SidebarComposer : viewComposer de la sidebar de la boutique
 *
 * @author: Lisiane Cresson
 */
class SidebarComposer
{
    /**
	* compose : compte le nombre d'element dans les categories
	*
	* @author: Lisiane Cresson
    * @param $view
    * @return mixed[] tab indexé d'objets 
	*/
    public function compose(View $view) {
        $nombreLivre = Livre::count();
        $nombreMemoire = Memoire::count();
        $nombreDvd = Dvd::count();
        $nombreVod = Vod::count();



        $view->with(array(
            'nombreLivre'=>$nombreLivre,
            'nombreMemoire'=>$nombreMemoire,
            'nombreDvd'=>$nombreDvd,
            'nombreVod'=>$nombreVod
        ));

    }
}