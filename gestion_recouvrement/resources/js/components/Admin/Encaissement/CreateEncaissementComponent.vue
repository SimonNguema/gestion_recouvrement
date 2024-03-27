<template>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Ajouter un Paiement</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Paiement</li>
                            <li class="breadcrumb-item active">Ajouter</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- {{-- <div class="d-flex flex-row-reverse">
                          <div class="page_action">
                              <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                              <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                          </div>
                          <div class="p-2 d-flex">
                              
                          </div>
                      </div> --}} -->
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Information</strong> sur le paiement </h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);" class="waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class="waves-effect waves-block">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <p>Montant a verser <strong style="color:#32CD32;">{{ montantTranche }} FCFA</strong></p>
                            <div class="row clearfix">
                                
                                <div class="col-lg-6 col-md-12">
                                    <label for="montant">Montant Versé</label>
                                    <input type="number" class="form-control" v-model="form.montantEncaisser">
                                    
                                    <!-- <div class="form-group">
                                        <label for="Nombre_tranche">Montant Total</label>
                                        <input type="number" class="form-control" v-model="form.montantTotalEngagement" readonly>
                                    </div> -->
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="campus">Mode Paiement</label>
                                        <input type="text" class="form-control" v-model="form.modeEncaissement" readonly>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="Nombre_tranche">Montant à payer</label>
                                        <input type="number" class="form-control" v-model="form.montantTotalEngagement" readonly>
                                    </div>
                                </div> -->
                                <div class="col-lg-6 col-md-12">
                                    <!-- <label for="montant">Montant Versé</label>
                                    <input type="number" class="form-control" v-model="form.montantEncaisser"> -->
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <label for="date">Date Paiement</label>
                                    <input type="date" class="form-control" v-model="form.dateEncaissement" readonly>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="campus">Status du paiement</label>
                                        <select class="form-control show-tick" v-model="form.statusEncaissement">
                                            <option value=""> --Selectionnez---</option>
                                            
                                            <option value="PAYER">PAYER</option>
                                        </select>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row clearfix">
                                
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary" style="margin-right: 10px;" @click="addEncaissement()">Ajouter</button>
                                    <button type="submit" class="btn btn-outline-secondary" @click="form.reset()">Annuler</button>
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
export default {
    props: ['id'],
    mounted() {
        console.log('ID de etudiantEngagement :', this.idEtudiant);
        this.form.dateEncaissement = new Date().toISOString().split("T")[0];
        console.log(this.montantTranche);
        this.getEngagementTypeFrais();
        
        //  this.montantTotalEngagement; // correction ici
        //  this.montantTrancheEngagement; // correction ici
    },  
    data() {
        return {
            form: {
                montantTotalEngagement:'',
                montantTrancheEngagement: this.montantTranche,
                montantEncaisser: '',
                dateEncaissement: '',
                modeEncaissement: 'ESPECE',
                statusEncaissement: '',
                idEtudiant: this.id,
            },
            engagementTypeFrais: '',
            montantTranche: '',
            engagementTypeFrais: [],
            
        }
    },
    methods: {

        async addEncaissement() {

            const currentDate = new Date();
            const formattedDate = currentDate.toISOString().slice(0, 19).replace('T', ' ');
            this.form.dateEncaissement = formattedDate;
            const montantEncaisser = parseFloat(this.form.montantEncaisser);
            const montantTranche = parseFloat(this.montantTranche);
            if (montantEncaisser !== montantTranche) {
                Swal.fire("Erreur!", "Le montant que vous avez entrer  ne correspond pas au montant à verser!", "error");
                return; // Arrêter l'exécution de la méthode
            }
            if (this.form.montantEncaisser != "" &&
                this.form.dateEncaissement != "" &&
                this.form.modeEncaissement != "" &&
                this.form.statusEncaissement != ""
            ) {
                
                try {
                    await axios.post("/api/admin/encaissement/store", this.form);
                    Swal.fire("Succès!", "Paiement ajouté avec succès!", "success");

                    // this.montantTotalEngagement = response.data.montantTotalEngagement; 
                    // this.montantTrancheEngagement = response.data.montantTrancheEngagement; 
                    // this.montantTotalEngagement = montantTotalEngagement;
                    // this.montantTrancheEngagement = montantTrancheEngagement;
                    
                    
                    this.form = {}; // Réinitialiser le formulaire après l'envoi des données
                    window.history.back(); // Rediriger vers la page précédente
                } catch (error) {
                console.log(error);
                if (error.response.status == 422) {
                    Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");
                }
            }
        } else {
            Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");
        }
},  

getEngagementTypeFrais() {
                axios.get(`/api/admin/etudiant/${this.id}/engagement_type_frais`)
                .then(response => {
                    console.log(response.data);
                    this.engagementTypeFrais = response.data.engagementTypeFrais;
                    this.engagementsExist = this.engagementTypeFrais.length > 0;
                    if (this.engagementTypeFrais.length > 0) {
                        this.montantTranche = this.engagementTypeFrais[0].montantTranche; // Vous pouvez ajuster cette logique selon vos besoins
                    }
                }).catch(error => {
                    console.log(error);
                });
            },

    }
}
</script>
