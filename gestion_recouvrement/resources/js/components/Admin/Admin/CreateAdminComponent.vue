<template>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Basic</strong> Information </h2>
                    
                </div>
                <div class="body">
                    
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" v-model="form.nomAdmin" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" v-model="form.prenomAdmin"  class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" v-model="form.adresseAdmin" class="form-control" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="telephone">Telephone</label>
                                <input type="text" v-model="form.telephoneAdmin" class="form-control" >
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-md-6 col-sm-12">     
                            <label for="programe">Role</label>                           
                            <select class="form-control show-tick" v-model="form.roleAdmin">
                                <option value=""> --Selectionnez---</option>
                                <option value="Admin">Admin</option>
                                <option value="Super_admin">Super-Admin</option>
                            </select>
                                
                        </div> 
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="email">Email</label> 
                                <input type="text" v-model="form.emailAdmin" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary" @click="addAdmin()">Enregistrer</button>
                            <button type="submit" class="btn btn-outline-secondary">Annueler</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</template>



<script>

export default {
    mounted() {
        console.log('Component mounted.')
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
        };
    },


    methods:{

        async addAdmin(){
            if(
                this.form.nomAdmin != "" &&
                this.form.prenomAdmin != "" &&
                this.form.adresseAdmin != "" &&
                this.form.telephoneAdmin != ""&&           
                this.form.emailAdmin != "" && 
                this.form.roleAdmin != ""
                
            ){

                try{
                    await axios.post("/api/admin/store", this.form.data());
                    Swal.fire("Succès!", "Admin ajouté avec succès!", "success");
                    // this.form.reset;
                    window.location.href = `/admin/admin/index`;
                    
                }catch(error){
                    console.log(error);
                    if (error.response.status == 422){
                        Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");

                    }
                }

            }else{
                Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");

            }
            
        }

    
    }


    }


</script>