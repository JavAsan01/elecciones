
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 text-center">
    <h1>EDITAR CANDIDATO</h1>
  </div>
</div>
<br>
  <div class="container">
    <form class=""
    action="<?php echo site_url(); ?>/Candidaturas/procesarActualizacion"
    method="post">
        <div class="row">
          <div class="col-md-1">
            <label for="">ID:</label>
            <br>
            <input type="text" class="form-control" name="id_can" id="id_can" value="<?php echo $canEdit->id_can;?>">
          </div>
          <div class="col-md-3">
            <label for="">Cédula:</label>
            <br>
            <input type="number"
            placeholder="Ingrese la cédula"
            class="form-control"
            name="cedula_can" value="<?php echo $canEdit->cedula_can;?>"
            id="cedula_can">
          </div>
          <!-- <div class="col-md-2 text-right"> <label for>Dignidad:</label>
          </div> -->
          <div class="col-md-4">
            <label for="">Dignidad</label>
            <br>
            <select type="text" id="dignidad_can" name="dignidad_can" value"<?php echo $canEdit->dignidad_can;?>">
              <option disabled selected hidden value="<?php echo $canEdit->dignidad_can;?>"><?php echo $canEdit->dignidad_can;?></option>
              <option value="Presidente">Presidente</option> slot
              <option value="Asambleista Nacional">Asambleista Nacional</option> slot
              <option value="Asambleista Provincial">Asambleista Provincial</option> slot
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Ideologia</label>
            <br>
            <select type="text" id="ideologia_can" name="ideologia_can" value"<?php echo $canEdit->ideologia_can;?>">
              <option disabled selected hidden value="<?php echo $canEdit->ideologia_can;?>"><?php echo $canEdit->ideologia_can;?></option>
              <option value="Izquierda">Izquierda</option> slot
              <option value="Derecha">Derecha</option> slot
            </select>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <label for="">Apellidos:</label>
            <br>
            <input type="text"
            placeholder="Ingrese los Apellidos"
            class="form-control"
            name="apellidos_can" value="<?php echo $canEdit->apellidos_can;?>"
            id="apellidos_can">
          </div>
          <div class="col-md-4">
            <label for="">Nombres:</label>
            <br>
            <input type="text"
            placeholder="Ingrese los Nombres"
            class="form-control"
            name="nombres_can" value="<?php echo $canEdit->nombres_can;?>"
            id="nombres_can">
          </div>
          <div class="col-md-4">
            <label for="">Edad:</label>
            <br>
            <input type="number"
            placeholder="Ingrese la Edad"
            class="form-control"
            name="edad_can" value="<?php echo $canEdit->edad_can;?>"
            id="edad_can">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <label for="">Movimiento:</label>
            <br>
            <input type="text"
            placeholder="Ingrese el Movimiento o Partido"
            class="form-control"
            name="movimiento_can" value="<?php echo $canEdit->movimiento_can;?>"
            id="movimiento_can">
          </div>
          <div class="col-md-4">
            <label for="">Latitud:</label>
            <br>
            <input type="text"
            placeholder="Seleccione en el mapa"
            class="form-control" readonly
            name="latitud_can" value="<?php echo $canEdit->latitud_can;?>"
            id="latitud_can">
          </div>
          <div class="col-md-4">
            <label for="">Longitud:</label>
            <br>
            <input type="text"
            placeholder="Seleccione en el mapa"
            class="form-control" readonly
            name="longitud_can" value="<?php echo $canEdit->longitud_can;?>"
            id="longitud_can">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12">
            <label for="">Marque ubicación en el Mapa</label>
            <div id=mapaUbicacion style="height:300px; width:100%; border:2px solid black;"></div>
          </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" name="button"
                class="btn btn-primary">
                  Guardar
                </button>
                &nbsp;
                <a href="<?php echo site_url(); ?>/candidaturas/lista"
                  class="btn btn-danger">
                  Cancelar
                </a>
            </div>
        </div>
        <br>
    </form>
  </div>

  <script type="text/javascript">
    function initMap(){
      //Definir y crear coordenada Central
      var centro=new google.maps.LatLng(-1.6542340658901498, -78.66097667274991);
      //Crear Objeto mapa
      var mapa1=new google.maps.Map(document.getElementById('mapaUbicacion'),
        {
          center:centro,
          zoom:6,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        }
      );
      var marcador=new google.maps.Marker({
        position:centro,
        map:mapa1,
        title:"Seleccione la Ubicacion",
        icon:"<?php echo base_url();?>/assets/img/mark/markRojo.png",
        draggable:true //Arrastrable
      });
      google.maps.event.addListener(marcador,'dragend', function(){
        // alert("Se termino el Drag");
        document.getElementById('latitud_can').value=this.getPosition().lat();
        document.getElementById('longitud_can').value=this.getPosition().lng();
      }); //Esta al pendiente del marcador
    }//Cierre de la funcion Init Map
  </script>

  <script type="text/javascript">
  $("#frm_nuevo_cliente").validate({
    rules:{
      cedula_cli:{
        required:true,
        minlength:10,
        maxlength:10,
        digits:true
      },
      apellidos_cli:{
        required:true,
        minlength:3,
        maxlength:150,
        letras:true
      },
      nombres_cli:{
        required:true,
        minlength:3,
        maxlength:150
      },
      direccion_cli:{
        required:true,
        minlength:3,
        maxlength:150
      },
      telefono_cli:{
        required:true,
         minlength:10,
         maxlength:10,
         digits:true,
      }
      ciudad_cli:{
        required:true,
        minlength:3,
        maxlength:150

      },
      pais_cli:{
        required:true,
        minlength:3,
        maxlength:150
      },
    },
    messages:{
      cedula_cli:{
        required:"Por favor Ingrese el numero de cedula",
        minlength:"Cedula incorrecta, ingrese 10 digitos",
        maxlength:"Cedula incorrecta, ingrese 10 digitos",
        number:"Este campo solo acepta numeros"
      },
      apellidos_cli:{
        required:"Por favor ingrese el apellido del cliente",
        minlength:"El apellido debe tener al menos 3 caracteres",
        maxlength:"Apellido incorrecto"

      },
      nombres_cli:{
        required:"Por favor ingresa el nombre del cliente",
        minlength:"El nombre debe tener al menos 3 caracteres",
        maxlength:"Nombre incorrecto"

      },
      direccion_cli:{
        required:"Por favor ingresa la Dirección",
        minlength:"La Dirección debe tener al menos 3 caracteres",
        maxlength:"Dirección incorrecta"
      },
      telefono_cli:{
        required:"Por favor Ingrese el número de telefono",
        minlength:"Nro. de teléfono incorrecta, ingrese 10 digitos",
        maxlength:"Nro. de teléfono incorrecta, ingrese 10 digitos",
        number:"Este campo solo acepta números"
      },
      ciudad_cli:{
        required:"Por favor Ingrese la Ciudad",
        minlength:"La ciudad debe tener al menos 3 caracteres",
        maxlength:"Ciudad incorrecta"

      },
      pais_cli:{
        required:"Por favor ingrese el país",
        minlength:"El país debe tener al menos 3 caracteres",
        maxlength:"Dirección incorrecta"
      },
      email_cli:{
        required:"Por favor ingrese el correo electrónico",
        minlength:"El nombre debe tener al menos 3 caracteres",
        maxlength:"Nombre incorrecto"

      },
    }
  });
</script>

    </div><!--End Row-->
