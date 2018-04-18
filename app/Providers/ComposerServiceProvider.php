<?php

/**
 * ComposerServiceProvider : affiche dans les vues, les viewComposer
 *
 * @author: Lisiane Cresson et Paméla Fauconnier
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Classe ComposerServiceProvider : affiche dans les vues, les viewComposer
 *
 * @author: Lisiane Cresson et Paméla Fauconnier
 */

class ComposerServiceProvider extends ServiceProvider
{
    /**
   	* boot : return les viewcomposer
   	*
   	* @author: Lisiane Cresson
    * @return view accueil.slider
   	*/
    public function boot()
    {
        // Using class based composers...
        view()->composer(
            'pages.accueil.slider', 'App\Http\ViewComposers\SliderComposer'
        );
        view()->composer(
            'pages.accueil.rubrique', 'App\Http\ViewComposers\RubriqueComposer'
        );


    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
