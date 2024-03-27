<template>

    <div class="row clearfix">
                   
                   <div class="col-xl-12 col-lg-8 col-md-12">
                       <div class="card">
                           <div class="header">
                               <h2>Chiffres Paiements</h2>
                              
                           </div>
                           <div class="body">
                               <div class="row clearfix">
                                   <div class="col-md-4">
                                       <div class="body primary-bg text-light">
                                           <h4> {{ montantTotalEngagement }}FCFA</h4>
                                           <span>TOTAL FRAIS</span>
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="body primary-bg text-light">
                                           <h4>{{ montantTotalEngagement - montantRestant }} FCFA</h4>
                                           <span>MONTANT TOTAL REGLER</span>
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="body primary-bg text-light">
                                           <h4> {{montantRestant}} FCFA</h4>
                                           <span>RESTE A PAYER</span>
                                       </div>
                                   </div>
                                   
                                   
                               </div>
                               <div id="apex-chart-line-column"></div>
                           </div>
                       </div>
                   </div>
               </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Liste des derniers paiements</h2>
                        <ul class="header-dropdown">
                            <li><a class="tab_btn active" href="javascript:void(0);" title="Yearly">2023-2024</a></li>
    
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"></a>
                                <ul class="dropdown-menu dropdown-menu-right animated bounceIn">
                                    <li><a href="javascript:void(0);">2022-2023</a></li>
                                    <li><a href="javascript:void(0);">2021-2022</a></li>
                                    <li><a href="javascript:void(0);">2020-2021</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table m-b-0 table-hover">
                                <thead class="thead-yellow" style="background-color: #fad130;">
                                    <tr>
                                        <th>Type de frais</th>
                                        <th>Montant payé</th>
                                        <th>Date de paiement</th>
                                        <th>Mode paiement</th>
                                        
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody v-if="encaissement.length > 0">
                                    <tr v-for="encaissement in encaissement" :key="encaissement.id">
                                        <td>
                                            <h6>{{encaissement.etudiants[0].engagement_type_frais[0].type_frais.intituleTypeFrais}} </h6>
                                            <span> </span>
                                        </td>
                                        <td>
                                            <strong style="color:#32CD32;">{{encaissement.montantEncaisser}} FCFA</strong>
                                        </td>
                                        <td>
                                            <div class="sparkline text-left" data-type="line" data-width="8em"
                                                data-height="20px" data-line-Width="1.5" data-line-Color="#00c5dc"
                                                data-fill-Color="transparent">{{encaissement.dateEncaissement}}</div>
                                        </td>
                                        <td>{{ encaissement.modeEncaissement }}</td>
                                     
                                        <td><strong>{{encaissement.statusEncaissement}}</strong></td>
                                    </tr>
                                   
                                   
                                    
                                </tbody>
                                <tbody v-else>
                                    <tr>
                                        <td colspan="5" class="text-center"><h4>Aucun paiement</h4></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                   
        </div>
    </template>
    
    <script>
        import axios from "axios";
        
        export default {
            props: ['etudiant'],
            mounted() {
                //this.etudiant;
                this.getPaiements();
            },
            data(){
                return {
                    encaissement: [],
                    montantTotalEngagement: 0,
                    montantRestant : 0,
                };
            },
            methods: {
                getPaiements() {
                    axios.get(`/api/home/${this.etudiant.id}/paiement`)
                    .then(response => {
                        console.log(response.data);
                        this.encaissement = response.data.encaissement;
                        this.montantTotalEngagement = response.data.montantTotalEngagement;
                        this.montantRestant  = response.data.montantRestant;
                    })
                    .catch(error => {
                        console.error("Une erreur s'est produite lors de la récupération des paiements", error);
                    });
                },
            },
        };
    </script>