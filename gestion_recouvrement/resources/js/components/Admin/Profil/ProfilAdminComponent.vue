<template>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2> Profil</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Administrateur</li>
                            <li class="breadcrumb-item active">Profil</li>
                        </ul>
                    </div>
                    
                </div>
            </div>

            <!-- {{-- Profil User --}} -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                
                <div class="card member-card">
                    <div class="header primary-bg">
                        <h4 class="m-t-10 text-light">{{admin.admin.nomAdmin}} {{admin.admin.prenomAdmin}}</h4>
                    </div>
                    <div class="member-img">
                        <a href="javascript:void(0);"><img src="/assets/images/lg/avatar1.jpg" class="rounded-circle" alt="profile-image"></a>
                    </div>
                    <div class="body">
                        <div class="row text-center border-bottom pb-2">
                            <div class="col-md-6 border-right">
                                <label class="d-block text-muted mb-1">Nom</label>
                                <h6> <p>{{ admin.admin.nomAdmin }}</p></h6>
                            </div>
                            <div class="col-md-6">
                                <label class="d-block text-muted mb-1">Prenom</label>
                                <h6> {{ admin.admin.prenomAdmin }}</h6>
                            </div>
                        </div>
                        <div class="row text-center mt-2 border-bottom pb-2">
                            <div class="col-md-6 border-right">
                                <label class="d-block text-muted mb-1">Email</label>
                                <h6>{{ admin.admin.emailAdmin }}</h6>
                            </div>
                            <div class="col-md-6">
                                <label class="d-block text-muted mb-1">Telephone</label>
                                <h6>{{ admin.admin.telephoneAdmin }}</h6>
                            </div>
                        </div>
                        <div class="row text-center mt-2 border-bottom pb-2">
                            <div class="col-md-12">
                                <label class="d-block text-muted mb-1">Adresse</label>
                                <h6>{{ admin.admin.adresseAdmin }}</h6>
                            </div>
                        </div>
                        
                    </div>
                </div>
                    
        
                    <!-- <div class="card">
                        <div class="header">
                            <h2>Info</h2>
                            
                        </div>
                        <div class="body">
        
                            <small class="text-muted">Utilisateur: </small>
                            <p> user.nom   user.prenom </p>
        
                            <small class="text-muted">Adresse: </small>
                            <p> user.adresse </p>
                            
                            <small class="text-muted">Adresse email: </small>
                            <p> user.email </p>
                            <small class="text-muted">Telephone: </small>
                            <p> user.telephone </p>
            
                        </div>
                    </div>                     -->
                </div>
            
                <div class="col-lg-8 col-md-12">
        <!--    
                    <div class="card">
                        <div class="row profile_state">
                            <div class="col-lg-3 col-6">
                                <div class="body">
                                    <i class="fa fa-thumbs-up"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="2365" data-speed="1000" data-fresh-interval="700">2365</h5>
                                    <small>Experience</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="body">
                                    <i class="fa fa-star"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="1203" data-speed="1000" data-fresh-interval="700">1203</h5>
                                    <small>Awards</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="body">
                                    <i class="fa fa-user"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="324" data-speed="1000" data-fresh-interval="700">324</h5>
                                    <small>Clients</small>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="body">
                                    <i class="fa fa-bug"></i>
                                    <h5 class="m-b-0 number count-to" data-from="0" data-to="1980" data-speed="1000" data-fresh-interval="700">1980</h5>
                                    <small>Surgery</small>
                                </div>
                            </div>
                        </div>
                    </div> -->
        
        
                    <div class="card" style="background-color:  #ffd230 ;">
                        <div class="body" style="color: white;">
                            <ul class="nav nav-tabs-new">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Basic">Basic</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Account">Compte</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#General">Activite</a></li>
                            </ul>
                        </div>
                    </div>
        
                    <div class="tab-content padding-0">
        
                        <div class="tab-pane active" id="Basic">
                            <div class="card">
                                <div class="body">
                                    <h6> Information Basic</h6>
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" v-model="admin.admin.nomAdmin"  placeholder="Nom" readonly>
                                            </div>
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" v-model="admin.admin.prenomAdmin" placeholder="Prenom" readonly>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">                                                
                                                <input type="text" class="form-control" v-model="form.adresseAdmin" placeholder="Adresse">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" v-model="form.telephoneAdmin" placeholder="Telephone">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" @click="updateAdmin()">Mise a jour</button> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-default">annuler</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="Account">
                            <div class="card">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12">
                                            <h6>Donnee du compte</h6>
                                            
                                            <div class="form-group">
                                                <input type="email" class="form-control" v-model="admin.admin.emailAdmin" placeholder="Email" readonly>
                                            </div>
                                            
                                        </div>
        
                                        <div class="col-lg-12 col-md-12">
                                            <h6>Changer le Mot de passe</h6>
                                            <div class="form-group">
                                                <input type="password"  class="form-control" v-model="oldPassword" placeholder="Mot de passe actuel">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" v-model="newPassword"  placeholder="Nouveau mot de passe">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" v-model="confirmPassword"  placeholder="Confirmer le mot de passe">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary" @click="updatePassword()">Mise a jour</button> &nbsp;&nbsp;
                                    <button class="btn btn-default">annuler</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="General">
                            <div class="card">
                                <div class="body">
                                    <h6>Details des paiements</h6>
                                    <div class="row">
                                        
                                        <div class="col-lg-12 col-md-12">
                                            
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
        
                    </div>
                    
                </div>
            </div>

            
        </div>
    </div>
