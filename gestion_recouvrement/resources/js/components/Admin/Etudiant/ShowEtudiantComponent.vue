<template>

    <!-- mani page content body part -->
        <div id="main-content">
            <div class="container-fluid">                        
                        
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h2>Details Etudiant</h2>                           
                        </div>
                    
                    </div>
                </div>
    
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12">
                        <div class="card profile-header">
                            <div class="body text-center">
                                <div class="profile-image mb-3 text-center"> <img class="img-fluid rounded" src="/assets/images/lg/avatar6.jpg" alt=""> </div>
                                <div class="mt-4">
                                    <h4 class="mb-0"><strong></strong>{{ etudiant.nomEtudiant }} {{ etudiant.prenomEtudiant }}</h4>
                                    
                                </div>
                                <div class="page_action" style="margin-top: 15px;">
                                    <a href="javascript:void(0);" class="btn btn-danger" @click="deleteEtudiant(etudiant.id)">Retirer cet etudiant</a>
                                </div>
                            </div>                    
                        </div>                               
                        <div class="card">
                            <div class="header">
                                <h2>Informations generales</h2>
                            </div>
                            <div class="body">
                                <div class="workingtime" v-if="engagementsExist" v-for="engagement in engagementTypeFrais" :key="engagement.id">
                                    
                                    <p> </p>
                                    <p>  <strong>Annee Academique:</strong> {{ engagement.annee_academique.intituleAnnee }} </p>

                                    <p><strong>Campus:</strong> {{ engagement.campus.intituleCampus }}</p>
                                    <p><strong>Departement</strong> {{ engagement.programme.departement.intituleDepartement}}</p>

                                    <p><strong>Niveau</strong> {{ engagement.niveau.intituleNiveau }}</p>
                                    <p><strong>Programme</strong> {{ engagement.programme.intituleProgramme}}</p>
                                    <hr>
                                     <span class="text-muted">Information sur les paiements</span>
                                     <p>  <strong>Total Frais:</strong> {{ engagement.totalFrais }} FCFA</p>
                                     <p>  <strong>Nombre Tranche:</strong> {{ engagement.nombreTranche }} </p>
                                     <p>  <strong>Montant par tranche:</strong> {{ engagement.montantTranche }} FCFA</p>
                                    
                                     <div class="ml-auto">
                                        <a  href="javascript:void(0);" class="btn btn-danger" @click="removeEngagement(engagement.id)">Retirer cet engagement</a>
                                    </div>

                                </div>
                                <div v-else>
                                    <p>Aucune donnée enregistrée</p>
                                    <div class="ml-auto">
                                        <a class="btn btn-info" :href="'/admin/engagement/create/'+ etudiant.id"> Ajouter un engagement</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                                
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="card">
                            <div class="header d-flex">
                                <h2>Details</h2>
                                <div class="ml-auto">
                                    <a class="btn btn-info" href="/admin/etudiant/index"><i class="fa fa-arrow-left  mr-1"></i> Retour</a>
                                </div>
                            </div>
                            <div class="body">
                                <ul class="list-unstyled">
                                    <li><p><i class="fas fa-calendar"></i>  <strong>Date de naissance:</strong> {{ etudiant.dateNaissance }} </p></li>

                                    <li><p><i class="fas fa-envelope"></i>  <strong>Email:</strong> {{ etudiant.emailEtudiant }} </p></li>
                                    <li><p><i class="fas fa-phone"></i> <strong>Telephone:</strong>{{ etudiant.telephoneEtudiant }}</p></li>
                                    <li><p><i class="fas fa-map-marker"></i> <strong>Adresse</strong> {{ etudiant.adresseEtudiant }}</p></li>
                                   
                                    <div class="header d-flex"> 
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#Update_Users"><button class="btn btn-primary btn-simple" style="margin-left: 7px" @click="openUpdateModal(etudiant)">Modifier</button></a>
                                        
                                        <div class="ml-auto"  v-if="engagementsExist && parseInt(montantRestant) !== 0">
                                            <a class="btn btn-success" :href="'/admin/encaissement/'+ etudiant.id"><i class="fa fa-arrow-left  mr-1"></i> Ajouter un paiement</a>
                                        </div>
                                        <div class="ml-auto" v-else>
                                        </div>
                                    </div>
                                    
                                    
                                </ul>
                                
                                <hr>
                                <h5>Activités</h5>
    
                                
                        
                            <div class="body">
                                <ul class="nav nav-tabs-new2">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Details"> Historique des paiements</a></li>
                                </ul>
                                <div v-if="encaissement.length === 0">
                                    <p>Aucun paiement</p>
                                </div>
                                <div v-else>
                                    <div class="tab-content padding-0 mt-3">
                                        <div class="tab-pane active" id="Details">
                                            <div class="tab-pane" id="tab-billings">
                                        <div>
                                            <h6>Methode de paiement: Espece</h6>
                                            <div class="payment-info">
                                                <h4 class="payment-name"><i class="fa fa-paypal"></i>Reste a payer: <strong style="color:#32CD32;">{{montantRestant  }} FCFA </strong></h4>
                                                <!-- <span>Next billing charged $29  </span> -->
                                                <br>
                                                <!-- <em class="text-muted">Autopay on May 12, 2020</em> -->
                                                <!-- <a href="javascript:void(0);" class="edit-payment-info">Edit Payment Info</a> -->
                                            </div>
                                            <!-- <p class="margin-top-30"><a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add Payment Info</a></p> -->
                                        </div>

                                        <div>
                                            <h6>Dernier paiements</h6>
                                            <table class="table billing-history" v-for="encaissement in encaissement" :key="encaissement.id">
                                                <thead class="sr-only">
                                                    <tr>
                                                        <th>Plan</th>
                                                        <th>Amount</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h3 class="billing-title">{{encaissement.etudiants[0].engagement_type_frais[0].type_frais.intituleTypeFrais}} <span class="invoice-number"></span></h3>
                                                            <span class="text-muted"> {{ encaissement.dateEncaissement }}</span>
                                                        </td>
                                                        <td class="amount" style="color:#32CD32;">{{ encaissement.montantEncaisser }} FCFA</td>
                                                        <td class="action" title="Afficher les Details"><a :href="'/admin/etudiant/encaissement/'+encaissement.id"><i class="fas fa-eye"></i>Afficher</a></td>
                                                        
                                                    </tr>
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        
                                        </div>
                                    </div>

                                            
                                        
                                            
                                            
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
        
        
        <!-- modal update  -->
        <div class="modal fade" id="Update_Users" tabindex="-1" role="dialog" style="z-index: 1052;">
        <div class="modal-dialog modal-lg" role="document">
    
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Modifier les informations de l'etudiant</h6>
                </div>
                <form>
                    
            
                <div class="modal-body">
                    <h6></h6>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.nomEtudiant" name="nomAdmin" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.prenomEtudiant" name="prenom" placeholder="Prenom">
                            </div>
                        </div>
                        
                        
                    </div>
                    
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.emailEtudiant" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.telephoneAdmin" name="telephone" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" v-model="form.adresseEtudiant" name="adresse" placeholder="Adresse">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input data-provide="datepicker" v-model="form.dateNaissance"  data-date-autoclose="true" class="form-control">

                            
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
            this.getEtudiantDetails(); 
            this.getEngagementTypeFrais();
            this.getEncaissement();
            // this.getTypeFrais();
            // this.getNiveau();
            // this.getCampus();
            // this.getRythme();
            // this.getAnnee();
            // this.getProgramme();
            // this.getDepartement();
            
                  
        },
        data(){
            return{
                form: new Form({
                nomEtudiant: "",
                prenomEtudiant: "",
                dateNaissance: "",
                adresseEtudiant: "",
                telephoneEtudiant: "",
                photoEtudiant: "",
                emailEtudiant: "",
                
                
                
               
                }),
                etudiant: [],
                engagementTypeFrais: [],
                engagement_type_frais: [],
                selectedEtudiant: '',
                engagementsExist: false,
                montantRestant: '',

                // programme : [],
                // departement : [],
                // campus: [],
                // rythme: [],
                // niveau: [],
                // type_frais: [],
                // annee: [],
                etudiants: [],

                encaissement: [],
                         
            };
        },
        methods: {
            getEtudiantDetails(){
                 axios.get(`/api/admin/etudiant/${this.id}`)
                .then(response => {
                    console.log(response.data);
                     this.etudiant = response.data.etudiant;
                }).catch(error =>{
                    console.log(error);
                });
    
            },

            getEncaissement() {
                axios
                .get(`/api/admin/etudiant/${this.id}/encaissement`)
                .then((response) => {
                    this.encaissement = response.data.encaissement;
                    this.montantRestant=response.data.montantRestant
                    console.log(this.encaissement);
                })
                .catch((error) => {
                    console.error("Une erreur s'est produite lors de la récupération des encaissement", error);
                });
            },

            getEngagementTypeFrais() {
                axios.get(`/api/admin/etudiant/${this.id}/engagement_type_frais`)
                .then(response => {
                    console.log(response.data);
                    this.engagementTypeFrais = response.data.engagementTypeFrais;
                    this.engagementsExist = this.engagementTypeFrais.length > 0;
                }).catch(error => {
                    console.log(error);
                });
            },

        

            async deleteEtudiant(etudiantId)
        {

            Swal.fire({
                title: 'Confirmation',
                text: 'Êtes-vous sûr de vouloir retirer cet Etudiant?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui',
                cancelButtonText: 'Non'
            }).then(async (result) => {
                if (result.isConfirmed){
                    try{
                    
                        await axios.delete(`/api/admin/etudiant/${etudiantId}`);
                        this.getEtudiant();
                        Swal.fire('Succès!', 'Etudiant a été retité avec succès!', 'success');
                    }catch (error){
                        console.log(error);
                        Swal.fire('Erreur!', 'Une erreur est survenue lors de la suppression de cet Etudiant.', 'error');
                    }
                }
            })

        },
    
            openUpdateModal(etudiant)
            {
                this.selectedEtudiant = etudiant;
                this.form.fill
                ({ 
                    nomEtudiant: etudiant.nomEtudiant,
                    prenomEtudiant: etudiant.prenomEtudiant,
                    dateNaissance: etudiant.dateNaissance,
                    adresseEtudiant: etudiant.adresseEtudiant,
                    telephoneEtudiant: etdudiant.telephoneEtudiant,
                    emailEtudiant: etudiant.emailEtudiant,
                
                });
            },
    
    
  
           
    
        },
    
    };
</script>
    
    