@extends('layout')
@section('title')
    joobs | escolha o seu papel
@stop

@section('css')
    <style type="text/css">
        .bold{
            font-weight: bold;
            font-size: 18px;
        }
        .company{
            background-image: url("/assets/img/company-min-bg.jpg") !important;
            background-size: 100% 100% !important;
        }.job{
            background-image: url("/assets/img/job-min-bg.jpg") !important;
            background-size: 100% 100% !important;
        }
    </style>
@stop

@section("body")
<div class="row">
    <div class="col-lg-offset-1 col-lg-4 col-xl-offset-1 col-xl-10">
        <div class="row">
            <div class="col-md-12 m-b-10">
                <div class="ar-3-2 widget-1-wrapper">
                    <!-- START WIDGET -->
                    <div class="company widget-1 panel no-border bg-complete no-margin widget-loader-circle-lg">
                        <div class="panel-body">
                            <div class="pull-bottom bottom-left bottom-right ">
                                <span class="label font-montserrat fs-11">Escolha</span>
                                <br>
                                <h2 class="text-white">Você gostaria de ser uma empresa?</h2>
                                <p class="text-white hint-text">Uma <span class="bold">empresa</span> pode cadastrar vagas para encontrar seus <span class="bold">funcionarios</span></p>
                                <div class="row stock-rates m-t-15">
                                    {{ HTML::linkRoute("company.register", "Vou ser uma EMPRESA!", [], ["class" => "btn btn-success btn-block btn-lg"])  }}

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-offset-2 col-lg-4 col-xl-offset-2 col-xl-10">
        <div class="row">
            <div class="col-md-12 m-b-10">
                <div class="ar-3-2 widget-1-wrapper">
                    <!-- START WIDGET -->
                    <div class="job widget-1 panel no-border bg-complete no-margin widget-loader-circle-lg">
                        <div class="panel-body">
                            <div class="pull-bottom bottom-left bottom-right ">
                                <span class="label font-montserrat fs-11">Escolha</span>
                                <br>
                                <h2 class="text-white">Você gostaria de ser uma pessoa?</h2>
                                <p class="text-white hint-text">Uma <span class="bold">pessoa</span> pode se candidatar a <span class="bold">empregos</span></p>
                                <div class="row stock-rates m-t-15">
                                    {{ HTML::linkRoute("person.register", "Vou ser uma PESSOA!", [], ["class" => "btn btn-success btn-block btn-lg"])  }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END WIDGET -->
                </div>
            </div>
        </div>
    </div>
</div>
@stop
