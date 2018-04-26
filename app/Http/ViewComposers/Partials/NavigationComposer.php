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
        $formationLongues = Formation::where('typeFormation_id', 1)->orderBy('titre','asc')->get();
        $formationEtats = Formation::where('typeFormation_id', 2)->orderBy('titre','asc')->get();
        $seminairesColUns = Formation::where('typeFormation_id', 3)->orderBy('titre','asc')->take(14)->get();
        $seminairesColDeuxs = Formation::where('typeFormation_id', 3)->orderBy('titre','asc')->take(14)->skip(14)->get();
        $seminairesColTrois = Formation::where('typeFormation_id', 3)->orderBy('titre','asc')->take(14)->skip(28)->get();


        $view->with(array(
            'formationLongues'=>$formationLongues,
            'formationEtats'=>$formationEtats,
            'seminairesColUns'=>$seminairesColUns,
            'seminairesColDeuxs'=>$seminairesColDeuxs,
            'seminairesColTrois'=>$seminairesColTrois
        ));

    }
}