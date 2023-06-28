<br>
<main>
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>NUEVO CANDIDATO</h1>
    </div>
  </div>
  <br>
  <div class="container">
    <form class=""
    action="<?php echo site_url(); ?>/candidaturas/guardar"
    method="post">
        <div class="row">
          <div class="col-md-4">
            <label for="">Cédula:</label>
            <br>
            <input type="number"
            placeholder="Ingrese la cédula"
            class="form-control"
            name="cedula_can" value=""
            id="cedula_can">
          </div>
          <!-- <div class="col-md-2 text-right"> <label for>Dignidad:</label>
          </div> -->
          <div class="col-md-4">
            <label for="">Dignidad</label>
            <br>
            <select type="text" id="dignidad_can" name="dignidad_can" value"">
              <option disabled selected hidden>Seleccionar Dignidad</option>
              <option value="Presidente">Presidente</option> slot
              <option value="Asambleista Nacional">Asambleista Nacional</option> slot
              <option value="Asambleista Provincial">Asambleista Provincial</option> slot
            </select>
          </div>
          <div class="col-md-4">
            <label for="">Ideologia</label>
            <br>
            <select type="text" id="ideologia_can" name="ideologia_can" value"">
              <option disabled selected hidden>Seleccionar Ideologia</option>
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
            name="apellidos_can" value=""
            id="apellidos_can">
          </div>
          <div class="col-md-4">
            <label for="">Nombres:</label>
            <br>
            <input type="text"
            placeholder="Ingrese los Nombres"
            class="form-control"
            name="nombres_can" value=""
            id="nombres_can">
          </div>
          <div class="col-md-4">
            <label for="">Edad:</label>
            <br>
            <input type="number"
            placeholder="Ingrese la Edad"
            class="form-control"
            name="edad_can" value=""
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
            name="movimiento_can" value=""
            id="movimiento_can">
          </div>
          <div class="col-md-4">
            <label for="">Latitud:</label>
            <br>
            <input type="text"
            placeholder="Seleccione en el mapa"
            class="form-control" readonly
            name="latitud_can" value=""
            id="latitud_can">
          </div>
          <div class="col-md-4">
            <label for="">Longitud:</label>
            <br>
            <input type="text"
            placeholder="Seleccione en el mapa"
            class="form-control" readonly
            name="longitud_can" value=""
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
</main>
