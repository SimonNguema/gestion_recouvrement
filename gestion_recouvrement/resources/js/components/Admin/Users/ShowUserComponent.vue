<template>

    <!-- mani page content body part -->
        <div id="main-content">
            <div class="container-fluid">                        
                        
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Details utilisateur</h2>                           
                        </div>
                    
                    </div>
                </div>
    
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12">
                        <div class="card profile-header">
                            <div class="body text-center">
                                <div class="profile-image mb-3 text-center">  </div>
                                <div class="mt-4">
                                    <h4 class="mb-0"><strong></strong>  </h4>
                                    
                                </div>
                                <div class="page_action" style="margin-top: 15px;">
                                <!-- Bouton pour ajouter comme étudiant -->
                                    <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Add_Student" @click="addEtudiantForUser(user)" v-if="user.role == null">Ajouter comme Étudiant</a>
                                    <!-- Bouton pour afficher l'étudiant -->
                                    <a href="javascript:void(0);" class="btn btn-primary" @click="showStudent(user)" v-if="user.role == 'Etudiant'">Afficher l'étudiant</a>
                                    <!-- Bouton pour afficher l'admin -->
                                    <a href="javascript:void(0);" class="btn btn-primary" @click="showAdmin(user)" v-if="user.role == 'Admin'">Afficher l'admin</a>
                                    <!-- Bouton pour afficher le super-admin -->
                                    <a href="javascript:void(0);" class="btn btn-primary" @click="showSuperAdmin(user)" v-if="user.role == 'Super-Admin'">Afficher le super-admin</a>
                                </div>
                            </div>                    
                        </div>                               
                        <div class="card" style="margin-top: 100px;">
                            <div class="header">
                                <h2></h2>
                            </div>
                            <div class="body">
                                <div class="workingtime" >
                                               <!-- Bouton pour ajouter comme admins -->
                                                <a href="javascript:void(0);" class="btn btn-danger" data-toggle="modal" data-target="#Add_Room" @click="addAdminForUser(user)" v-if="user.role == null">Ajouter comme admin</a>
     
                                    <!-- <span class="text-muted">Date du debut</span> -->
                                    <!-- <p>09:00 AM - 4:00 PM</p> -->
                                    <hr>
                                    <!-- <span class="text-muted">Date de fin</span> -->
                                    <!-- <p>09:00 AM - 12:30 PM</p> -->
                                </div>
                            </div>
                        </div> 
                                
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="card">
                            <div class="header d-flex">
                                <h2>Details</h2>
                                <div class="ml-auto">
                                    <a class="btn btn-info" href="/admin/users/index"><i class="fa fa-arrow-left  mr-1"></i> Retour</a>
                                </div>
                            </div>
                            <div class="body">
                                <ul class="list-unstyled">
                                    <li><p><i class="fas fa-envelope"></i>  <strong>Email:</strong> {{ user.email }} </p></li>
                                    <!-- <li><p><i class="fas fa-phone"></i> <strong>Telephone:</strong> </p></li>
                                    <li><p><i class="fas fa-map-marker"></i> <strong>Adresse</strong> </p></li> -->
                                    <li v-if="user.role == 'Etudiant' || user.role == 'Admin' || user.role == 'Super-Admin'"><p><i class="fas fa-user"></i>  <strong>Role:</strong> {{ user.role }}</p></li>
                                    <div>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#Update_Users"><button class="btn btn-primary btn-simple" style="margin-left: 7px" @click="openUpdateModal(admin)">Modifier</button></a>
                                        
                                    </div>
                                    
                                    
                                </ul>
                                
                                <hr>
                                <h5>Activités</h5>
    
                                
                        
                            <!-- <div class="body">
                                <ul class="nav nav-tabs-new2">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Details"> Details</a></li>
                                </ul>
                                <div class="tab-content padding-0 mt-3">
                                    <div class="tab-pane active" id="Details">
                                        
                                     
                                        <h6>Statistique et Resumé </h6>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Total des encaissements effectués</th>
                                                        <th>Nombre des étudiants associés</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                     
                                                    </tr>
                                                    <tr>
                                                       
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> -->
                       
                    </div>  
                                <p></p>
                                <p></p>
                                <p></p>
                                <p></p>
                                <p></p>
                                
                            </div>
                        </div>
                    
                    </div>
                </div>
                        
            </div>


             <!-- Admin Modal -->
   <div class="modal fade" id="Add_Room" tabindex="-1" role="dialog">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h6 class="title" id="defaultModalLabel">Ajouter cet utilisateurs comme admin  </h6>
               </div>
               <div class="modal-body">
                   <div class="row clearfix">
                       <div class=" col-md-12">
                           <div class="form-group mb-2">
                                <label for="nom">Nom</label>
                                <input type="text" v-model="adminForm.nomAdmin" class="form-control">
                           </div>
                           <div class="form-group mb-2">
                                <label for="nom">Prenom</label>
                                <input type="text" v-model="adminForm.prenomAdmin" class="form-control">
                           </div>
                           <div class="form-group mb-2">
                                <label for="adresse">Adresse</label>
                                <input type="text" v-model="adminForm.adresseAdmin" class="form-control" >
                           </div>
                           <div class="form-group mb-2">
                                <label for="adresse">Telephone</label>
                                <input type="text" v-model="adminForm.telephoneAdmin" class="form-control" >
                           </div>
                       </div>
                       <div class=" col-md-12">
                           <div class="form-group mb-3" hidden>
                            <label for="email">Email</label> 
                                <input type="text" v-model="adminForm.emailAdmin" class="form-control">
                           </div>
                           <label for="email">Role Admin</label> 
                           <select class="form-control show-tick" v-model="adminForm.roleAdmin">
                               <option value=""> --Selectionnez---</option>
                               <option value="Admin"> Admin</option>
                               <option value="Super-Admin">Super Admin</option>
                        </select>
                       </div>
                      
                       
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-primary" @click="addAdmin()">Ajouter</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
               </div>
           </div>
       </div>
   </div>

             <!-- Student Modal -->
    <div class="modal fade" id="Add_Student" tabindex="-1" role="dialog">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h6 class="title" id="defaultModalLabel">Ajouter cet utilisateurs comme etudiant</h6>
               </div>
               <div class="modal-body">
                   <div class="row clearfix">
                       <div class=" col-md-12">
                           <div class="form-group mb-2">
                                <label for="nom">Nom</label>
                                <input type="text" v-model="etudiantForm.nomEtudiant" class="form-control">
                           </div>
                           <div class="form-group mb-2">
                                <label for="nom">Prenom</label>
                                <input type="text" v-model="etudiantForm.prenomEtudiant" class="form-control">
                           </div>

                           <div class="form-group mb-2">
                                <label for="nom">Date de naissance</label>
                                <!-- <input data-provide="datepicker" v-model="etudiantForm.dateNaissance"  data-date-autoclose="true" class="form-control"> -->
                                <input type="date" v-model="etudiantForm.dateNaissance" class="form-control">

                           </div>
                           <div class="form-group mb-2">
                                <label for="adresse">Adresse</label>
                                <input type="text" v-model="etudiantForm.adresseEtudiant" class="form-control" >
                           </div>
                           <div class="form-group mb-2">
                                <label for="adresse">Telephone</label>
                                <input type="text" v-model="etudiantForm.telephoneEtudiant" class="form-control" >
                           </div>
                       </div>
                       <div class=" col-md-12">
                           <div class="form-group mb-3" hidden>
                            <label for="email">Email</label> 
                                <input type="text" v-model="etudiantForm.emailEtudiant" class="form-control">
                           </div>
                          
                       </div>
                      
                       
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-primary" @click="addEtudiant()">Ajouter</button>
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
               </div>
           </div>
       </div>
   </div>
        
        
        <!-- modal update  -->
        <!-- <div class="modal fade" id="Update_Users" tabindex="-1" role="dialog" style="z-index: 1052;">
        <div class="modal-dialog modal-lg" role="document">
    
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Modifier les informations de l'admin</h6>
                </div>
                <form>
                    
            
                <div class="modal-body">
                    <h6></h6>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.nomAdmin" name="nomAdmin" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.prenomAdmin" name="prenom" placeholder="Prenom">
                            </div>
                        </div>
                        
                        
                    </div>
                    
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.emailAdmin" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.telephoneAdmin" name="telephone" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.adresseAdmin" name="adresse" placeholder="Adresse">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select name="role" v-model="form.roleAdmin" id="role"  class="form-control">
                                    <option value="1">Select...</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Etudiant">Etudiant</option>
                                </select>
                            
                            </div>
                        </div>
                        
                    </div>
                </div>
    
        
                <div class="modal-footer">
                    <button @click.prevent="updateAdmin()" class="btn btn-primary">Mettre a jour</button>
                
                    <button type="button" @click="form.reset" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
                </form>
            </div>
        </div>
        </div>
             -->
    </template>
    
    
    
    <script>
    import axios from "axios";
    import Swal from "sweetalert2";
    import { Form } from "vform";
    
    export default {
    
        props: ['id'],
    
        mounted() {
            console.log('Component mounted.');
            this.getUserDetails(); 
                  
        },
        data(){
            return{
                form: new Form({
                    email: "",
                    role: "",   
               
                }),

                adminForm: new Form({
                    nomAdmin: "",
                    prenomAdmin: "",
                    adresseAdmin: "",
                    telephoneAdmin: "",
                    emailAdmin: "",
                    roleAdmin: "", 
                }),

                etudiantForm: new Form({
                    nomEtudiant: "",
                    prenomEtudiant: "",
                    dateNaissance: "",
                    adresseEtudiant: "",
                    telephoneEtudiant: "",
                    emailEtudiant: "",
                }),

            
                user: [],
                selectedAdmin: null,
                selectedEtudiant: null,
                
                         
            };
        },
        methods: {
            getUserDetails(){
                 axios.get(`/api/admin/users/${this.id}`)
                .then(response => {
                    console.log(response.data);
                     this.user = response.data.user;
                }).catch(error =>{
                    console.log(error);
                });
    
            },

            async addAdmin(){
            if(
                this.adminForm.nomAdmin != "" &&
                this.adminForm.prenomAdmin != "" &&
                this.adminForm.adresseAdmin != "" &&
                this.adminForm.telephoneAdmin != "" &&
                this.adminForm.emailAdmin != "" &&
                this.selectedAdmin !== null
            ){

                try{
                    await axios.post(`/api/admin/store/${this.selectedAdmin.id}`, this.adminForm.data());
                    Swal.fire("Succès!", "Administrateur ajouté avec succès!", "success");
                    this.adminForm.reset();
                    window.location.href = `/admin/admin/index`;
                    //this.getUsers();
                   
                    
                    
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

        addAdminForUser(user) {
            this.adminForm.nomAdmin = "";
            this.adminForm.prenomAdmin = ""; 
            this.adminForm.adresseAdmin = "";
            this.adminForm.telephoneAdmin = "";
            this.adminForm.emailAdmin = user.email;
            this.selectedAdmin = user;
            $("#Add_Room").modal("hide"); 
        },


        async addEtudiant(){
            if(
                this.etudiantForm.nomEtudiant != "" &&
                this.etudiantForm.prenomEtudiant != "" &&
                this.etudiantForm.dateNaissance != "" &&
                this.etudiantForm.adresseEtudiant != "" &&
                this.etudiantForm.telephoneEtudiant != "" &&
                this.etudiantForm.emailEtudiant != "" &&
                this.selectedEtudiant !== null
            ){

                try{
                    await axios.post(`/api/admin/etudiant/store/${this.selectedEtudiant.id}`, this.etudiantForm.data());
                    Swal.fire("Succès!", "Etudiant ajouté avec succès!", "success");
                    this.etudiantForm.reset();
                    //this.getUsers();
                    window.location.href = `/admin/etudiant/index`;
                   
                    
                    
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

        addEtudiantForUser(user) {
            this.etudiantForm.nomEtudiant = "";
            this.etudiantForm.prenomEtudiant = ""; 
            this.etudiantForm.dateNaissance = ""; 
            this.etudiantForm.adresseEtudiant = "";
            this.etudiantForm.telephoneEtudiant = "";
            this.etudiantForm.emailEtudiant = user.email;
            this.selectedEtudiant = user;
            $("#Add_Room").modal("hide"); 
        },

        
    
            // openUpdateModal(admin)
            // {
            //     this.selectedAdmin = admin;
            //     this.form.fill
            //     ({ 
            //         nomAdmin: admin.nomAdmin,
            //         prenomAdmin: admin.prenomAdmin,
            //         adresseAdmin: admin.adresseAdmin,
            //         telephoneAdmin: admin.telephoneAdmin,
            //         emailAdmin: admin.emailAdmin,
            //         roleAdmin: admin.roleAdmin,
                
            //     });
            // },
    
    
            // async updateUser()
            // {
            //     if(this.form.nom_utilisateur != "" && this.form.prenom_utilisateur != "" && this.form.adresse_utilisateur != "" && this.form.telephone_utilisateur != "" && this.form.email_utilisateur != "" )
            //     {
    
                
            //         try{
            //             await axios.put(`/api/admin/users/${this.selectedUser.id}`, this.form.data());
                        
            //             Swal.fire('Succès!', 'Les informations de l\'utilisateur ont été mises à jour avec succès!', 'success')
            //                 .then(
            //                     () => {
            //                         // this.form.reset();
            //                         this.getUsersDetails();
            //                         //window.location.href =`/admin/users/${this.users.id}`;
                                                            
    
            //                     }
            //                 );
            //         }catch(error)
            //         {
            //             console.log(error);
            //             if(error.response.status==422)
            //             {
            //                 Swal.fire('Erreur!', 'Veuillez remplir tous les champs obligatoires!', 'error');
            //             }
            //         }
            //     }else
            //     {
            //         Swal.fire('Erreur!', 'Veuillez remplir tous les champs obligatoires!', 'error');
            //     }
            // },
           
    
        },
    
    };
</script>
    
    