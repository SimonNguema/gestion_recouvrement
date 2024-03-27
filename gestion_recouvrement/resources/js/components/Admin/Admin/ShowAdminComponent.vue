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
                                <div class="profile-image mb-3 text-center"> <img class="img-fluid rounded" src="/assets/images/lg/avatar1.jpg" alt=""> </div>
                                <div class="mt-4">
                                    <h4 class="mb-0"><strong></strong>{{ admin.nomAdmin }} {{ admin.prenomAdmin }}</h4>
                                    
                                </div>
                                <div class="page_action" style="margin-top: 15px;">
                                    <a href="javascript:void(0);" class="btn btn-danger" data-toggle="modal" data-target="#Add_Room">Retirer cet admin</a>
                                </div>
                            </div>                    
                        </div>                               
                        <div class="card">
                            <div class="header">
                                <h2>Informations generales</h2>
                            </div>
                            <div class="body">
                                <div class="workingtime">
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
                                    <a class="btn btn-info" href="/admin/admin/index"><i class="fa fa-arrow-left  mr-1"></i> Retour</a>
                                </div>
                            </div>
                            <div class="body">
                                <ul class="list-unstyled">
                                    <li><p><i class="fas fa-envelope"></i>  <strong>Email:</strong> {{ admin.emailAdmin }} </p></li>
                                    <li><p><i class="fas fa-phone"></i> <strong>Telephone:</strong>{{ admin.telephoneAdmin }}</p></li>
                                    <li><p><i class="fas fa-map-marker"></i> <strong>Adresse</strong> {{ admin.adresseAdmin }}</p></li>
                                    <li><p><i class="fas fa-user"></i>  <strong>Role:</strong>  {{ admin.roleAdmin }}</p></li>
                                    <div>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#Update_Users"><button class="btn btn-primary btn-simple" style="margin-left: 7px" @click="openUpdateModal(admin)">Modifier</button></a>
                                        
                                    </div>
                                    
                                    
                                </ul>
                                
                                <hr>
                                <h5>Activités</h5>
    
                                
                        
                            <div class="body">
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
                                                        <!-- <th>Status</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <!-- <td>Bsc (Hons)</td>
                                                        <td>2 years full time</td>
                                                        <td>OUK23</td> -->
                                                    </tr>
                                                    <tr>
                                                        <!-- <td>Bsc</td>
                                                        <td>3 years full time</td>
                                                        <td>OUB18</td> -->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                       
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


             <!-- Default Size -->
  
        
        
        <!-- modal update  -->
        <div class="modal fade" id="Update_Users" tabindex="-1" role="dialog" style="z-index: 1052;">
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
            
    </template>
    
    
    
    <script>
    import axios from "axios";
    import Swal from "sweetalert2";
    import { Form } from "vform";
    
    export default {
    
        props: ['id'],
    
        mounted() {
            this.getAdminDetails(); 
            console.log('Component mounted.');
                  
        },
        data(){
            return{
                form: new Form({
                    nomAdmin: "",
                    prenomAdmin: "",
                    adresseAdmin: "",
                    telephoneAdmin: "",
                    emailAdmin: "",
                    roleAdmin: "",    
               
                }),

                

                admin: [],
              
                         
            };
        },
        methods: {
            getAdminDetails(){
                 axios.get(`/api/admin/admin/${this.id}`)
                .then(response => {
                    console.log(response.data);
                     this.admin = response.data.admin;
                }).catch(error =>{
                    console.log(error);
                });
    
            },

        

            openUpdateModal(admin)
            {
                this.selectedAdmin = admin;
                this.form.fill
                ({ 
                    nomAdmin: admin.nomAdmin,
                    prenomAdmin: admin.prenomAdmin,
                    adresseAdmin: admin.adresseAdmin,
                    telephoneAdmin: admin.telephoneAdmin,
                    emailAdmin: admin.emailAdmin,
                    roleAdmin: admin.roleAdmin,
                
                });
            },
    
    
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
    
    