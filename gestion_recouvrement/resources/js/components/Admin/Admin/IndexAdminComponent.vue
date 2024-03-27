

<template>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Liste Administrateur</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Liste</li>
                        </ul>
                    </div>
                    <!-- <div class="ml-auto">
                        <a class="btn btn-info" href="/admin/admin/create">Ajouter un admin</a>
                    </div> -->
                   
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs-new">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Permanent">Admin</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Consultant">Super-Admin</a></li> -->
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content padding-0">
                        <div class="tab-pane active" id="Permanent">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6 col-sm-12" v-for="admin in admin" :key="admin.id">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="/assets/images/lg/avatar1.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">{{ admin.nomAdmin }}</h4>
                                                <p class="text-muted">{{ admin.prenomAdmin }}</p>
                                              
                                                <p class="text-muted">{{ admin.adresseAdmin }}, {{ admin. telephoneAdmin }}</p>                           
                                                <a :href="'/admin/admin/'+admin.id"  class="btn btn-default btn-simple">Voir Profil</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                   
                            </div> 
                        </div>
                        <div class="tab-pane" id="Consultant">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="card member-card">
                                        <div class="body">
                                            <div class="member-thumb">
                                                <img src="/assets/images/lg/avatar2.jpg" class="img-fluid rounded" alt="profile-image">                               
                                            </div>
                                            <div class="detail mt-3">
                                                <h4 class="mb-0">Pro. Amelia</h4>
                                                <p class="text-muted">Mathematics</p>
                                               
                                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>                           
                                                <a href="javascript:void(0);"  class="btn btn-default btn-simple">View Profile</a>
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
    </div>
</template>



<script>
import axios from 'axios';

export default {
    mounted() {
        console.log('Component mounted.');
        this.getAdmin();
    },
    data(){
        return{
            admin : [],
        };
    },


    methods:
    {
        // async getAdmin() {
        //     try {
        //         const response = await axios.get("/api/admin/index");
        //         this.admin = response.data; 
        //     } catch (error) {
        //         console.error("Erreur lors de la récupération des admins:", error);
        //     }
        // },

        getAdmin()
        { 
            axios.get("/api/admin/index").then((response)=>
            {
                this.admin= response.data.admin;
            }).catch((error) => {
                console.error("Erreur lors de la récupération des admins:", error);
            });
        },

        
    }
}
</script>