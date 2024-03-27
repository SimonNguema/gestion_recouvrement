<template>
    <div id="main-content">
      <div class="container-fluid">
          <div class="block-header">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                      <h2>Ajouter Paiement</h2>
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
                          <h2><strong>Information</strong> Paiement </h2>
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
                          <div class="row clearfix">
                              <div class="col-lg-6 col-md-12">
                                  <label for="annee">Engagement</label>
                                  <select class="form-control show-tick" v-model="form.idEngagement">
                                      <option v-for="engagement in engagement" :value="engagement.id">{{ engagement.id }}</option>
                                      
                                  </select>
                                  
                              </div>
                          </div>                          
                          <div class="row clearfix">
                             
                              <div class="col-sm-12">
                                  <button type="submit" class="btn btn-primary" @click="addEngagement()">Enregistrer</button>
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
      console.log('Component mounted.');
      this.getEngagement();
  },

  data(){
      return{
      
          form: new Form({
              nombreTranche: '',
        
              idEtudiant: this.id
              
              
          }),
          programme : [],
          campus: [],
          rythme: [],
          niveau: [],
          type_frais: [],
          annee: [],
      }

  },
  methods:{
      async addEngagement(){
          if( this.form.nombreTranche != "" &&
              this.form.totalFrais != "" && 
              this.form.idProgramme != "" && 
              this.form.idAnneeAcademique != "" && 
              this.form.idCampus != "" && 
              this.form.idNiveau != "" && 
              this.form.idRythme != "" && 
              this.form.idTypeFrais != ""

          ){

              try{
                  await axios.post("/api/admin/engagement/store", this.form.data());
                  Swal.fire("Succès!", "Engagement ajouté avec succès!", "success");
                  this.form.reset();
                 // window.location.href = `/admin/etudiant/{id}`;
                  //window.location.href = `/admin/etudiant/${id}`;
                  this.$emit('engagementAdded');
                  window.history.back(); // Rediriger vers la page précédente
                   //location.reload(); // Rafraîchir la page actuelle
              }catch(error){
                  console.log(error);
                  if (error.response.status == 422){
                      Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");

                  }
              }

          }else{
              Swal.fire("Erreur!", "Veuillez remplir tous les champs obligatoires!", "error");

          }
          
      },

      async getTypeFrais() {
          try {
              const response = await axios.get("/api/admin/type_frais/index");
              this.type_frais = response.data.type_frais; 
          } catch (error) {
              console.error("Erreur lors de la récupération des type frais:", error);
          }
      },

      async getNiveau() {
          try {
              const response = await axios.get("/api/admin/niveau/index");
              this.niveau = response.data.niveau; 
          } catch (error) {
              console.error("Erreur lors de la récupération des niveaux:", error);
          }
      },

      async getCampus() {
          try {
              const response = await axios.get("/api/admin/campus/index");
              this.campus = response.data.campus; 
          } catch (error) {
              console.error("Erreur lors de la récupération des campus:", error);
          }
      },

      async getRythme() {
          try {
              const response = await axios.get("/api/admin/rythme/index");
              this.rythme = response.data.rythme; 
          } catch (error) {
              console.error("Erreur lors de la récupération des rhytmes:", error);
          }
      },

      async getAnnee() {
          try {
              const response = await axios.get("/api/admin/annee/index");
              this.annee = response.data.annee; 
          } catch (error) {
              console.error("Erreur lors de la récupération des annees:", error);
          }
      },

      async getProgramme() {
                 try {
                     const response = await axios.get("/api/admin/programme/index");
                     this.programme = response.data.programme; 
                 } catch (error) {
                     console.error("Erreur lors de la récupération des programmes:", error);
                 }
             },
 

  

  }
}
 </script>