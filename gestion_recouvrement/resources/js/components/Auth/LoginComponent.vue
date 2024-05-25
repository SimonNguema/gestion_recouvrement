<template>
    <div v-if="statusLogin == 1" class="card">
        <div class="header">
            <p class="lead">Connectez vous a votre compte</p>
        </div>
        <div class="body">
                <div class="form-group">
                    <label for="signin-email" class="control-label sr-only">Email</label>
                    <input type="email" class="form-control" id="signin-email" v-model="form.email"  name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="signin-password" class="control-label sr-only">Mot de passe</label>
                    <input type="password" class="form-control" id="signin-password" v-model="form.password" name="password" placeholder="Mot de passe">
                </div>
                <!-- <div class="form-group clearfix">
                    <label class="fancy-checkbox element-left">
                        <input type="checkbox">
                        <span>Souvenez-vous de moi</span>
                    </label>								
                </div> -->
                <button type="submit" class="btn btn-primary btn-lg btn-block" @click.prevent="login()" :disabled="is_snippet">{{is_snippet? "Veuillez patienter...": "Connexion"}}</button>
                <div class="bottom">
                    <span class="helper-text m-b-10"><span @click="changeStatusLogin()" style="cursor: pointer; color: rgb(12, 65, 223);"><i class="fa fa-lock"></i> Mot de passe oublie?</span></span>
                    <!-- <i class="fa fa-lock"></i> <router-link to="/forgot-password">Mot de passe oublié?</router-link> -->
                
                </div>
        </div>
    </div>


    <!-- Reinitialiser -->

    <div v-else class="card">
        <div class="header">
            <p class="lead">Réinitialiser votre mot de passe</p>
        </div>
        <div class="body">
            <p>Veuillez entrer votre adresse e-mail ci-dessous pour recevoir des instructions pour réinitialiser le mot de passe..</p>
            
                <div class="form-group">                                    
                    <input type="email" class="form-control" id="signup-password" v-model="formForgot.email" placeholder="email@example.com">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" @click.prevent="sendForgotPasswordLink" :disabled="is_snippet">{{is_snippet? "Veuillez patienter...": "REINITIALISER LE MOT DE PASSE"}} </button>
                <div class="bottom">
                    <span class="helper-text" >Vous connaissez votre mot de passe ? <span @click="changeStatusLogin()" style="cursor: pointer; color: rgb(12, 65, 223);">Connectez-vous</span></span>
                </div>
            
        </div>
    </div>
  </template>
  
  
<script>
import axios from 'axios';
import { Form } from 'vform';

        export default {
          mounted() {
              console.log('Component mounted.')
          },

          data(){
            return{

                formForgot: new Form({
                email: '',
            }),
                form: new Form({
                email: '',
                password:'',
                }),
                loading: true,
                is_view : false,
                is_snippet : false,
                message: '',
                statusLogin: 1,
            }
          },

        methods:{           
       async login(){

            if(this.form.email !== "" && this.form.password !==""){
                    this.is_snippet = true;
                    
                    await this.form.post('/login').then(({data})=>{
                        console.log(data);
                        if(data==0){
                            //this.message = "email ou mot de passe incorrect";
                            this.is_snippet = false;
                            Swal.fire('Erreur!', 'Email ou mot de passe incorrect', 'error');
                        }else if(data==2){
                            //this.message = "Votre compte n'est pas activé!";
                            this.is_snippet = false;
                            Swal.fire('Erreur!', "Votre compte n'est pas activé!", 'error');

                        }else{
                            console.log(data.auth)
                            window.location.href = data.url;
                        }
                    }).catch(error=>{
                        console.log("error")
                        if(error.response.status ==500){
                            //this.message="Erreur serveur";
                            this.is_snippet = false;
                            Swal.fire('Erreur!', 'Erreur serveur', 'error');

                        }else if(error.response.status ==404){
                            //this.message = "Page introuvable";
                            this.is_snippet = false;
                            Swal.fire('Erreur!', 'Page introuvable', 'error');
                        }else if(error.response.status ==419){
                            //this.message= "Http error 419";
                            this.is_snippet = false;
                            Swal.fire('Erreur!', 'HTTP erreur 419', 'error');
                        }else{
                            Swal.fire('Erreur!', 'Une erreur s\'est produite', 'error');
                        }


                    }).finally(()=>this.loading=false)
                                
                    
                }else {
                    Swal.fire('Erreur!', 'Veuillez remplir tous les champs obligatoires!', 'error');
                }


            },

            changeStatusLogin() {
                if (this.statusLogin == 1) {
                    this.statusLogin = 0;
                } else {
                    this.statusLogin = 1;
                }
            },
        
         
        }
    }

  </script>