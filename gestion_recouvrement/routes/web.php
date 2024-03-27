<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\UserPageController;
use App\Http\Controllers\Admin\Admin\AdminPageController;
use App\Http\Controllers\Admin\Cycle\CyclePageController;
use App\Http\Controllers\Admin\Ecole\EcolePageController;
use App\Http\Controllers\Etudiant\Home\HomePageController;
use App\Http\Controllers\Admin\Campus\CampusPageController;
use App\Http\Controllers\Admin\Classe\ClassePageController;
use App\Http\Controllers\Admin\Niveau\NiveauPageController;
use App\Http\Controllers\Admin\Profil\ProfilPageController;
use App\Http\Controllers\Admin\Rythme\RythmePageController;
use App\Http\Controllers\Admin\TypeFrais\TypeFraisController;
use App\Http\Controllers\Admin\Etudiant\EtudiantPageController;
use App\Http\Controllers\Admin\Paiement\PaiementPageController;
use App\Http\Controllers\Admin\Profil\ProfilAdminPageController;
use App\Http\Controllers\Admin\Dashboard\DashboardPageController;
use App\Http\Controllers\Admin\Programme\ProgrammePageController;
use App\Http\Controllers\Admin\TypeFrais\TypeFraisPageController;
use App\Http\Controllers\Admin\Departement\DepartementPageController;
use App\Http\Controllers\Authentification\AuthentificationController;
use App\Http\Controllers\Etudiant\Profil\ProfilEtudiantPageController;
use App\Http\Controllers\Admin\Encaissement\EncaissementPageController;
use App\Http\Controllers\Authentification\AuthentificationPageController;
use App\Http\Controllers\Admin\AnneeAcademique\AnneeAcademiquePageController;
use App\Http\Controllers\Admin\PaiementEngagement\PaiementEngagementPageController;
use App\Http\Controllers\Admin\EngagementTypeFrais\EngagementTypeFraisPageController;
use App\Http\Controllers\AdminSimple\DashboardSimpleAdmin\DashboardAdminSimplePageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
Route::get('/', function () {
    return view('welcome');
});


//--------------------Route SuperAdmin---------------------------------------------------------------------------------

//Etudiant
Route::get('admin/etudiant/index', [EtudiantPageController::class, 'index']) ->name('admin.etudiant.index');
Route::get('admin/etudiant/filtrer', [EtudiantPageController::class, 'filtrer']) ->name('admin.etudiant.filtrer');
Route::get('admin/etudiant/create', [EtudiantPageController::class, 'create']) ->name('admin.etudiant.create');
Route::get('admin/etudiant/{id}', [EtudiantPageController::class, 'show']) ->name('admin.etudiant.show');
Route::get('admin/etudiant/encaissement/{id}', [EtudiantPageController::class, 'showPaiementEtudiant']) ->name('admin.etudiant.encaissement');



//Admin
Route::get('admin/admin/index', [AdminPageController::class, 'index']) ->name('admin.admin.index');
Route::get('admin/admin/create', [AdminPageController::class, 'create']) ->name('admin.admin.create');
Route::get('admin/admin/{id}', [AdminPageController::class, 'show']) ->name('admin.admin.show');

//Users
Route::get('admin/users/index', [UserPageController::class, 'index']) ->name('admin.users.index');
Route::get('admin/users/{id}', [UserPageController::class, 'show']) ->name('admin.users.show');




//Dashboard
Route::get('admin/dashboard/index', [DashboardPageController::class, 'index']) ->name('admin.dashboard.index');

//Departement
Route::get('admin/departement/index', [DepartementPageController::class, 'index']) ->name('admin.departement.index');


//Campus
Route::get('admin/campus/index', [CampusPageController::class, 'index']) ->name('admin.campus.index');


//cycle
Route::get('admin/cycle/index', [CyclePageController::class, 'index']) ->name('admin.cycle.index');

//Rythme
Route::get('admin/rythme/index', [RythmePageController::class, 'index']) ->name('admin.rythme.index');

//Niveau
Route::get('admin/niveau/index', [NiveauPageController::class, 'index']) ->name('admin.niveau.index');


//Programme
Route::get('admin/programme/index', [ProgrammePageController::class, 'index']) ->name('admin.programme.index');

//Programme
Route::get('admin/annee_academique/index', [ProgrammePageController::class, 'index']) ->name('admin.annee_academique.index');

//Annee
Route::get('admin/annee_academique/index', [AnneeAcademiquePageController::class, 'index']) ->name('admin.annee_academique.index');


//Type frais
Route::get('admin/type_frais/index', [TypeFraisPageController::class, 'index']) ->name('admin.type_frais.index');


//Profil Admin
Route::get('admin/profil/index', [ProfilAdminPageController::class, 'index']) ->name('admin.profil.index');


//Engagement type frais
Route::get('admin/engagement/index', [EngagementTypeFraisPageController::class, 'index']) ->name('admin.engagement_type_frais.index');
Route::get('admin/engagement/create/{id}', [EngagementTypeFraisPageController::class, 'create']) ->name('admin.engagement_type_frais.create');


//Encaissement
Route::get('admin/encaissement/index', [EncaissementPageController::class, 'index']) ->name('admin.encaissement.index');
Route::get('admin/encaissement/{id}', [EncaissementPageController::class, 'create']) ->name('admin.encaissement.create');


//Paiement engagement
//Route::get('admin/paiement/index', [PaiementEngagementPageController::class, 'index']) ->name('admin.paiement_engagement.index');
//Route::get('admin/paiement/create', [PaiementEngagementPageController::class, 'create']) ->name('admin.paiement_engagement.create');




//Interface utilisateur -----------------------------------------------------------------------------------------
//home 
Route::get('home', [HomePageController::class, 'index']) ->name('etudiant.home.index');

//Profil Etudiant
Route::get('etudiant/profil/index', [ProfilEtudiantPageController::class, 'index']) ->name('etudiant.profil.index');





//--------------------Simple Admin---------------------------------------------------------------------------------
Route::get('admin-simple/dashboard/index', [DashboardAdminSimplePageController::class, 'index'])->name('admin_simple.dashboard_simple_admin.index');


});

//AUTH
Route::get('login', [AuthentificationPageController::class, 'login']) ->name('login');
Route::post('login', [AuthentificationController::class, 'login']) ->name('login');
Route::get('logout', [AuthentificationController::class, 'logout'])->name('logout');
Route::get('logout', [AuthentificationPageController::class, 'logout'])->name('logout');
Route::get('forgotpassword', [AuthentificationPageController::class, 'forgotPassword']) ->name('forgotpassword');








