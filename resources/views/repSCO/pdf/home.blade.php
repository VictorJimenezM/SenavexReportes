<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<style>
        .logo-snv {            
            max-width: 150px;
            max-height: 100px;            
        }
        .taypi-snv {            
            max-width: 150px;
            max-height: 100px;            
        }
        .table1 {
            width: 100%;
        }
        .table2 {
            width: 100%;
            border: 2px solid;
        }
       
        .table4 {
            width: 100%;
            border-collapse: collapse;         
        }
        .table_cabecera1 {
            font-size: 9px;
            text-align: center;
            border: 1px solid;             
        }
        .table_cabecera2 {
            font-size: 6px;
            text-align: center;
            border: 1px solid;             
        }
        .table_texto4 {
            font-size: 9px;
            border: 1px solid;             
        }
      
    </style>
    
<table class="table1">
   <tr>
          <td style="text-align:left"><img class="logo-snv" src="img/logo-snv.png" alt="logosnv"></td>
          <td style="text-align:center; font-size: 15px;">SEGUIMIENTO</td>
          <td style="text-align:right"><img class="taypi-snv" src="img/taypi-snv.png" alt="taypisnv"></td>
      </tr>
      <tr>
          <td style="text-align:left"></td>
          <td style="text-align:center; font-size: 15px;">A CERTIFICADOS DE ORIGEN</td>
  
      </tr>
      <tr>
          <td style="text-align:left">  </td>
          <td style="text-align:center; font-size: 13px;">{{ date('d-m-Y h:i:s', strtotime(now())) }}
          <td class="px-3 py-2"> 
          </td></td>
  </tr> 
</table>


<br>
   <div style="border:1px solid; ">
   <br>
   <table class="table1">
                

                            <tr>
                                <td colspan="2"   align="center" class="table_texto1"> Del : <font color="red">{{$f1}} </font>  <br>  Al :  <font color="red">{{$f2}} </font>     </td>
                                <td colspan="2"   align="center" class="table_texto1">Regional:______</td>
                            </tr>
                        
                            
    </table>
<br><br>

  
                <!--Fin Busqueda por fechas-->
                
              <div style="text-align:center; font-size: 13px;">
                <div class="table-responsive">
                  <table id="procesos" class="table4">
                    <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th BGCOLOR="YELLOW" class="table_cabecera1" colspan="2"  color="red"> <font color="red">REGISTRO</font></th>
                       
                    </tr>
                      <tr BGCOLOR="#CFD8DC">
                                        <th class="table_cabecera1"> <font color="red">No.</font> </th>
                                        <th class="table_cabecera1">No. DDJJ</th>
                                        <th class="table_cabecera1">Acuerdo</th>
                                        <th class="table_cabecera1">RUEX</th>
                                        <th class="table_cabecera1">Nombre o Razon Social</th>
                                        <th class="table_cabecera1"> <font color="red">Fecha de Registro</font> </th>
                                        <th class="table_cabecera1">Tipo Emision</th>
                                        <th class="table_cabecera1">Estado</th>
                                        <th class="table_cabecera1"> <font color="red">Fecha Emision</font></th>
                                        <th class="table_cabecera1"> <font color="red">Fecha Entrega</font></th>
                                        <th class="table_cabecera1"> Regional</th>
                                        <th  BGCOLOR="YELLOW" class="table_cabecera1"> <font color="red">Mes</font></th>
                                        <th  BGCOLOR="YELLOW" class="table_cabecera1"><font color="red">año</font></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($procesos as $proceso)
                      
                           <tr  class="table_texto4"> 
                           <td class="table_texto4">{{$proceso->number_row}}</td>
                                    <td class="table_texto4">{{$proceso->nro_control}}</td>
                                    <td class="table_texto4">{{$proceso->acuerdo}}</td>
                                    <td class="table_texto4">{{$proceso->ruex}}</td>
                                    <td class="table_texto4">{{$proceso->razon_social}}</td>
                                    <td class="table_texto4">{{$proceso->fecha_registro}}</td>
                                    <td class="table_texto4">{{$proceso->tipo_emision}}</td>
                                    <td class="table_texto4">{{$proceso->estado_solicitud_digital}}</td>
                                    <td class="table_texto4">{{$proceso->fecha_revision}}</td>
                                    <td class="table_texto4"> -- </td>
                                    <td class="table_texto4">{{$proceso->regional}}</td>
                                    <td class="table_texto4">{{$proceso->mes}}</td>
                                    <td class="table_texto4">{{$proceso->year}}</td>
                              </tr>
                      @endforeach             
                    </tbody>
                  </table>
                </div>

     
    </div>
</body>
</html>