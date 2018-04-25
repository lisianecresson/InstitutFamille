<?php
/**
 * SidebarComposer : viewComposer de la Navigation du site
 *
 * @author: Lisiane Cresson
 */
namespace App\Http\ViewComposers\Partials;

use App\Models\Formation;
use Illuminate\View\View;

/**
 * Class NavigationComposer : viewComposer de la Navigation
 *
 * @author: Lisiane Cresson
 */
class NavigationComposer
{
    /**
	* compose : affiche la liste de formation
	*
	* @author: Lisiane Cresson
    * @param $view
    * @return mixed[] tab indexé d'objets 
	*/
    public function compose(View $view) {
        $formationLongues = Formation::where('typeFormation_id', 1)->get();;
        $formationEtats = Formation::where('typeFormation_id', 2)->get();;
        $seminaires = Formation::where('typeFormation_id', 3)->get();;



        $view->with(array(
            'formationLongues'=>$formationLongues,
            'formationEtats'=>$formationEtats,
            'seminaires'=>$seminaires
        ));

    }
}