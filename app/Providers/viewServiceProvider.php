<?php

namespace App\Providers;

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
            $avocat = avocat::get();
            $secteur = expertise::where('sorte', 1)
                ->orderBy('expertises.created_at', 'asc')->get();
            $domaine = expertise::where('sorte', 2)
                ->orderBy('expertises.created_at', 'asc')->get();
            $view->with('publication', $publication);
            $view->with('avocat', $avocat);
            $view->with('secteur', $secteur);
            $view->with('domaine', $domaine);
        });

    }
}
