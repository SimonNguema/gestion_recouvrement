<template>
   
        
            <div class="block-header">
                <main class="page payment-page">
                <section class="payment-form dark">
                <div class="container">
                    <div class="block-heading">
                    <!-- <h2>Payment</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p> -->
                    </div>
                    <form>
                    <div class="products">
                        <div class="header d-flex">
                            <img src="https://www.senpages.com/app/uploads/supdeco-550x550-1.png" style="height: 120px;">

                            <div class="text-right" style="flex-grow: 1;">
                                date de paiement: {{ encaissement.dateEncaissement }}
                            </div>
                        </div>
                        <br><br><br>
                        <h4 class="" style="text-align: center;">{{ intituleProgramme }}</h4>
                        
                        <h3 class="" style="text-align: center;">Recu de caisse</h3>
                        <hr>
                        <br><br>
                        <h4 class="">Etudiant: {{ etudiant.id }}</h4>
                       
                        <h1 style="text-align: center;"> {{ etudiant.nomEtudiant }} {{ etudiant.prenomEtudiant }}</h1>
                        <br>
                        <div class="item">
                            <h4><span class="price">{{intituleDepartement}}</span></h4>
                        <h4><p class="item-name">Niveau</p></h4>
                        <h4><p class="item-description">{{ intituleNiveau }}</p></h4> <div>{{ intituleProgramme }}</div>
                        </div>
                        <div class="item">
                        <span class="price"></span>
                        <h4><p class="item-name">Mode de reglement</p></h4>
                        <h4><p class="item-description">{{encaissement.modeEncaissement}}</p></h4>
                        </div>
                        <br><br>

                        <div class="item">
                            <h4><span class="price">{{intituleTypeFrais}} </span></h4>
                        <h4><p class="item-name">Type Frais</p></h4>
                        
                        </div>

                        <div class="item">
                            <h4><span class="price">{{encaissement.montantEncaisser}} FCFA</span></h4>
                        <h4><p class="item-name">Montant Versé</p></h4>
                        
                        </div>

                        <div class="item">
                            <h4><span class="price">{{encaissement.montantRestant}} FCFA</span></h4>
                        <h4><p class="item-name">Montant restant a versé</p></h4>
                        
                        </div>
                    </div>
                    <div class="card-details">
                        
                        <div class="row">
                        
                       
                        <div class="form-group col-sm-12">
                            <button type="button" class="btn btn-primary btn-block">Envoyer le recu</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
                </section>
                </main>
            </div>
       
   
 
</template>


<script>
    import axios from "axios";
    import Swal from "sweetalert2";
    import { Form } from "vform";
    
    export default {
    
        props: ['id'],
    
        mounted() {
            this. getEncaissementDetails();
                  
        },
        data(){
            return{
                form: new Form({                
               
                }),
                etudiant: [],
                engagementTypeFrais: [],
                encaissement: [],
                intituleNiveau: '',
                intituleProgramme:'',
                intituleDepartement:'',
                intituleTypeFrais:'',
                         
            };
        },
        methods: {

            getEncaissementDetails() {
                axios.get(`/api/admin/etudiant/encaissement/${this.id}`)
                .then(response => {
                    console.log(response.data);
                // Mettre à jour les données de l'encaissement avec les détails récupérés
                this.encaissement = response.data.encaissement;
                this.etudiant = response.data.etudiant;
                this.engagementTypeFrais = response.data.engagementTypeFrais;
                this.intituleNiveau=response.data.intituleNiveau;
                this.intituleProgramme=response.data.intituleProgramme;
                this.intituleDepartement=response.data.intituleDepartement;
                this.intituleTypeFrais=response.data.intituleTypeFrais;

                })
                .catch(error => {
                    console.log(error);
                });
    },


            // getEtudiantDetails(){
            //      axios.get(`/api/admin/etudiant/${this.id}`)
            //     .then(response => {
            //         console.log(response.data);
            //          this.etudiant = response.data.etudiant;
            //     }).catch(error =>{
            //         console.log(error);
            //     });
    
            // },

            // getEncaissement() {
            //     axios
            //     .get(`/api/admin/etudiant/${this.id}/encaissement`)
            //     .then((response) => {
            //         this.encaissement = response.data.encaissement;
            //         this.montantRestant=response.data.montantRestant
            //         console.log(this.encaissement);
            //     })
            //     .catch((error) => {
            //         console.error("Une erreur s'est produite lors de la récupération des encaissement", error);
            //     });
            // },

            // getEngagementTypeFrais() {
            //     axios.get(`/api/admin/etudiant/${this.id}/engagement_type_frais`)
            //     .then(response => {
            //         console.log(response.data);
            //         this.engagementTypeFrais = response.data.engagementTypeFrais;
            //         this.engagementsExist = this.engagementTypeFrais.length > 0;
            //     }).catch(error => {
            //         console.log(error);
            //     });
            // },
    
        },
    
    };
</script>
    