@extends('layout')
@section('title')
    Joobs | Cadastrar nova empresa
@stop
@section('css')
    <link type="text/css" rel="stylesheet" href="/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css">
@stop
@section("body")
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">Cadastrar nova empresa</div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        {{ Form::open(["route" => "company.store", "class" => "p-t-15", "role" => "form"])  }}
                        <div class="col-lg-6">
                            <!-- START Form Control-->
                            <div class="form-group form-group-default required">
                                <label>E-mail</label>
                                <div class="controls">
                                    {{ Form::email("user[email]", null, ["placeholder" => "Digite seu E-mail", "class" => "form-control"])  }}
                                </div>
                            </div>
                            <div class="form-group form-group-default required">
                                <label>Senha</label>
                                <div class="controls">
                                    {{ Form::password("user[password]", ["placeholder" => "Digite sua senha", "class" => "form-control"])  }}
                                </div>
                            </div>
                            <div class="form-group form-group-default required">
                                <label>Confirmar senha</label>
                                <div class="controls">
                                    {{ Form::password("user[password_confirmation]", ["placeholder" => "Digite sua senha novamente", "class" => "form-control"])  }}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group form-group-default required">
                                <label>Nome</label>
                                <div class="controls">
                                    {{ Form::text("company[name]", null, ["placeholder" => "Nome da empresa", "class" => "form-control"])  }}
                                </div>
                            </div>
                            <div class="form-group form-group-default required">
                                <label>Descrição</label>
                                <div class="controls">
                                    {{ Form::textarea("company[description]", null, [ "style"=> "height:90px;","id"=>"wysiwyg51" ,"placeholder" => "Fale um pouco mais sobre a sua empresa", "class" => "wysiwyg1 form-control"])  }}
                                </div>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Midias</label>
                                <div class="controls">
                                    {{ Form::text("company[midia]", null, ["placeholder" => "Página na web, facebook, twitter", "class" => "form-control"])  }}
                                </div>
                            </div>
                            <div class="form-group form-group-default required">
                                <label>Telefone</label>
                                <div class="controls">
                                    {{ Form::text("company[phone]", null, ["placeholder" => "Número de telefone ou celular", "class" => "form-control"])  }}
                                </div>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Endereço (map)</label>
                                <div class="controls">
                                    {{ Form::text("company[map]", null, ["placeholder" => "Url do google maps", "class" => "form-control"])  }}
                                </div>
                            </div>
                        </div>
                        <div class="form-group pull-right">
                            {{ Form::submit('Cadastrar',['class' => 'btn btn-success'])  }}
                        </div>
                        {{ Form::close()  }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop