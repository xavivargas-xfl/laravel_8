<!DOCTYPE html>
<html lang="es">
<head>
    <title>CERTIFICADO</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="title" content="Título de la WEB">


    <style>
        body{
            font-family: Sans-serif;
        }
        p{

        }
        .container{

            padding: 0 1rem;
            margin: 1rem;
        }
        .page-before {
            page-break-after: always;
        }
        @page {
            margin-left: 2cm;
            margin-right: 2cm;
            margin-top: 2cm;
        }
        .interlineado { line-height: 125%;}
        .number { line-height: 0;}
        .title { line-height: 0.5cm;}
        footer {
            position: fixed;
            bottom: 0cm;
            left: 1cm;
            right: 1cm;
            height: 3cm;


        }

    </style>

</head>
<body>
<div class="container">


    <section>
        <div class="container " >
            <p class="number" style="font-size: 10px">CREDENCIAL MAXI-BASQUET<span>{{$var}}</span>/<span>{{$anio}}</span></p>
            <p class="interlineado" style="font-size: 13px">
                <strong> MAXI-BASQUET {{$anio}}</strong>
            </p>




            <p style="font-size: 13px">CERTIFICAN:</p>
            <p class="interlineado" style="font-size: 12px">
                NOMBRE : <strong>{{$jugador->name}}</strong><br>
                APELLIDOS : <strong>{{$jugador->apellido}}</strong><br>
                DOCUMENTO : <strong>{{$jugador->ci}}</strong><br>
                FECHA DE NACIMIENTO : <strong>{{$jugador->fechaNac}}</strong><br>

            </p>

            <p class="interlineado" style="font-size: 12px">
                FOTO : <strong>{{$jugador->foto}}</strong><br>
                EQUIPO :<strong>{{$jugador->name}}</strong><br>
                VALIDO HASTA :<strong>{{"$anio+1"}}</strong><br>
                 QR :<span>{{$jugador->name}}</span> .....

            </p>

            <p style="font-size: 12px">Esta certificación tiene validez de 1 anio calendario
            </p>
            <br><br>
            <p align="center" style="font-size: 12px">Cochabamba, <span>{{$fecha}}</span>
            </p>

        </div>
        <footer>
            <p style="font-size: 10px"></p>
            <p style="font-size: 9px">IMPORTATE
            </p>
        </footer>
    </section>
    </div>



</body>
</html>

