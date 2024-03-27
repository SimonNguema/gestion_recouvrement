<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="/assets/images/lg/avatar1.jpg" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Bienvenue,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{ Auth::user()->admin->nomAdmin }}</strong></a>


                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{route('admin.profil.index')}}"><i class="icon-user"></i>Mon Profil</a></li>
                    <li class="divider"></li>
                    <li><a href="{{route('logout')}}"><i class="icon-power"></i>Deconnexion</a></li>
                </ul>
            </div>                
            <hr>
            
        </div>
       
            
        <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul class="metismenu li_animation_delay">
                        <li class="active"><a href="{{route('admin.dashboard.index')}}"><i class="fa fa-dashboard"></i><span>Tableau de bord</span></a></li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-tag"></i><span>Paiements</span></a>
                            <ul>
                                <li><a href="{{route('admin.encaissement.index')}}">Historique Payement</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('admin.users.index')}}" class="has-arrow"></i><span>Utilisateurs</span> </a>

                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-users"></i><span>Etudiants</span> </a>
                            <ul>
                                <li><a href="{{route('admin.etudiant.index')}}">Liste Etudiant</a></li>
                                
                                {{-- <li><a href="{{route('admin.etudiant.filtrer')}}">Trier</a></li> --}}
                                
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fa  fa-user-circle"></i><span>Administrateurs</span> </a>
                            <ul>
                                <li><a href="{{route('admin.admin.index')}}">Liste Admin</a></li>
                               
                                
                            </ul>
                        </li>

                        <li>
                            <a href="#Authentication" class="has-arrow"><i class="fa fa-building"></i><span>Gestion academique</span></a>
                            <ul>
                                <li><a href="{{route('admin.campus.index')}}">Campus</a></li>
                                <li><a href="{{route('admin.departement.index')}}">Departement</a></li>
                                <li><a href="{{route('admin.programme.index')}}">Programme</a></li>
                                <li><a href="{{route('admin.cycle.index')}}">Cycle</a></li>
                                <li><a href="{{route('admin.niveau.index')}}">Niveau</a></li>
                                <li><a href="{{route('admin.rythme.index')}}">Rythme</a></li>
                                <li><a href="{{route('admin.annee_academique.index')}}">Annee Academeique</a></li>
                                
                            </ul>
                        </li>

                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-tag"></i><span>Engagement</span></a>
                            <ul>
                                {{-- <li><a href="{{route('admin.engagement_type_frais.create')}}">Ajouter engagement</a></li> --}}
                                <li><a href="{{route('admin.engagement_type_frais.index')}}">Tous les engagements</a></li>
                                <li><a href="{{route('admin.type_frais.index')}}">Type frais</a></li>

                              
                            </ul>
                        </li>
                       
                       
                      
                    </ul>
                </nav>
            </div>
            <div class="tab-pane" id="Chat">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="right_chat list-unstyled li_animation_delay">
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="/assets/images/xs/avatar1.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Chris Fox <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">chrisfox@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="/assets/images/xs/avatar2.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Joge Lucky <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Jogelucky@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="/assets/images/xs/avatar3.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Isabella <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Isabella@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="/assets/images/xs/avatar4.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                <span class="message">FolisiseChosielie@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="/assets/images/xs/avatar5.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Alexander <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Alexander@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="/assets/images/xs/avatar6.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Isabella <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Isabella@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="/assets/images/xs/avatar7.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                <span class="message">FolisiseChosielie@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-contact.html" class="btn btn-block btn-primary">View all Doctors</a>
                    </li>
                </ul>
            </div>
            
              
        </div>          
    </div>
</div>