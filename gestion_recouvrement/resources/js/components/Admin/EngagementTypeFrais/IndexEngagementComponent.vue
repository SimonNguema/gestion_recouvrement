<template>
    <div id="main-content">
           <div class="container-fluid">
               <div class="block-header">
                   <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-12">
                           <h2>Engagement</h2>
                           <ul class="breadcrumb">
                               <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                               <li class="breadcrumb-item active">Engagement</li>
                           </ul>
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="d-flex flex-row-reverse">
                               <!-- <div class="page_action">
                                   <a href="admin/engagement/create" class="btn btn-primary" data-toggle="modal" data-target="#Add_Room">Ajouter un Engagement</a>
                               </div> -->
                               <div class="p-2 d-flex">
                                   
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
   
               <div class="row clearfix">
                   <div class="col-md-12">
                       <div class="card">
                           <div class="body">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                   </div>
                                   <input type="text" class="form-control" placeholder="Search...">
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
                                           <a href="javascript:void(0);" data-toggle="modal" data-target="#Update_Users"><i class="fas fa-edit text-warning"  style="padding-left: 15px; " ></i></a>
                                           <i class="fas fa-trash-alt text-danger" style="padding-left: 15px; " @click="deleteProgramme(programme.id)"></i>
   
                                       </td>
                                       
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                      
                   </div>
               </div>
           </div>
       </div>
   
   </template>
   
   <script>
   export default {
       mounted() {
           console.log('Component mounted.');
           
           this.getEngagement();
        //    this. getEtudiant();
        //    this.getProgramme();
        //    this.getAnnee();
        //    this.getTypeFrais();
           
       },
   
       data(){
           return{

            engagementTypeFrais:[],
            // etudiant : [],
            //    programme : [],
            //    annee_academique: [],
            //    type_frais: [],
               
           }
   
       },
       methods:{

        async getEngagement() {
                try {
                    const response = await axios.get("/api/admin/engagement/index");
                    this.engagementTypeFrais = response.data.engagementTypeFrais; 
                } catch (error) {
                    console.error("Erreur lors de la récupération des engagements:", error);
                }
        },
        // async getEtudiant() {
        //     try {
        //         const response = await axios.get("/api/admin/etudiant/index");
        //         this.etudiant = response.data.etudiant; 
        //     } catch (error) {
        //         console.error("Erreur lors de la récupération des etudiant:", error);
        //     }
        // },
           
   
       
   
        // async getProgramme() {
        //     try {
        //         const response = await axios.get("/api/admin/programme/index");
        //         this.programme = response.data.programme; 
        //     } catch (error) {
        //         console.error("Erreur lors de la récupération des programmes:", error);
        //     }
        // },
        // async getAnnee() {
        //     try {
        //         const response = await axios.get("/api/admin/annee/index");
        //         this.annee = response.data.annee; 
        //     } catch (error) {
        //         console.error("Erreur lors de la récupération des annees:", error);
        //     }
        // },

        // async getTypeFrais() {
        //     try {
        //         const response = await axios.get("/api/admin/type_frais/index");
        //         this.type_frais = response.data.type_frais; 
        //     } catch (error) {
        //         console.error("Erreur lors de la récupération des type frais:", error);
        //     }
        // },

        async deleteProgramme(engagementId)
        {

            Swal.fire({
                title: 'Confirmation',
                text: 'Êtes-vous sûr de vouloir supprimer ce programme?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui',
                cancelButtonText: 'Non'
            }).then(async (result) => {
                if (result.isConfirmed){
                    try{
                    
                        await axios.delete(`/api/admin/programme/${programmeId}`);
                        this.getProgramme();
                        Swal.fire('Succès!', 'programme a été supprimé avec succès!', 'success');
                    }catch (error){
                        console.log(error);
                        Swal.fire('Erreur!', 'Une erreur est survenue lors de la suppression du programme.', 'error');
                    }
                }
            })

        },
                 

   
       }
   }
   
                  
   
   </script>