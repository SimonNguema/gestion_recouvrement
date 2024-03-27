
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
                                <input type="text" v-model="form.nomEtudiant" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" v-model="form.prenomEtudiant"  class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="naissance">Date Naissance</label>
                                <input data-provide="datepicker" v-model="form.dateNaissance"  data-date-autoclose="true" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" v-model="form.adresseEtudiant" class="form-control" >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="telephone">Telephone</label>
                                <input type="text" v-model="form.telephoneEtudiant" class="form-control" >
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-md-6 col-sm-12">     
                            <label for="niveauEtude">Niveau Etude</label>  
                            <input type="text" v-model="form.niveauEtude" class="form-control" >                         
                            <select class="form-control show-tick" v-model="form.niveauEtude">
                                <option value=""> --Selectionnez---</option>
                                <option value="licence"> Licence</option>
                                <option value="master">Master</option>
                                <option value="doctorat">Doctorat</option>
                                
                            </select>
                        </div> -->
                        <!-- <div class="col-lg-4 col-md-6 col-sm-12">     
                            <label for="programe">Programme Etude</label>  
                            <input type="text" v-model="form.programmeEtude" class="form-control" >                         
                            <select class="form-control show-tick" v-model="form.programmeEtude">
                                <option value=""> --Selectionnez---</option>
                                <option value="genie_logiciel">Genie Logiciel</option>
                            </select>
                                
                        </div>  -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="email">Email</label> 
                                <input type="text" v-model="form.emailEtudiant" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <!-- <div class="col-sm-12">
                            <input type="file" class="dropify">
                            <input class="form-control form-control-sm" v-model="form.photoEtudiant" id="formFileSm" type="text">

                        </div> -->
                        <div class="col-sm-12">
                            <div class="form-group mt-3">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary" @click="addEtudiant()">Enregistrer</button>
                            <button type="submit" class="btn btn-outline-secondary">Annuler</button>
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
               
                
                nomEtudiant: "",
                prenomEtudiant: "",
                dateNaissance: "",
                adresseEtudiant: "",
                telephoneEtudiant: "",
                photoEtudiant: "",
                emailEtudiant: "",

            }),
        };
    },


    methods:{

        async addEtudiant(){
            if(
                this.form.nomEtudiant != "" &&
                this.form.prenomEtudiant != "" &&
                this.form.dateNaissance != "" &&
                this.form.telephoneEtudiant != ""&&
                this.form.adresseEtudiant !="" &&
                this.form.emailEtudiant != "" 
                
                
            ){

                try{
                    await axios.post("/api/admin/etudiant/store", this.form.data());
                    Swal.fire("Succès!", "Etudiant ajouté avec succès!", "success");
                     this.form.reset;
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
            
        }

    
    }


    }


</script>