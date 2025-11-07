<?php
namespace App\Providers;

use App\Models\accueil;
use App\Models\avocat;
use App\Models\expertise;
use App\Models\publication;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        View::composer('*', function ($view) {
            $publication = publication::with(['avocat', 'categorie'])->simplePaginate();
            $avocat      = avocat::get();
            // dd($avocat->biographie);
            $secteur     = expertise::where('sorte', 1)
                ->orderBy('expertises.created_at', 'asc')->get();
            $domaine = expertise::where('sorte', 2)
                ->orderBy('expertises.created_at', 'asc')->get();
            $home = accueil::first();

            $q1 = Expertise::query() 
                ->where('sorte', 1)
                ->orderBy('created_at', 'asc')
                ->limit(2);

            $q2 = Expertise::query()
                ->where('sorte', 2)
                ->orderBy('created_at', 'asc')
                ->limit(2);

            $expertises = $q1->unionAll($q2)
                ->orderBy('sorte') // tri final (facultatif)
                ->orderBy('created_at')
                ->get();

            $home   = accueil::query()->latest('id')->first();
            $phones = is_array($home->telphone)
                ? $home->telphone
                : json_decode($home->telphone ?? '[]', true);

            $view->with('expertises', $expertises);
            $view->with('phones', $phones);
            $view->with('home', $home);
            $view->with('publication', $publication);
            $view->with('avocat', $avocat);
            $view->with('secteur', $secteur);
            $view->with('domaine', $domaine);
        });

    }
}
