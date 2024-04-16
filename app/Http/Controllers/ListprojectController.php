<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ListprojectController extends Controller
{
    public function Liste_projet()
    {
        $projects= Project::all();

        return view ('list-project', compact('projects'));
    }

    public function Ajouter_projet()
    {
        return view('add-project');
    }

    public function Ajouter_projet_traitement(Request $request)
    {
        $request->validate([
            'nomprojet'=> 'required',
            'filiale'=> 'required',
            'campagne'=> 'required',
            'nbrecasprevu'=> 'required',
            'qualif'=> 'required',
            'homo'=> 'required',
            'post'=> 'required',
            'budgetprev'=> 'required',
            'budgetreel'=> 'required',
            'gap'=> 'required',
            'datedeb'=> 'required',
            'datef'=> 'required',

        ]);

        $projet = new Project();
        $projet->nomprojet =$request->nomprojet;
        $projet->filiale =$request->filiale;
        $projet->campagne =$request->campagne;
        $projet->nbrecasprevu =$request->nbrecasprevu;
        $projet->qualif =$request->qualif;
        $projet->homo =$request->homo;
        $projet->post =$request->post;
        $projet->budgetprev =$request->budgetprev;
        $projet->budgetreel =$request->budgetreel;
        $projet->gap =$request->gap;
        $projet->datedeb =$request->datedeb;
        $projet->datef =$request->datef;
        $projet->save();

        return redirect('/add-project')->with('status','Projet creer avec succes');
    }

    public function update_project($id){
        $projects = Project::find($id);

        return view('update-project', compact('projects'));
    }

    public function update_projet_traitement(Request $request){

        $request->validate([
            'nomprojet'=> 'required',
            'filiale'=> 'required',
            'campagne'=> 'required',
            'nbrecasprevu'=> 'required',
            'qualif'=> 'required',
            'homo'=> 'required',
            'post'=> 'required',
            'budgetprev'=> 'required',
            'budgetreel'=> 'required',
            'gap'=> 'required',
            'datedeb'=> 'required',
            'datef'=> 'required',

        ]);

        $projet = Project :: find($request->$id);
        $projet->nomprojet =$request->nomprojet;
        $projet->filiale =$request->filiale;
        $projet->campagne =$request->campagne;
        $projet->nbrecasprevu =$request->nbrecasprevu;
        $projet->qualif =$request->qualif;
        $projet->homo =$request->homo;
        $projet->post =$request->post;
        $projet->budgetprev =$request->budgetprev;
        $projet->budgetreel =$request->budgetreel;
        $projet->gap =$request->gap;
        $projet->datedeb =$request->datedeb;
        $projet->datef =$request->datef;
        $projet->update();


        return redirect('add-project')->with('status','Projet modifier avec succes');
       


    }
}
