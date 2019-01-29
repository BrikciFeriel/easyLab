@extends('master')

 @section('content')

 	<div class="wrapper">
            <div class="container-fluid">

                <!-- Page title box -->
                <div class="page-title-alt-bg"></div>
                <div class="page-title-box">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Hb Home</a></li>
                        <li class="breadcrumb-item active">Nouvelle entreprises</li>
                   
                    </ol>
                    <h4 class="page-title">Ajouter</h4>
                </div>
                <!-- End page title box -->

                <!-- Basic Form Wizard -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            

                            <div class="pull-in">
                                <form id="basic-form" action="#">
                                    <div>
                                        <h3>Compte entreprise</h3>
                                        <section>
                                            <div class="form-group clearfix">
                                                <label class="control-label " for="userName">Identifiant *</label>
                                                <div class="">
                                                    <input class="form-control required" id="userName" name="userName" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label " for="password"> Mot de passe *</label>
                                                <div class="">
                                                    <input id="password" name="password" type="text" class="required form-control">

                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="control-label " for="confirm">Confirmer mot de passe *</label>
                                                <div class="">
                                                    <input id="confirm" name="confirm" type="text" class="required form-control">
                                                </div>
                                            </div>

                                        </section>
                                        <h3>Profile</h3>
                                        <section>
                                            <div class="form-group clearfix">

                                                <label class="control-label" for="name"> Nom de l'entreprise *</label>
                                                <div class="">
                                                    <input id="name" name="name" type="text" class="required form-control">
                                                </div>
                                            </div>
                                            <div class="form-group clearfix">
                                                <label class="control-label " for="surname"> Logo *</label>
                                                <div class="">
                                                    <input id="surname" name="surname" type="text" class="required form-control">

                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="control-label " for="email">Email *</label>
                                                <div class="">
                                                    <input id="email" name="email" type="text" class="required email form-control">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="control-label " for="address">Addresse *</label>
                                                <div class="">
                                                    <input id="address" name="address" type="text" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group clearfix">
                                                <label class="control-label ">(*) Obligatoires</label>
                                            </div>

                                        </section>
                                        <h3>Hints</h3>
                                        <section>
                                            <div class="form-group clearfix">
                                                <div class="col-lg-12">
                                                    <ul class="list-unstyled w-list">
                                                        <li><b>First Name :</b> Jonathan </li>
                                                        <li><b>Last Name :</b> Smith </li>
                                                        <li><b>Emial:</b> jonathan@smith.com</li>
                                                        <li><b>Address:</b> 123 Your City, Cityname. </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </section>
                                        <h3>Finish</h3>
                                        <section>
                                            <div class="form-group clearfix">
                                                <div class="col-lg-12">
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="checkbox-h" type="checkbox">
                                                        <label for="checkbox-h">
                                                            I agree with the Terms and Conditions.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </form>
                            </div> <!-- end .pull-in-->

                        </div> <!-- end card-box -->
                    </div> <!-- end col -->
                </div>
                <!-- End row -->

            </div> <!-- end container -->
        </div>
 @endsection
