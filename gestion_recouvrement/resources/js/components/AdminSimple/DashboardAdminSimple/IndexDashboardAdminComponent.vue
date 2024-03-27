<template>
    <div class="row clearfix">
        
        <div class="col-xl-12 col-lg-8 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Total Revenue</h2>
                    
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-4">
                            <div class="body primary-bg text-light">
                                <h4><i class="fa fa-bank"></i> </h4>
                                <span>TOTAL PAIEMENTS</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="body  primary-bg text-light">
                                <h4><i class="fa fa-users"></i> {{ nombreEtudiants }}</h4>
                                <span>ETUDIANT</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="body  primary-bg text-light">
                                <h4><i class="fa fa-tag"></i> {{nombreEngagements}}</h4>
                                <span>ENGAGEMENT</span>
                            </div>
                        </div>
                        
                    </div>
                    <div id="apex-chart-line-column"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Liste des derniers paiements</h2>
                        <!-- <ul class="header-dropdown">
                            <li><a class="tab_btn active" href="javascript:void(0);" title="Yearly">2023-2024</a></li>
    
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                    <li><a href="javascript:void(0);">2022-2023</a></li>
                                    <li><a href="javascript:void(0);">2021-2022</a></li>
                                    <li><a href="javascript:void(0);">2020-2021</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table m-b-0 table-hover">
                                <thead class="thead-yellow" style="background-color: #fad130;">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Programme</th>
                                        <th>Montant</th>
                                        <th>Mode paiement</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody v-if="encaissement.length > 0">
                                    <tr v-for="encaissement in encaissement" :key="encaissement.id">
                                        <td>
                                            <h6>{{ encaissement.etudiants[0].nomEtudiant }} </h6>
                                            <span> </span>
                                        </td>
                                        <td>
                                            {{ encaissement.etudiants[0].engagement_type_frais[0].programme.intituleProgramme }}
                                        </td>
                                        <td>
                                            <strong style="color:#32CD32;">{{encaissement.montantEncaisser}} FCFA</strong>

                                        </td>
                                        <td>{{ encaissement.modeEncaissement }}</td>
                                     
                                        <td>        
                                            <a href="#"><i class="fas fa-eye"  style="color: deepskyblue;" title="Afficher les Details"></i></a>
                                        </td>
                                    </tr>
                                   
                                   
                                    
                                </tbody>
                                <tbody v-else>
                                    <tr>
                                        <td colspan="5" class="text-center"><h4>Aucun paiement</h4></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p><a href="#"> AFFICHER TOUS L'HISTORIQUE</a></p>

                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row clearfix" style="margin-top: 10px;">
                <div class="col-md-6">
                    <div class="card">
                        <div class="body">
                            <div class="input-group">
                                <h5>Derniers etudiants</h5>
                                <div class="input-group-prepend">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>                                       
                                       
                                        <th class="border-top-0">ID</th>
                                        <th class="border-top-0">Nom</th>
                                        <th class="border-top-0">Prenom</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Number</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            
                               
                                
                                    <tr v-for="etudiant in etudiant" :key="etudiant.id">
                                        
                                        <td><span class="list-name">{{ etudiant.id }}</span></td>
                                        <td>{{etudiant.nomEtudiant}}</td>
                                        <td>{{etudiant.prenomEtudiant}}</td>
                                        <td>{{ etudiant.emailEtudiant }}</td>
                                        <td>{{ etudiant.telephoneEtudiant }}</td>										
                                        <td>
                                            <a href="#"><i class="fas fa-eye" style="color: deepskyblue;" title="Afficher les Details"></i></a>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="#">AFFICHER TOUS</a>                        

                    </div>
                </div>

                <div class="col-md-6">
                       <div class="card">
                           <div class="body">
                               <div class="input-group">
                                <h5>Programmes</h5>
                                   <div class="input-group-prepend">
                                   </div>
                               </div>
                           </div>
                           <table class="table table-hover mb-0">
                               <thead>
                                   <tr>                                       
                                       <th class="border-top-0">ID</th>
                                       <th class="border-top-0"> Intitule Programme </th>
                                       
                                   
                                      
                               
                                       <th class="border-top-0">Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                  
                                   <tr v-for="programme in programme" :key="programme.id">
                                       <td>{{ programme.id }}</td>
                                       <td>{{ programme.intituleProgramme }}</td>
                                     
                                       <td>
                                           <a href="#"><i class="fas fa-eye"  style="color: deepskyblue;" title="Afficher les Details"></i></a>   
                                       </td>
                                       
                                   </tr>
                               </tbody>
                           </table>
                           <a href="#">AFFICHER TOUS</a>    

                       </div>
                          
                       
                   </div>
                
        </div>

        <div class="row clearfix" style="margin-top: 10px;">
                   <div class="col-md-12">
                       <div class="card">
                           <div class="body">
                               <div class="input-group">
                                <h5>Derniers etudiants</h5>
                                   <div class="input-group-prepend">
                                   </div>
                               </div>
                           </div>
                           <table class="table table-hover mb-0">
                               <thead>
                                   <tr>                                       
                                       <th class="border-top-0">Nom</th>
                                       <th class="border-top-0"> Programme </th>
                                       <th class="border-top-0">Cycle</th>
                                       <th class="border-top-0">Departement </th>
                                       <th class="border-top-0">Annee Academique </th>
                                       <th class="border-top-0">Type frais </th>
                                       <th class="border-top-0">Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                  
                                   <tr v-for="engagementTypeFrais in engagementTypeFrais" :key="engagementTypeFrais.id">
                                       <td>{{ engagementTypeFrais.etudiants[0].nomEtudiant}} {{ engagementTypeFrais.etudiants[0].prenomEtudiant }}</td>
                                       <td>{{engagementTypeFrais.programme.intituleProgramme }}</td>
                                       <td>{{ engagementTypeFrais.programme.cycle.intituleCycle }}</td>
                                       <td>{{ engagementTypeFrais.programme.departement.intituleDepartement}}</td>
                                       <td>{{engagementTypeFrais.annee_academique.intituleAnnee}}</td>
                                       <td>{{engagementTypeFrais.type_frais.intituleTypeFrais}}</td>
                                       <td>
                                           <a href="#"><i class="fas fa-eye"  style="color: deepskyblue;" title="Afficher les Details"></i></a>
   
                                       </td>
                                       
                                   </tr>
                               </tbody>
                           </table>
                           <a href="#">AFFICHER TOUS</a>    
                       </div>
                     
                   </div>
               </div>