</template>

<script>
import axios from "axios";
import Swal from "sweetalert2";
import { Form } from "vform";

export default {
    props: ['admin'],
    mounted() {
           
           this.admin;
       },
    data() {
        return {
            form: new Form({
                adresseAdmin: this.admin.adresseAdmin,
                telephoneAdmin: this.admin.telephoneAdmin
            }),

            oldPassword: '',
            newPassword: '',
            confirmPassword: ''
           
        }
    },
    methods: {
        async updateAdmin() {
    
            if (this.form.adresseAdmin === '' || this.form.telephoneAdmin === '') {
                Swal.fire('Erreur!', 'Veuillez remplir tous les champs.', 'error');
                return;
            }

            try {
                // Effectuez une requête API pour mettre à jour l'adresse et le téléphone
                await this.form.put(`/api/admin/profil/${this.admin.id}`, {
                    adresseAdmin: this.form.adresseAdmin,
                    telephoneAdmin: this.form.telephoneAdmin
                });

                Swal.fire('Succès', 'Informations mises à jour', 'success');

                location.reload();
            } catch (error) {
                
                Swal.fire('Erreur', 'Erreur lors de la mise à jour des informations', 'error');
            }
        },
       

        async updatePassword() {
            if (this.oldPassword === '' || this.newPassword === '' || this.confirmPassword === '') {
                Swal.fire('Erreur', 'Veuillez remplir tous les champs.', 'error');
                return;
            }
            if (this.newPassword !== this.confirmPassword) {
                // Affichez un message d'erreur
                Swal.fire('Erreur', 'Les nouveaux mots de passe ne correspondent pas.', 'error');
                return;
            }
            console.log('Utilisateur connecté :', this.admin);

            try {
                const response = await axios.put(`/api/admin/profil/${this.admin.id}/password`, {
                    old_password: this.oldPassword,
                    new_password: this.newPassword,
                    confirm_password: this.confirmPassword
                });
                Swal.fire('Succès', response.data.message, 'success');
                // Réinitialisez les champs du formulaire
                this.oldPassword = '';
                this.newPassword = '';
                this.confirmPassword = '';
            } catch (error) {
                
                Swal.fire('Erreur', error.response.data.error, 'error');
            }
        }
    
    }
}
</script>
