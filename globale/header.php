<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * floatBox
 */
?>

<body class="nav-md" style="margin: 0px; background-color: white" onload="initInfos();">

    <div  class="floatHox hidden" id="floatBox">
        <i class="loading"></i>
    </div>
    <!-- top navigation -->
    <a href=""></a>
    <div class="top_nav">

        <div class="nav_menu" style="margin: 0px; padding: 0px;">
            <nav class="" role="navigation">
                <!--<div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>-->



                <ul id="laNav" style="" class="nav navbar-nav navbar-right">

                    <?php
                    if (!Brain::sessionencours()) {
                        echo '<li class="">

                        <a href="' . HOMEURL . '/login">
                            Connexion
                        </a>

                    </li>';
                    } else {


                        if ($_SESSION['privilege'] == 0) {
                            $typeadmin = '';
                        } else {
                            $typeadmin = 'admin';
                        }
                        echo '<li class="">

                        <a href="' . HOMEURL . '?deconnexion=true" >
                            Deconnexion
                        </a>

                    </li>
                    <li class="">

                        <a href="' . HOMEURL . '/' . $typeadmin . '">
                            Profil
                        </a>

                    </li>


';
                    }
                    ?>
                    <?php
                    if (!Brain::sessionencours()) {

                        echo '<li class="">

                                    <a href="' . HOMEURL . '/inscription" >
                                        Inscription
                                    </a>

                            </li>';
                    }
                    ?>                    
                    <!--Menu-->
                    <!--                    <li class="">
                    
                                            <a href="javascript:;">
                                                <i class=""></i>menu
                    
                                            </a>
                                        </li> 
                                        Menu
                                        <li class="">
                    
                                            <a href="javascript:;">
                                                <i class=""></i>menu
                    
                                            </a>
                                        </li> -->
                    <!--Menu-->
                    <li class="">

                        <a href="javascript:;">
                            <i class=""></i>Contact

                        </a>
                    </li> <!--Menu-->
                    <li class="">

                        <a href="javascript:;">
                            <i class=""></i>Nos services
                        </a>
                    </li> <!--Menu-->






                    <li class="">

                        <a href="javascript:;">
                            <i class=""></i>Accueil
                        </a>
                    </li> <!--Menu-->

                </ul>
            </nav>
        </div>

    </div>
    <!-- /top navigation -->

    <div class="container body">
    </div>

