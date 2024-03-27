
<template>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Liste Etudiant</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href=""><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Etudiant</li>
                            <li class="breadcrumb-item active">Liste</li>
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
                                       
                                        <th class="border-top-0">ID</th>
                                        <th class="border-top-0">Nom</th>
                                        <th class="border-top-0">Prenom</th>
                                        <th class="border-top-0">Email</th>
                                        <th class="border-top-0">Number</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            
                               
                                
                                    <tr v-for="etudiant in etudiant" :key="etudiant.id">
                                        
                                        <td><span class="list-name">{{ etudiant.id }}</span></td>
                                        <td>{{etudiant.nomEtudiant}}</td>
                                        <td>{{etudiant.prenomEtudiant}}</td>
                                        <td>{{ etudiant.emailEtudiant }}</td>
                                        <td>{{ etudiant.telephoneEtudiant }}</td>										
                                        <td>
                                            <a :href="'/admin/etudiant/'+etudiant.id"><i class="fas fa-eye" style="color: deepskyblue;" title="Afficher les Details"></i></a>
                                            <i class="fas fa-edit text-warning" title="Modifier" style="padding-left: 15px; "></i>
                                            <i class="fas fa-trash-alt text-danger" style="padding-left: 15px; " @click="deleteEtudiant(etudiant.id)"></i>

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
        this.getEtudiant();
    },
    data(){
        return{
            etudiant : [],
        };
    },


    methods:
    {
        async getEtudiant() {
            try {
                const response = await axios.get("/api/admin/etudiant/index");
                this.etudiant = response.data.etudiant; 
            } catch (error) {
                console.error("Erreur lors de la récupération des etudiant:", error);
            }
        },

        async deleteEtudiant(etudiantId)
        {

            Swal.fire({
                title: 'Confirmation',
                text: 'Êtes-vous sûr de vouloir supprimer cet Etudiant?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Oui',
                cancelButtonText: 'Non'
            }).then(async (result) => {
                if (result.isConfirmed){
                    try{
                    
                        await axios.delete(`/api/admin/etudiant/${etudiantId}`);
                        this.getEtudiant();
                        Swal.fire('Succès!', 'Etudiant a été supprimé avec succès!', 'success');
                    }catch (error){
                        console.log(error);
                        Swal.fire('Erreur!', 'Une erreur est survenue lors de la suppression de cet Etudiant.', 'error');
                    }
                }
            })

        },
    }
}
</script>