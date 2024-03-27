<?php

use App\Models\Rythme;
use App\Models\Paiement;
use Illuminate\Http\Request;
use App\Models\AnneeAcademique;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Admin\Admin\AdminController;
use App\Http\Controllers\Admin\Cycle\CycleController;
use App\Http\Controllers\Etudiant\Home\HomeController;
use App\Http\Controllers\Admin\Campus\CampusController;
use App\Http\Controllers\Admin\Niveau\NiveauController;
use App\Http\Controllers\Admin\Rythme\RythmeController;
use App\Http\Controllers\Admin\Etudiant\EtudiantController;
use App\Http\Controllers\Admin\Paiement\PaiementController;
use App\Http\Controllers\Admin\Profil\ProfilAdminController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Programme\ProgrammeController;
use App\Http\Controllers\Admin\TypeFrais\TypeFraisController;
use App\Http\Controllers\Admin\Departement\DepartementController;
use App\Http\Controllers\Etudiant\Profil\ProfilEtudiantController;
use App\Http\Controllers\Admin\Encaissement\EncaissementController;
use App\Http\Controllers\Admin\AnneeAcademique\AnneeAcademiqueController;
use App\Http\Controllers\Admin\PaiementEngagement\PaiementEngagementController;
use App\Http\Controllers\Admin\EngagementTypeFrais\EngagementTypeFraisController;
use App\Http\Controllers\AdminSimple\DashboardSimpleAdmin\DashboardAdminSimpleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//------------------------API ADMIN--------------------------------------------------------------------------

//Dahboard
Route::get('admin/dashboard/indexEncaissement', [DashboardController::class, 'indexEncaissement']);
Route::get('admin/dashboard/indexEtudiant', [DashboardController::class, 'indexEtudiant']);
Route::get('admin/dashboard/indexProgramme', [DashboardController::class, 'indexProgramme']);
Route::get('admin/dashboard/indexEngagement', [DashboardController::class, 'indexEngagement']);




//Profil Admin
Route::put('/admin/profil/{id}', [ProfilAdminController::class, 'updateAdmin']);
Route::put('/admin/profil/{id}/password', [ProfilAdminController::class, 'updatePassword']);


//Admin
Route::get('admin/index', [AdminController::class, 'index']) ->name('index');
Route::post('admin/store/{id}', [AdminController::class, 'store']) ->name('store');
Route::get('admin/admin/{id}', [AdminController::class, 'show']) ->name('show');

//Etudiant
Route::get('admin/etudiant/index', [EtudiantController::class, 'index']) ->name('index');
Route::post('admin/etudiant/store/{id}', [EtudiantController::class, 'store']) ->name('store');
Route::get('admin/etudiant/{id}', [EtudiantController::class, 'show']) ->name('show');
Route::delete('admin/etudiant/{id}', [EtudiantController::class, 'destroy']) ->name('destroy');
Route::get('/admin/etudiant/{id}/engagement_type_frais', [EtudiantController::class, 'showEngagementTypeFrais']);
Route::get('/admin/etudiant/{id}/encaissement', [EtudiantController::class, 'showEncaissement']);
Route::get('admin/etudiant/encaissement/{id}', [EtudiantController::class, 'showPaiementEtudiant']) ->name('showPaiementEtudiant');


//Users
//Route::post('admin/users/store/{id}', [UserController::class, 'store']) ->name('admin.users.store');
Route::post('admin/users/store', [UserController::class, 'store']) ->name('admin.users.store');
Route::get('admin/users/index', [UserController::class, 'index']) ->name('admin.users.index');
Route::get('admin/users/{id}', [UserController::class, 'show']) ->name('admin.users.show');
Route::delete('admin/users/{id}', [UserController::class, 'destroy']) ->name('destroy');


//Departements

Route::post('admin/departement/store', [DepartementController::class, 'store']) ->name('admin.departement.store');
Route::get('admin/departement/index', [DepartementController::class, 'index']) ->name('admin.departement.index');

Route::get('admin/departement/show', [DepartementController::class, 'show']) ->name('admin.departement.show');
Route::delete('admin/departement/{id}', [DepartementController::class, 'destroy']) ->name('admin.departement.destroy');

//Programme 
Route::post('admin/programme/store', [ProgrammeController::class, 'store']) ->name('admin.programme.store');
Route::get('admin/programme/index', [ProgrammeController::class, 'index']) ->name('admin.programme.index');
Route::get('admin/programme/show', [ProgrammeController::class, 'show']) ->name('admin.programme.show');
Route::delete('admin/programme/{id}', [ProgrammeController::class, 'destroy']) ->name('admin.programme.destroy');