</template>



<script>
export default {
    mounted() {
        console.log('Component mounted.');
        this.getEncaissement();
        this.getEtudiant();
        this.getEngagement();
        this.getProgramme();
        this.getCycle();
        this.getDepartement();
    },

    data(){
        return{
        
            form: new Form({
            }),
            encaissement : [],
            etudiant: [],
            engagementTypeFrais: [],
            programme : [],
            cycle: [],
            departement:[],
        }

    },

    computed: {
        nombreEtudiants() {
            return this.etudiant.length;
        },
        nombreEngagements() {
            return this.encaissement.length;
        },
       
    },
    methods:{

        async getEncaissement() {
            try {
                const response = await axios.get("/api/admin-simple/dashboard/indexEncaissement");
                this.encaissement = response.data.encaissement; 
                console.log(this.encaissement);
            } catch (error) {
                console.error("Erreur lors de la récupération des paiements:", error);
            }
        },

        async getEtudiant() {
            try {
                const response = await axios.get("/api/admin-simple/dashboard/indexEtudiant");
                this.etudiant = response.data.etudiant; 
            } catch (error) {
                console.error("Erreur lors de la récupération des etudiant:", error);
            }
        },

        async getEngagement() {
                try {
                    const response = await axios.get("/api/admin-simple/dashboard/indexEngagement");
                    this.engagementTypeFrais = response.data.engagementTypeFrais; 
                } catch (error) {
                    console.error("Erreur lors de la récupération des engagements:", error);
                }
        },

       
    

        async getProgramme() {
            try {
                const response = await axios.get("/api/admin-simple/dashboard/indexProgramme");
                this.programme = response.data.programme; 
            } catch (error) {
                console.error("Erreur lors de la récupération des programmes:", error);
            }
        },

            

            async getDepartement() {
             try {
                 const response = await axios.get("/api/admin/departement/index");
                 this.departement = response.data.departement; 
             } catch (error) {
                 console.error("Erreur lors de la récupération des departements:", error);
             }
         },

         async getCycle() {
                try {
                    const response = await axios.get("/api/admin/cycle/index");
                    this.cycle = response.data.cycle; 
                } catch (error) {
                    console.error("Erreur lors de la récupération des cycles:", error);
                }
            },

    }
}

               

</script>