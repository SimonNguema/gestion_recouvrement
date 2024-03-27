<template>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Historique des paiements</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Paiement</li>
                            <li class="breadcrumb-item active">Historique</li>
                        </ul>
                    </div>
                    <!-- <div class="ml-auto">
                        <a class="btn btn-info" href="/admin/etudiant/create">Ajouter un etudiant</a>
                    </div> -->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            
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
                                <input type="text" class="form-control" placeholder="Recherche...">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>                                       
                                       
                                        <th class="border-top-0">Nom</th>
                                        <th class="border-top-0">Programme</th>
                                        <th class="border-top-0">Type Frais</th>
                                        <th class="border-top-0">Montant </th>
                                        <th class="border-top-0">Methode </th>
                                        <th class="border-top-0">Date </th>
                                        <th class="border-top-0">Action</th>

                                      
                                    </tr>
                                </thead>
                                <tbody>
                            
                               
                                
                                    <tr v-for="encaissement in encaissement" :key="encaissement.id">
                                        
                                        <td><span class="list-name">{{ encaissement.etudiants[0].nomEtudiant }} {{ encaissement.etudiants[0].prenomEtudiant }}</span></td>
                                        
                                        <td><span class="list-name">{{ encaissement.etudiants[0].engagement_type_frais[0].programme.intituleProgramme }}</span></td>
                                        
                                        <td>{{ encaissement.etudiants[0].engagement_type_frais[0].type_frais.intituleTypeFrais }}</td>
                                        <td>{{ encaissement.montantEncaisser }} FCFA</td>
                                        <td>{{ encaissement.modeEncaissement }}</td>	
                                        <td>{{ encaissement.dateEncaissement }}</td>									
                                        <td>
                                            <a href="#"><i class="fas fa-eye" style="color: deepskyblue;" title="Afficher les Details"></i></a>
                                            <!-- <i class="fas fa-edit text-warning" title="Modifier" style="padding-left: 15px; "></i> -->
                                            <i class="fas fa-trash-alt text-danger" style="padding-left: 15px; " @click="deleteEncaissement(encaissement.id)"></i>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</template>




<script>
import axios from 'axios';

export default {
    mounted() {
        console.log('Component mounted.');
        this.getEncaissement();
        this.getEtudiant();
        this.getEngagement();


    },
    data(){
        return{
            encaissement : [],
            etudiant: [],
            engagementTypeFrais: [],
        };
    },


    methods:
    {
        async getEncaissement() {
            try {
                const response = await axios.get("/api/admin/encaissement/index");
                this.encaissement = response.data.encaissement; 
                console.log(this.encaissement);
            } catch (error) {
                console.error("Erreur lors de la récupération des paiements:", error);
            }
        },

        async getEngagement() {
                try {
                    const response = await axios.get("/api/admin/engagement/index");
                    this.engagementTypeFrais = response.data.engagementTypeFrais; 
                } catch (error) {
                    console.error("Erreur lors de la récupération des engagements:", error);
                }
        },

        async getEtudiant() {
            try {
                const response = await axios.get("/api/admin/etudiant/index");
                this.etudiant = response.data.etudiant; 
            } catch (error) {
                console.error("Erreur lors de la récupération des etudiant:", error);
            }
        },

        async deleteEncaissement(encaissementtId)
        {

            Swal.fire({
                title: 'Confirmation',
                text: 'Êtes-vous sûr de vouloir supprimer cet Paiement?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui',
                cancelButtonText: 'Non'
            }).then(async (result) => {
                if (result.isConfirmed){
                    try{
                        await axios.delete(`/api/admin/encaissement/${encaissementtId}`);
                        this.getEtudiant();
                        Swal.fire('Succès!', 'Paiement a été supprimé avec succès!', 'success');
                    }catch (error){
                        console.log(error);
                        Swal.fire('Erreur!', 'Une erreur est survenue lors de la suppression de cet Paiement.', 'error');
                    }
                }
            })

        },
    }
}
</script>
