<!DOCTYPE HTML>
<html>
  <head>
    <title>fuente de múltiples elementos</title>
    <link rel="stylesheet" href="jcart/css/jomaStyle.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="jcart/js/validate.js"></script>

  </head>
  <body>
    <div class="container">

      <div class="table" style="width:600px">
        <div class="fil cen">
         DATOS ENVIO Y FACTURACION
        </div>
        <div class="fil cen">
          <div class="col2 ">Nombre<br><input id="nom" name="nom"/></div><div class="col2">Apellido<br><input id="ape" name="ape"/></div>
        </div>
        <div class="fil cen">
          <div class="col2 ">Direccion<br><input id="dir" name="dir"/></div><div class="col2">Colonia<br><input id="col" name="col"/></div>
        </div>
        <div class="fil cen">
          <div class="col2 ">Ciudad<br><input id="ciu" name="ciu"/></div><div class="col2">Codigo P.<br><input id="zip" name="zip"/></div>
        </div>
        <div class="fil cen">
          <div class="col2 vat">Estado<br><select name="est" id="est" >
            <option value="Jalisco" selected>Jalisco</option>
            <option value="Colima">Colima</option>
          </select>
          </div><div class="col2"></div>
        </div>

      </div>
      <div>
        Facturacion <input type="checkbox"  name="fac" id="fac" value="true"/>
        <span class="btnCopy">Copiar datos de envio a Facturacion</span>
      </div>

            <div class="tableFac" style="width:600px">
        <div class="fil cen">
         DATOS ENVIO Y FACTURACION
        </div>
        <div class="fil cen">
          <div class="col2 ">Nombre<br><input id="nom" name="nom"/></div><div class="col2">Apellido<br><input id="ape" name="ape"/></div>
        </div>
        <div class="fil cen">
          <div class="col2 ">Direccion<br><input id="dir" name="dir"/></div><div class="col2">Colonia<br><input id="col" name="col"/></div>
        </div>
        <div class="fil cen">
          <div class="col2 ">Ciudad<br><input id="ciu" name="ciu"/></div><div class="col2">Codigo P.<br><input id="zip" name="zip"/></div>
        </div>
        <div class="fil cen">
          <div class="col2 vat">Estado<br><select name="est" id="est" >
            <option value="Jalisco" selected>Jalisco</option>
            <option value="Colima">Colima</option>
          </select>
          </div><div class="col2"></div>
        </div>

      </div>

    </div>  

  
  
  
  </body>
</html>
<script>
var nom = new LiveValidation('nom');
nom.add( Validate.Presence, 
{ failureMessage: "no vacio!!!" } );

var ape = new LiveValidation('ape');
ape.add( Validate.Presence );

var dir = new LiveValidation('dir');
dir.add( Validate.Presence, 
{ failureMessage: "no vacio!!!" } );

var col = new LiveValidation('col');
col.add( Validate.Presence, 
{ failureMessage: "no vacio!!!" } );

var ciu = new LiveValidation('ciu');
ciu.add( Validate.Presence, 
{ failureMessage: "no vacio!!!" } );

var zip = new LiveValidation('zip');
zip.add( Validate.Presence, 
{ failureMessage: "no vacio!!!" } );

$('input[type="checkbox"][name="fac"]').change(function() {
     if(this.checked) {
         // do something when checked
         $(".tableFac").show("slow");
     }
     else
     {
        $(".tableFac").slideUp();
     }
 });


</script>