<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\accueil;
use App\Models\avocat;
use App\Models\bureau;
use App\Models\categorie;
use App\Models\expertise;
use App\Models\fonction;
use App\Models\info;
use App\Models\publication;
use App\Models\slides;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PhpOffice\PhpWord\IOFactory;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = slides::get();
        return view('pages.accueil', compact('slides'));
    }
    public function about()
    {
        $titres = ["A propos", "home", "Tout sur JML"];
        return view('pages.about', compact('titres'));
    }
    public function expertise()
    {
        $titres = ["Expertise", "home", "Liste des expertises"];
        return view('pages.expertise', compact('titres'));
    }
    public function team()
    {
        // $accueil = accueil::first();
        // // $produits=avocat::with("fonction")->whereHas("fonction",function($q){
        // //     return $q->where("id",1);
        // // });
        // $avocat = avocat::with('fonction')->orderBy('niveau', 'asc')->get();
        // //$avocat=fonction::with('avocat')->distinct()->get();
        // $avocat = $avocat->groupBy(function ($member) {
        //     return $member->niveau;
        // })->all();
        // //  dd($avocat);
        // //$avocat=$av->unique('finction_id');
        // $fonction = fonction::with('avocat')->get();
        // // dd($fonction->unique());
        // $bureau = bureau::all();
        // $secteur = expertise::where('sorte', 1)
        //     ->orderBy('expertises.created_at', 'asc')->get();
        // $domaine = expertise::where('sorte', 2)
        //     ->orderBy('expertises.created_at', 'asc')->get();
        $titres = ["Notre équipe", "home", "Liste de nos avocats"];
        return view('pages.team', compact('titres'));
    }

    public function publication()
    {
        $avocat = avocat::all();
        $categorie = categorie::with('publication')->get();
        $accueil = accueil::first();
        $publication = publication::with(['avocat', 'categorie'])->get();
        // dd($publication);
        $secteur = expertise::where('sorte', 1)
            ->orderBy('expertises.created_at', 'asc')->get();
        $domaine = expertise::where('sorte', 2)
            ->orderBy('expertises.created_at', 'asc')->get();
        $titres = ["Notre Blog", "home", "Nos publications"];
        return view('pages.blog', compact('titres', 'publication', 'avocat', 'categorie', 'accueil', 'secteur', 'domaine'));
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function show_pub()
    {
        $pub = publication::with(['avocat', 'categorie'])->findOrFail($_GET['id']);
        $accueil = accueil::first();
        // $type=type::all();
        $publication = publication::simplePaginate(2);
        $publication->withPath('detailPublication?id=' . $_GET['id']);
        $secteur = expertise::where('sorte', 1)
            ->orderBy('expertises.created_at', 'asc')->get();
        $domaine = expertise::where('sorte', 2)
            ->orderBy('expertises.created_at', 'asc')->get();
        return view('pages.detail_publication', compact('pub', 'publication', 'accueil', 'secteur', 'domaine'));
    }
    public function show_team($id)
    {

        // Chemin du fichier Word à prévisualiser
        $filePath = public_path('video/BIOGRAPHIE_Antoine.docx');

        // Créer un objet PhpWord
        $phpWord = IOFactory::load($filePath);
        // Chemin où enregistrer le fichier HTML
        $htmlFilePath = public_path('video/vd/test.html');

        // Enregistrer le contenu du fichier Word en HTML
        $phpWord->save($htmlFilePath, 'HTML');
        //dd($htmlFilePath);
        $content = "video/vd/test.html";

        $avocat = avocat::with('publication')->findOrFail($id);

        $bureau = avocat::with('bureau')->findOrFail($id);
        $avocats = avocat::all();
        // dd($bureau);
        $accueil = accueil::first();
        // $type=type::all();
        $secteur = expertise::where('sorte', 1)
            ->orderBy('expertises.created_at', 'asc')->get();
        $domaine = expertise::where('sorte', 2)
            ->orderBy('expertises.created_at', 'asc')->get();
        $titres = ["Equipe", "../team", "Detail sur l'avocat"];

        return view('pages.detailTeam', compact('titres', 'content', 'avocat', 'avocats', 'accueil', 'secteur', 'domaine', 'bureau'));
    }
    public function show_secteur($id)
    {
        $secteurs = expertise::where('sorte', 1)
            ->orderBy('expertises.created_at', 'asc')->get();
        $Onesecteur = expertise::find($id);
        // dd($secteur->photo);
        $accueil = accueil::first();
        $titres = ["Secteur d'activités", "../expertise", "Detail Secteur d'activités"];
        // $secteur=expertise::where('sorte',1)->get();
        return view('pages.detailExpertise', compact('titres', 'accueil', 'Onesecteur', 'secteurs'));
    }

    public function show_competence($id)
    {
        $accueil = accueil::first();
        $domaine = expertise::where('sorte', 1)
            ->orderBy('expertises.created_at', 'asc')->get();
        $Onesecteur = expertise::find($id);
        // $type=type::all();

        $titres = ["Domaine de competence", "../expertise", "Detail Domaine de competence"];
        return view('pages.detailExpertise', compact('titres', 'accueil', 'Onesecteur', 'domaine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $por = request()->validate([
            'emailnewsletter' => 'required|min:3',
        ]);
        $emailExiste = info::where("email", $request->emailnewsletter)->first();
        if ($emailExiste) {
            return response()->json([
                'reponse' => false,
                'msg' => 'Cette adresse est déjà enregistrée!',
            ]);
        } else {
            info::create([
                'email' => $request->emailnewsletter,
            ]);
            return response()->json([
                'reponse' => true,
                'msg' => 'Votre enregistrement est fait avec succès!',
            ]);

        }
    }

    public function show($id)
    {
        // $avocatBy=avocat::with('bureau')->where('fonction_id',$id)->simplePaginate();
        //
        $avocatBy = avocat::with('fonction')->where('fonction_id', $id)->get();
        //$avocat=fonction::with('avocat')->distinct()->get();
        //    $avocatBy = $avocatBy->groupBy(function ($member) {
        //        return $member->fonction->fonction;
        //    })->where('fonction_id',$id)->all();
        //dd($avocatBy);
        $avocat = avocat::all();
        // $categorie=categorie::with('publication')->get();
        $accueil = accueil::first();
        // $publication=publication::with(['avocat','categorie'])->where('categorie_id',$id)->simplePaginate();
        $fonction = fonction::with('avocat')->get();
        $bureau = bureau::all();
        //$publication->withPath('publication?id='.$_GET['id']);
        $secteur = expertise::where('sorte', 1)
            ->orderBy('expertises.created_at', 'asc')->get();
        $domaine = expertise::where('sorte', 2)
            ->orderBy('expertises.created_at', 'asc')->get();
        return view('pages.publicationCat', compact('fonction', 'avocat', 'bureau', 'accueil', 'avocatBy', 'secteur', 'domaine'));
    }
    public function teamByBureau($id)
    {
        //$avocatBy=avocat::with('bureau')->where('bureau.id',$id)->simplePaginate();

        $avocatBy = avocat::selectRaw('avocats.*,bureaus.id as idb')
            ->join('avocat_bureaus', 'avocat_bureaus.avocat_id', 'avocats.id')
            ->join('bureaus', 'bureaus.id', 'avocat_bureaus.bureau_id')
            ->where('bureaus.id', $id)
            ->get();
        //dd($avocatBy);
        $avocat = avocat::all();
        // $categorie=categorie::with('publication')->get();
        $accueil = accueil::first();
        // $publication=publication::with(['avocat','categorie'])->where('categorie_id',$id)->simplePaginate();
        $fonction = fonction::with('avocat')->get();
        $bureau = bureau::all();
        //$publication->withPath('publication?id='.$_GET['id']);
        $secteur = expertise::where('sorte', 1)
            ->orderBy('expertises.created_at', 'asc')->get();
        $domaine = expertise::where('sorte', 2)
            ->orderBy('expertises.created_at', 'asc')->get();
        return view('pages.publicationBureau', compact('fonction', 'avocat', 'bureau', 'accueil', 'avocatBy', 'secteur', 'domaine'));
    }

    public function edit(info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, info $info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = info::findOrFail($id);

        if ($info) {
            $info->delete();
        }

        if ($info) {
            return response()->json([
                'reponse' => true,
                'msg' => 'Element supprimer avec succès.',
            ]);
        } else {
            return response()->json([
                'reponse' => false,
                'msg' => 'Erreur de suppression',
            ]);
        }
    }
}
