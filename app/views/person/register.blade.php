@extends('layout')
@section('title')
    Vou ser um candidato
@stop
@section("body")
    <div class="col-lg-offset-3 col-lg-6 m-t-50 sm-p-t-40">
        {{ Form::open(["id" => "form-register", "class"=> "p-t-15", "role" => "form", "url" => "/person/register" ]) }}
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group form-group-default">
                    <label>E-mail</label>
                    {{ Form::text("email", null, ["placeholder" => "exemplo@exemplo.com", "class" => "form-control"]) }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group form-group-default">
                    <label>Senha</label>
                    {{ Form::password("password", ["placeholder" => "", "class"=>"form-control" ]) }}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group form-group-default">
                    <label>Confirmar senha</label>
                    {{ Form::password("password_confirmation", ["placeholder" => "Digite a senha novamente", "class"=>"form-control" ]) }}
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-cons m-t-10" type="submit">Criar conta</button>
        {{ Form::close() }}
    </div>
@stop
