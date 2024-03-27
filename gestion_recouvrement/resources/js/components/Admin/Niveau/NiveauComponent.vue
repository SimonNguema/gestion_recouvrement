<template>
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Niveau</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item active">Niveau</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Add_Room">Ajouter un niveau</a>
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
                                    <th class="border-top-0">Intitule</th>
                                    <th class="border-top-0"></th>
                                    <th class="border-top-0"> </th>
                                    <th class="border-top-0"> </th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr v-for="niveau in niveau" :key="niveau.id">
                                    <td>{{ niveau.id }}</td>
                                       <td>{{ niveau.intituleNiveau }}</td>
                                       <td></td>
                                       <td></td>
                                       <td></td>
                                       <td>
                                           <a href="#"><i class="fas fa-eye"  style="color: deepskyblue;" title="Afficher les Details"></i></a>
                                           <a href="javascript:void(0);" data-toggle="modal" data-target="#Update_Users"><i class="fas fa-edit text-warning"  style="padding-left: 15px; " ></i></a>
                                           <i class="fas fa-trash-alt text-danger" style="padding-left: 15px; " @click="deleteNiveau(niveau.id)"></i>
   
                                       </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>

    <!-- Default Size -->
    <div class="modal fade" id="Add_Room" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Ajouter niveau</h6>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class=" col-md-12">
                            <div class="form-group mb-4">
                                <label>Intitule </label>
                               <input type="text" v-model="form.intituleNiveau" class="form-control" placeholder="Intitule niveau">
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" @click="addNiveau()" class="btn btn-primary">Ajouter</button>
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
           this.getNiveau();
       },
   
       data(){
           return{
           
               form: new Form({
                   intituleNiveau: "",
               }),
               niveau : [],
           }
   
       },
       methods:{
           async addNiveau(){
               if( this.form.intituleNiveau != ""  ){
   
                   try{
                       await axios.post("/api/admin/niveau/store", this.form.data());
                       Swal.fire("Succès!", "Niveau ajouté avec succès!", "success");
                       this.form.reset();
                       this.getNiveau();
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
   
       
   
           async getNiveau() {
                   try {
                       const response = await axios.get("/api/admin/niveau/index");
                       this.niveau = response.data.niveau; 
                   } catch (error) {
                       console.error("Erreur lors de la récupération des niveaux:", error);
                   }
               },
   
               async deleteNiveau(niveauId)
               {
   
                   Swal.fire({
                       title: 'Confirmation',
                       text: 'Êtes-vous sûr de vouloir supprimer ce niveau?',
                       icon: 'warning',
                       showCancelButton: true,
                       confirmButtonText: 'Oui',
                       cancelButtonText: 'Non'
                   }).then(async (result) => {
                       if (result.isConfirmed){
                           try{
                           
                               await axios.delete(`/api/admin/niveau/${niveauId}`);
                               this.getNiveau();
                               Swal.fire('Succès!', 'niveau a été supprimé avec succès!', 'success');
                           }catch (error){
                               console.log(error);
                               Swal.fire('Erreur!', 'Une erreur est survenue lors de la suppression du niveau.', 'error');
                           }
                       }
                   })
   
               },
   
   
       }
   }
   
                  
   
</script>