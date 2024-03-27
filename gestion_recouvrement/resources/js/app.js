

import './bootstrap';
import { createApp } from 'vue';



import { Form } from 'vform';
window.Form=Form;

import Swal from 'sweetalert2';
window.Swal =Swal;


const app = createApp({});


//################################### INTERFACE ADMINISTRATEUR#####################################

//DashboardAdmin
import DashboardComponent from './components/Admin/Dashboard/IndexDashboardComponent.vue';
app.component('dashboard-admin', DashboardComponent);


//ProfilAdmin
import ProfilAdminComponent from './components/Admin/Profil/ProfilAdminComponent.vue';
app.component('profil-admin', ProfilAdminComponent);


//Etudiant
import CreateEtudiantComponent from './components/Admin/Etudiant/CreateEtudiantComponent.vue';
import IndexEtudiantComponent from './components/Admin/Etudiant/IndexEtudiantComponent.vue';
import ShowEtudiantComponent from './components/Admin/Etudiant/ShowEtudiantComponent.vue';
import ShowEtudiantEncaissementComponent from './components/Admin/Etudiant/ShowEtudiantEncaissementComponent.vue';


app.component('etudiant-create', CreateEtudiantComponent);
app.component('etudiant-index', IndexEtudiantComponent);
app.component('etudiant-show', ShowEtudiantComponent);
app.component('etudiant-showpaiement', ShowEtudiantEncaissementComponent);


//Admin
import CreateAdminComponent from './components/Admin/Admin/CreateAdminComponent.vue';
import IndexAdminComponent from './components/Admin/Admin/IndexAdminComponent.vue';
import ShowAdminComponent from './components/Admin/Admin/ShowAdminComponent.vue';


app.component('admin-create', CreateAdminComponent);
app.component('admin-index', IndexAdminComponent);
app.component('admin-show', ShowAdminComponent);


//Users
import UsersComponent from './components/Admin/Users/UsersComponent.vue';
import ShowUserComponent from './components/Admin/Users/ShowUserComponent.vue';

app.component('users-index', UsersComponent);
app.component('users-show', ShowUserComponent);


//Cycle 
import CycleComponent from './components/Admin/Cycle/CycleComponent.vue';
app.component('cycle-index', CycleComponent);

//Departement
import DepartementComponent from './components/Admin/Departement/DepartementComponent.vue';
app.component('departement-index', DepartementComponent);

//Programme
import ProgrammeComponent from './components/Admin/Programme/ProgrammeComponent.vue';
app.component('programme-index',ProgrammeComponent);

//Campus
import CampusComponent from './components/Admin/Campus/CampusComponent.vue';
app.component('campus-index',CampusComponent);

//Niveau
import NiveauComponent from './components/Admin/Niveau/NiveauComponent.vue';
app.component('niveau-index',NiveauComponent);

//Rythme
import RythmeComponent from './components/Admin/Rythme/RythmeComponent.vue';
app.component('rythme-index',RythmeComponent);

//Annee
import AnneeComponent from './components/Admin/Annee/AnneeComponent.vue';
app.component('annee-index',AnneeComponent);

//Type frais
import TypeFraiseComponent from './components/Admin/TypeFrais/IndexTypeFraisComponent.vue';
app.component('typefrais-index',TypeFraiseComponent);

//Engagement
import IndexEngagementComponent from './components/Admin/EngagementTypeFrais/IndexEngagementComponent.vue';
import CreateEngagementComponent from './components/Admin/EngagementTypeFrais/CreateEngagementComponent.vue';
app.component('engagement-index',IndexEngagementComponent);
app.component('engagement-create',CreateEngagementComponent);

//Paiement
import IndexPaiementComponent from './components/Admin/PaiementEngagement/IndexPaiementComponent.vue';
import CreatePaiementComponent from './components/Admin/PaiementEngagement/createPaiementComponent.vue';
app.component('paiement-index',IndexPaiementComponent);
app.component('paiement-create',CreatePaiementComponent);

//Encaissement
import CreateEncaissementComponent from './components/Admin/Encaissement/CreateEncaissementComponent.vue';
import IndexEncaissementComponent from './components/Admin/Encaissement/IndexEncaissementComponent.vue';

app.component('encaissement-create',CreateEncaissementComponent);
app.component('encaissement-index',IndexEncaissementComponent);


//--------------------------------------------------------------------------------------------------------------------------



//########################## Interface Etudiant################################################


//HOME
import HomeComponent from './components/Etudiant/Home/HomeComponent.vue';
app.component('home-etudiant', HomeComponent);


//ProfilAdmin
import ProfilEtudiantComponent from './components/Etudiant/Profil/ProfilEtudiantComponent.vue';
app.component('profil-etudiant', ProfilEtudiantComponent);



//Auth
import LoginComponent from './components/Auth/LoginComponent.vue';
app.component('login-users', LoginComponent);


//DashboardAdmin
import DashboardComponentAdminSimple from './components/AdminSimple/DashboardAdminSimple/IndexDashboardAdminComponent.vue';
app.component('dashboard-admin_simple', DashboardComponentAdminSimple);


app.mount('#app');
