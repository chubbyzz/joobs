{{--<style>--}}
    {{--p{--}}
        {{--font-family: "Helvetica Neue Light", "HelveticaNeue-Light", "Helvetica Neue", Calibri, Helvetica, Arial;--}}
        {{--color: #34495e;--}}
    {{--}--}}
    {{--body a{--}}
        {{--color: #3498db;--}}
        {{--font-weight: bold;--}}
        {{--text-decoration:none;--}}
    {{--}--}}
    {{--body a:hover{--}}
        {{--color: #2980b9;--}}
    {{--}--}}
{{--</style>--}}
{{--<body>--}}
    {{--<table align="center"  cellpadding="0" cellspacing="0" width="800" style=" font-family: 'Helvetica Neue Light', 'HelveticaNeue-Light', 'Helvetica Neue', Calibri, Helvetica, Arial;color: #34495e;">--}}
        {{--<tbody >--}}
        {{--<tr>--}}
            {{--<td style="padding: 10px 40px 30px 40px;">--}}
                {{--<img style="width: 170px;" src="{{ URL::asset('/assets/img/logo_2x.png') }}">--}}
            {{--</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td bgcolor="#ecf0f1" style="padding: 20px 80px; border-top: 1px solid #bdc3c7;border-bottom: 1px solid #bdc3c7;">--}}
                {{--<table>--}}
                    {{--<tbody>--}}
                    {{--<tr>--}}
                        {{--<td style="padding: 100px 0;">--}}
                            {{--<p >Olá, para ativar a sua conta {{ HTML::linkRoute("users.active", 'Clique aqui', [$id,$code]) }}</p>--}}
                            {{--<p>ou copie e cole em seu navegador o linque abaixo <br><b>{{ URL::route("users.active", [$id, $code])  }}</b></p>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td style="padding: 10px 40px;">--}}
                {{--<p align="right">contato.joobs@gmail.com</p>--}}
            {{--</td>--}}
        {{--</tr>--}}
        {{--</tbody>--}}
    {{--</table>--}}
{{--</body>--}}


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
<table align="center"  cellpadding="0" cellspacing="0" width="800" style=" font-family: 'Helvetica Neue Light', 'HelveticaNeue-Light', 'Helvetica Neue', Calibri, Helvetica, Arial;color: #34495e;border:1px solid #bdc3c7;">
    <tr>
        <td width="600" height="226">
            <img src="{{ URL::asset('/assets/img/logo_2x.png') }}" style="width: 170px;" />
        </td>
    </tr>
    <tr>
        <td width="600" height="10" style="border: 0px;padding: 0px;margin: 0px;">
            <table border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                    <td style="font-size: 25px; padding: 20px; font-weight: bold;">Ativar conta</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table border="0" cellspacing="0" cellpadding="0" width="600" bgcolor="#ecf0f1">
                <tr>
                    <td style="padding: 20px;" align="left">
                        <p >Olá, para ativar a sua conta {{ HTML::linkRoute("users.active", 'Clique aqui', [$id,$code]) }}</p>
                        <p>ou copie e cole em seu navegador o linque abaixo <br><b>{{ URL::route("users.active", [$id, $code])  }}</b></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="600" height="255" style="border: 0px;padding: 0px;margin: 0px;">
        </td>
    </tr>
</table>
</body>
</html>


