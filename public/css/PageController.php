<?php
/**
 * PageController : Contrôleur des pages
 */
namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class PageCotroller : Contrôleur des pages
 *
 */
class PageController extends Controller
{
    /**
    * index : affiche le details d'un article
    *
    * @param string $slug slug de la page à afficher
    * @return vue pages.template
    */
    public function index($slug)
    {
        $page = Page::findBySlug($slug);

        if (!$page)
        {
            abort(404);
        }
        if($page->template=='accueil'){
            return redirect()->to(route('accueil'));
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.'.$page->template, $this->data);
    }

    /**
    * accueil : affiche le details de la page d'accueil
    *
    * @return vue pages.accueil
    */
    public function accueil()
    {
        

        $page = Page::where('template','accueil')->first();
        if (!$page)
        {
            abort(404);
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.'.$page->template, $this->data);
    }
}