//Cycle 
Route::post('admin/cycle/store', [CycleController::class, 'store']) ->name('admin.cycle.store');
Route::get('admin/cycle/index', [CycleController::class, 'index']) ->name('admin.cycle.index');

Route::get('admin/cycle/show', [CycleController::class, 'show']) ->name('admin.cycle.show');
Route::delete('admin/cycle/{id}', [CycleController::class, 'destroy']) ->name('admin.cycle.destroy');

//annee
Route::post('admin/annee/store', [AnneeAcademiqueController::class, 'store']) ->name('admin.annee.store');
Route::get('admin/annee/index', [AnneeAcademiqueController::class, 'index']) ->name('admin.annee.index');
Route::get('admin/annee/show', [AnneeAcademiqueController::class, 'show']) ->name('admin.annee.show');
Route::delete('admin/annee/{id}', [AnneeAcademiqueController::class, 'destroy']) ->name('admin.annee.destroy');

//Campus
Route::post('admin/campus/store', [CampusController::class, 'store']) ->name('admin.campus.store');
Route::get('admin/campus/index', [CampusController::class, 'index']) ->name('admin.campus.index');
Route::get('admin/campus/show', [CampusController::class, 'show']) ->name('admin.campus.show');
Route::delete('admin/campus/{id}', [CampusController::class, 'destroy']) ->name('admin.campus.destroy');

//niveau
Route::post('admin/niveau/store', [NiveauController::class, 'store']) ->name('admin.niveau.store');
Route::get('admin/niveau/index', [NiveauController::class, 'index']) ->name('admin.niveau.index');
Route::get('admin/niveau/show', [NiveauController::class, 'show']) ->name('admin.niveau.show');
Route::delete('admin/niveau/{id}', [NiveauController::class, 'destroy']) ->name('admin.niveau.destroy');

//rythme
Route::post('admin/rythme/store', [RythmeController::class, 'store']) ->name('admin.rythme.store');
Route::get('admin/rythme/index', [RythmeController::class, 'index']) ->name('admin.rythme.index');
Route::get('admin/rythme/show', [RythmeController::class, 'show']) ->name('admin.rythme.show');
Route::delete('admin/rythme/{id}', [RythmeController::class, 'destroy']) ->name('admin.rythme.destroy');

//Type frais
Route::post('admin/type_frais/store', [TypeFraisController::class, 'store']) ->name('admin.type_frais.store');
Route::get('admin/type_frais/index', [TypeFraisController::class, 'index']) ->name('admin.type_frais.index');
Route::delete('admin/type_frais/{id}', [TypeFraisController::class, 'destroy']) ->name('admin.type_frais.destroy');

//Engagement type frais
Route::get('admin/engagement/index', [EngagementTypeFraisController::class, 'index']) ->name('admin.engagement_type_frais.index');
Route::post('admin/engagement/store', [EngagementTypeFraisController::class, 'store']) ->name('admin.engagement_type_frais.store');
Route::post('admin/engagement/{id}', [EngagementTypeFraisController::class, 'show']) ->name('admin.engagement_type_frais.show');

//Encaissement
Route::post('admin/encaissement/store', [EncaissementController::class, 'store']) ->name('admin.encaissement.store');
Route::get('admin/encaissement/index', [EncaissementController::class, 'index']) ->name('admin.encaissement.index');



//Paiement engagement
//Route::get('admin/paiement/index', [PaiementEngagementController::class, 'index']) ->name('admin.paiement.index');
//Route::post('admin/paiement/store', [PaiementEngagementController::class, 'store']) ->name('admin.paiement.store');



//------------------------API ETUDIANT--------------------------------------------------------------------------


//Profil Etudiant
Route::put('/etudiant/profil/{id}', [ProfilEtudiantController::class, 'updateEtudiant']);
Route::put('/etudiant/profil/{id}/password', [ProfilEtudiantController::class, 'updatePassword']);


//HOME
Route::get('/home/{id}/paiement', [HomeController::class, 'showPaiement']);



//------------------------API Simple Admin--------------------------------------------------------------------------

//Dahboard SimpleAdmin
Route::get('admin-simple/dashboard/indexEncaissement', [DashboardAdminSimpleController::class, 'indexEncaissement']);
Route::get('admin-simple/dashboard/indexEtudiant', [DashboardAdminSimpleController::class, 'indexEtudiant']);
Route::get('admin-simple/dashboard/indexProgramme', [DashboardAdminSimpleController::class, 'indexProgramme']);
Route::get('admin-simple/dashboard/indexEngagement', [DashboardAdminSimpleController::class, 'indexEngagement']);

