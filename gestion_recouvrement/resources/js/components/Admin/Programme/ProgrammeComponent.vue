<template>
    <div id="main-content">
           <div class="container-fluid">
               <div class="block-header">
                   <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-12">
                           <h2>Programme</h2>
                           <ul class="breadcrumb">
                               <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                               <li class="breadcrumb-item active">Programme</li>
                           </ul>
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="d-flex flex-row-reverse">
                               <div class="page_action">
                                   <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Add_Room">Ajouter un Programme</a>
                               </div>
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
                                       <th class="border-top-0">ID</th>
                                       <th class="border-top-0"> Intitule Programme </th>
                                       <th class="border-top-0">Description Programme</th>
                                       <th class="border-top-0">Departement </th>
                                       <th class="border-top-0">Cycle </th>
                               
                                       <th class="border-top-0">Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                  
                                   <tr v-for="programme in programme" :key="programme.id">
                                       <td>{{ programme.id }}</td>
                                       <td>{{ programme.intituleProgramme }}</td>
                                       <td>{{ programme.descriptionProgramme }}</td>
                                       <td>{{ programme.departement.intituleDepartement }}</td>
                                       <td>{{ programme.cycle.intituleCycle }}</td>
                                       <td>
                                           <a href="#"><i class="fas fa-eye"  style="color: deepskyblue;" title="Afficher les Details"></i></a>
                                           <a href="javascript:void(0);" data-toggle="modal" data-target="#Update_Users"><i class="fas fa-edit text-warning"  style="padding-left: 15px; " ></i></a>
                                           <i class="fas fa-trash-alt text-danger" style="padding-left: 15px; " @click="deleteProgramme(programme.id)"></i>
   
                                       </td>
                                       
                                   </tr>
                               </tbody>
                           </table>
                       </div>
                       <ul class="pagination pagination-primary mb-0">
                           <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">previous</a></li>
                           <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                           <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                           <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                           <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                           <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   
         <!-- Default Size -->
         <div class="modal fade" id="Add_Room" tabindex="-1" role="dialog">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h6 class="title" id="defaultModalLabel">Ajouter programme</h6>
                   </div>
                   <div class="modal-body">
                       <div class="row clearfix">
                           <div class=" col-md-12">
                               <div class="form-group mb-4">
                                   <label>Intitule </label>
                                   <input type="text" v-model="form.intituleProgramme" class="form-control" placeholder="Intitule programme">

                               </div>
                               <div class="form-group mb-4">
                                   <label>Description programme </label>
                                   <input type="text" v-model="form.descriptionProgramme" class="form-control" placeholder="Description programme">

                               </div>

                               <div class="form-group mb-4">
                                  <label>Département </label>
                                    <select v-model="form.idDepartement" class="form-control">
                                        <option v-for="departement in departement" :key="departement.id" :value="departement.id">{{ departement.intituleDepartement }}</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Cycle </label>
                                    <select v-model="form.idCycle" class="form-control">
                                        <option v-for="cycle in cycle" :key="cycle.id" :value="cycle.id">{{ cycle.intituleCycle }}</option>
                                    </select>
                                </div>

                           </div>
                           
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="button" @click="addProgramme()" class="btn btn-primary">Ajouter</button>
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                   </div>
               </div>
           </div>
       </div>
   </template>
   
   <script>
   export default {
       mounted() {
           console.log('Component mounted.');
           this.getProgramme();
           this.getCycle();
           this.getDepartement();
       },
   
       data(){
           return{
           
               form: new Form({
                   intituleProgramme: "",
                   descriptionProgramme: "",
                   idCycle:"",
                   idDepartement:"",
               }),
               programme : [],
               cycle: [],
               departement:[],
           }
   
       },
       methods:{
           async addProgramme(){
               if( this.form.intituleProgramme != ""  ){
   
                   try{
                       await axios.post("/api/admin/programme/store", this.form.data());
                       Swal.fire("Succès!", "Programme ajouté avec succès!", "success");
                       this.form.reset();
                       this.getProgramme();
                   }catch(error){
                       console.log(error);
                       if (error.response.status == 422){
                           Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");
   
                       }
                   }
   
               }else{
                   Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");
   
               }
               
           },
   
       
   
           async getProgramme() {
                   try {
                       const response = await axios.get("/api/admin/programme/index");
                       this.programme = response.data.programme; 
                   } catch (error) {
                       console.error("Erreur lors de la récupération des programmes:", error);
                   }
               },
   
               async deleteProgramme(programmeId)
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