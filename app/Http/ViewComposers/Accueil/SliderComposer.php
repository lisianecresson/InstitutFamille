<?php
/**
 * SliderComposer : viewComposer du slider
 *
 * @author: Lisiane Cresson
 */
namespace App\Http\ViewComposers\Accueil;

use App\Models\Slider;
use Illuminate\View\View;

/**
 * Class SliderComposer : viewComposer du slider
 *
 * @author: Lisiane Cresson
 */
class SliderComposer
{
    /**
	* compose : affiche les elements du slider
	*
	* @author: Lisiane Cresson
    * @param $view
    * @return mixed[] tab indexé d'objets de type slides
	*/
    public function compose(View $view) {
        $sliders = Slider::All();


        $view->with('sliders',$sliders);
    }
}
