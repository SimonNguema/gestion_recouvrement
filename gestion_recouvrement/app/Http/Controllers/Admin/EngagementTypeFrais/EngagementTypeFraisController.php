<?php

namespace App\Http\Controllers\Admin\EngagementTypeFrais;

use Illuminate\Http\Request;
use App\Models\EtudiantEngagement;
use App\Models\EngagementTypeFrais;
use App\Http\Controllers\Controller;

class EngagementTypeFraisController extends Controller
{
    public function index()
    {
        $engagementTypeFrais = EngagementTypeFrais::with('etudiants', 'programme.departement', 'programme.cycle', 'campus', 'niveau', 'typeFrais', 'rythme', 'anneeAcademique')->orderByDesc('id')->get();
        //$engagementTypeFrais = EngagementTypeFrais::with('programme.departement', 'programme.cycle', 'campus', 'niveau', 'typeFrais', 'rythme', 'anneeAcademique')->get();

        return response()->json(['engagementTypeFrais' => $engagementTypeFrais, 200]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombreTranche' => 'required|integer',
            'montantTranche' => 'required',
            'totalFrais' => 'required',
            'idTypeFrais' => 'required|exists:type_frais,id',
            'idProgramme' => 'required|exists:programmes,id',
            'idCampus' => 'required|exists:campuses,id',
            'idNiveau' => 'required|exists:niveaux,id',
            'idRythme' => 'required|exists:rythmes,id',
            'idAnneeAcademique' => 'required|exists:annee_academiques,id',
            'idEtudiant' => 'required|exists:etudiants,id'
        ]);
        $engagementTypeFrais = [
            'nombreTranche' => $data['nombreTranche'],
            'montantTranche' => $data['montantTranche'],
            'totalFrais' => $data['totalFrais'],
            'idProgramme' => $data['idProgramme'],
            'idCampus' => $data['idCampus'],
            'idNiveau' => $data['idNiveau'],
            'idRythme' => $data['idRythme'],
            'idAnneeAcademique' => $data['idAnneeAcademique'],
            'idTypeFrais' => $data['idTypeFrais'],
        ];
        


        $engagementTypeFrais = EngagementTypeFrais::create($engagementTypeFrais);

        // // Enregistrement dans la table etudiant_engagement
        // $etudiantEngagement = new EtudiantEngagement();
        // $etudiantEngagement->idUser = $data['idUser'];
        // $etudiantEngagement->idEngagementTypeFrais = $engagementTypeFrais->id;
        // $etudiantEngagement->save();

        $etudiantEngagement=[
            'idEtudiant' => $data['idEtudiant'],
            'idEngagementTypeFrais' => $engagementTypeFrais->id,
        ];
        $etudiantEngagement = EtudiantEngagement::create($etudiantEngagement);




        return response()->json($engagementTypeFrais, 201);
    }

    public function show($id)
    {
        $engagementTypeFrais = EngagementTypeFrais::findOrFail($id);
        return response()->json($engagementTypeFrais, 200);
    }
    

    
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombreTranche' => 'required|integer',
            'montantTranche' => 'required|numeric',
            'totalFrais' => 'required|numeric',
            'idTypeFrais' => 'required|exists:type_frais,id',
            'idCampus' => 'required|exists:campuses,id',
            'idNiveau' => 'required|exists:niveaux,id',
            'idRythme' => 'required|exists:rythmes,id',
            'idAnneeAcademique' => 'required|exists:annee_academiques,id',
        ]);

        $engagementTypeFrais = EngagementTypeFrais::findOrFail($id);
        $engagementTypeFrais->update($request->all());

        return response()->json($engagementTypeFrais, 200);
    }

    public function destroy($id)
    {
        $engagementTypeFrais = EngagementTypeFrais::findOrFail($id);
        $engagementTypeFrais->delete();

        return response()->json(null, 204);
    }

}
