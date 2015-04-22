@extends('layout')
@section('title')
    Joobs | Entrar
@stop
@section('css')
    {{ HTML::style('/assets/css/users/login.css')  }}
@stop
@section("body")
    <div class="col-lg-6  m-t-50 sm-no-margin">
        <div class="row m-t-30 sm-no-margin">
            <div class="col-lg-offset-1 col-lg-10">
                <div class="hidden-xs">
                    <h3>Ainda não tem conta?</h3>
                    <p>Se cadastrar é facil, escolha o tipo de conta que você gostaria e preencha os campos</p>
                </div>
                <br>
                {{ HTML::linkRoute("company.create", "Vou me cadastrar como EMPRESA!", [], ["class" => "btn btn-success btn-block btn-lg"])  }}
                <br>
                {{ HTML::linkRoute("company.create", "Vou me cadastrar como Candidato!", [], ["class" => "btn btn-success btn-block btn-lg"])  }}
            </div>
        </div>
    </div>
    <div class="col-lg-offset-1 col-lg-4 m-t-50 sm-p-t-10">
        <div class="panel border">
            <div class="panel-heading">
                <div class="panel-title"><i class="fa fa-sign-in icon"></i> Entrar</div>
            </div>
            <div class="panel-body">
                    {{ Form::open(["route" => "users.login", "class" => "p-t-15", "role" => "form"])  }}
                    <!-- START Form Control-->
                    <div class="form-group form-group-default">
                        <label>E-mail</label>
                        <div class="controls">
                            {{ Form::email("email", null, ["placeholder" => "Digite seu E-mail", "class" => "form-control"])  }}
                        </div>
                    </div>
                    <!-- END Form Control-->
                    <!-- START Form Control-->
                    <div class="form-group form-group-default">
                        <label>Senha</label>
                        <div class="controls">
                            <input type="password" class="form-control" name="password" placeholder="Credentials" required>
                        </div>
                    </div>
                    <!-- START Form Control-->
                    <div class="row">
                        <div class="col-md-6 no-padding">
                            <div class="checkbox ">
                                <input name="remember" type="checkbox" value="1" id="checkbox1">
                                <label for="checkbox1">Me manter logado</label>
                            </div>
                        </div>
                        {{--<div class="col-md-6 text-right">--}}
                        {{--<a href="#" class="text-info small">Help? Contact Support</a>--}}
                        {{--</div>--}}
                    </div>
                    <!-- END Form Control-->
                    {{ Form::submit("Entrar", ["class" => "btn btn-primary btn-cons m-t-10"]) }}
                    </form>
                    <!--END Login Form-->
            </div>
        </div>
    </div>
@stop
