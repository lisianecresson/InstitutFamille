<?php
/**
 * RubriqueComposer : viewComposer des rubriques de la page d'accueil
 *
 * @author: Lisiane Cresson
 */
namespace App\Http\ViewComposers;

use App\Models\Page;
use Illuminate\View\View;

/**
 * Class RubriqueComposer : viewComposer dees rubriques de la page d'accueil
 *
 * @author: Lisiane Cresson
 */
class RubriqueComposer
{
    /**
	* compose : affiche les rubriques de la page d'accueil
	*
	* @author: Lisiane Cresson
    * @param $view
    * @return mixed[] tab indexé d'objets 
	*/
    public function compose(View $view) {
        $evenement = Page::where('id', 8)->first();
        $formation = Page::where('id', 9)->first();
        $boutique = Page::where('id', 10)->first();



        $view->with(array(
            'evenement'=>$evenement,
            'formation'=>$formation,
            'boutique'=>$boutique
        ));

    }
}
