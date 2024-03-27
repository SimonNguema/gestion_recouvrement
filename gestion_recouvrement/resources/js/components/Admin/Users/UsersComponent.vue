<template>
    <div id="main-content">
       <div class="container-fluid">
           <div class="block-header">
               <div class="row">
                   <div class="col-lg-6 col-md-6 col-sm-12">
                       <h2>Utilisateurs</h2>
                       <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                           <li class="breadcrumb-item active">Utilisateurs</li>
                       </ul>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12">
                       <div class="d-flex flex-row-reverse">
                           <div class="page_action">
                               <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Add_Room">Ajouter un utilisateur</a>
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
                                   <th class="border-top-0">Email</th>
                                   <th class="border-top-0"></th>
                                   <th class="border-top-0"> </th>
                                   <th class="border-top-0"> </th>
                                   <th class="border-top-0"> </th>
                                   <th class="border-top-0"> Action</th>
                               </tr>
                           </thead>
                           <tbody>
                              
                               <tr v-for="users in user" :key="users.id">
                                   <td>{{ users.id }}</td>
                                   <td>{{ users.email }}</td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td>
                                    <a :href="'/admin/users/'+users.id"><i class="fas fa-eye" style="color: deepskyblue;" title="Afficher les Details"></i></a>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#Update_Users"><i class="fas fa-edit text-warning"  style="padding-left: 15px; " ></i></a>
                                        <i class="fas fa-trash-alt text-danger" style="padding-left: 15px; " @click="deleteUsers(users.id)"></i>


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
                   <h6 class="title" id="defaultModalLabel">Ajouter Utilisateur</h6>
               </div>
               <div class="modal-body">
                   <div class="row clearfix">
                       <div class=" col-md-12">
                           <div class="form-group mb-4">
                               <label>email </label>
                               <input type="text" v-model="form.email"  class="form-control" placeholder="Email">
                           </div>
                       </div>
                       <div class=" col-md-12">
                           <div class="form-group mb-4">
                               <label>Mot de passe </label>
                               <input type="password" v-model="form.password" class="form-control" placeholder="Mot de passe">
                           </div>
                       </div>
                       <!-- <select class="form-control show-tick" v-model="form.role">
                            <option value=""> --Selectionnez---</option>
                            <option value="Admin"> Admin</option>
                            <option value="Etudiant">Etudiant</option>
                        </select>
                        -->
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-primary" @click="addUser()">Ajouter</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
               </div>
           </div>
       </div>
   </div>
</template>

<script>

export default {
    mounted() {
        console.log('Component mounted.')
        this.getUsers();
    },

    data(){
        return{
        
            form: new Form({
               
                
                email: "",
                password: "",          
                role: "",
            }),

            user : [],
        };
    },


    methods:{

        async addUser(){
            if(
                this.form.email != "" &&
                this.form.password != "" 
                
                
            ){

                try{
                    await axios.post("/api/admin/users/store", this.form.data());
                    Swal.fire("Succès!", "Utilisateur ajouté avec succès!", "success");
                    this.form.reset();
                    this.getUsers();
                    window.location.href = `/admin/users/index`;
                    
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

       

        getUsers()
        { 
            axios.get("/api/admin/users/index").then((response)=>
            {
                this.user= response.data.user;
            });
        },

        async deleteUsers(userId)
               {
   
                   Swal.fire({
                       title: 'Confirmation',
                       text: 'Êtes-vous sûr de vouloir supprimer cet utilisateur?',
                       icon: 'warning',
                       showCancelButton: true,
                       confirmButtonText: 'Oui',
                       cancelButtonText: 'Non'
                   }).then(async (result) => {
                       if (result.isConfirmed){
                           try{
                           
                               await axios.delete(`/api/admin/users/${userId}`);
                               this.getUsers();
                               Swal.fire('Succès!', 'Utilisateur a été supprimé avec succès!', 'success');
                           }catch (error){
                               console.log(error);
                               Swal.fire('Erreur!', 'Une erreur est survenue lors de la suppression de cet utilisateurs.', 'error');
                           }
                       }
                   })
   
               },

    
    }


    }


</script>