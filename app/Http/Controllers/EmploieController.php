<?php

namespace App\Http\Controllers;

use App\emploi;
use App\Events\EmailsendEvent;
use App\Http\Resources\seanceCollection;
use App\seance;
use Illuminate\Http\Request;

class EmploieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('list',['emploi'=>emploi::orderBy('created_at','desc')->paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newEmploie',['compter'=>0]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->except(['date_debut','date_fin','niveau']));
        $seances=$request->except(['date_debut','date_fin','niveau']);
        $emploi=emploi::create([
            'titre'=>"null",
            'date_debut'=>$request->date_debut,
            'date_fin'=>$request->date_fin,
            'niveau_id'=>$request->niveau
        ]);
       //dd($seances);
       for($i=1;$i<intval(count($seances)/5)+1;$i++){
           seance::create([
            'emploi_id'=>$emploi->id,
            'heure_id'=>$seances['heure'.$i],
            'jour_id'=>$seances['jour'.$i],
            'matiere_id'=>$seances['matiere'.$i],
            'professeur_id'=>$seances['proffesseur'.$i],
            'salle_id'=>$seances['salle'.$i]
           ]);
       }
       event(new EmailsendEvent($emploi->niveau->users));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\emploie  $emploie
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $emploi=emploi::orderBy('id','desc')->first();
        return seanceCollection::collection($emploi->seances);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\emploie  $emploie
     * @return \Illuminate\Http\Response
     */
    public function edit($emploie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\emploie  $emploie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$emploie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\emploie  $emploie
     * @return \Illuminate\Http\Response
     */
    public function destroy($emploie)
    {
        emploi::find($emploie)->delete();
        seance::where('emploi_id',$emploie)->delete();
        return redirect()->route('emploi.index');
    }
}
