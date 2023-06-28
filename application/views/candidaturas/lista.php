<main>
  <div class="container">
    <br>
    <div class="row">
      <div class="col-md-6">
          <h1>LISTADO DE CANDIDATOS</h1>
      </div>
      <div class="col-md-6">
        <br>
        <a href="<?php echo site_url('candidaturas/nuevo');?>"class="btn btn-primary">
          <i class="glyphicon glyphicon-plus"></i>Agregar Candidato</a>
      </div>
    </div>
    <br>
    <?php if ($candidaturas): ?>
      <table class="table table-striped table-bordered table-hover">
        <thead class="bg-primary">
          <tr>
            <th>ID</th>
            <th>CEDULA</th>
            <th>DIGNIDAD</th>
            <th>APELLIDOS</th>
            <th>NOMBRES</th>
            <th>EDAD</th>
            <th>MOVIMIENTO</th>
            <th>IDEOLOGIA</th>
            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($candidaturas as $filaTemporal): ?>
            <tr>
              <td><?php echo $filaTemporal->id_can?></td>
              <td><?php echo $filaTemporal->cedula_can?></td>
              <td><?php echo $filaTemporal->dignidad_can?></td>
              <td><?php echo $filaTemporal->apellidos_can?></td>
              <td><?php echo $filaTemporal->nombres_can?></td>
              <td><?php echo $filaTemporal->edad_can?></td>
              <td><?php echo $filaTemporal->movimiento_can?></td>
              <td><?php echo $filaTemporal->ideologia_can?></td>
              <td class="text-center">
                <a href="<?php echo site_url(); ?>/Candidaturas/editar/<?php echo $filaTemporal->id_can;?>"
                  title="Editar Candidato"
                  onclick="return confirm('¿Desea editar los datos de este candidato?');">

                  <i class="glyphicon glyphicon-pencil" ></i>
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url("candidaturas/eliminar/$filaTemporal->id_can")?>"title="Eliminar Candidato" onclick="return confirm ('¿Esta seguro que desea eliminar el candidato?');" style="color:red">
                 <i class="glyphicon glyphicon-trash"></i>
               </a>
             </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <h1>No hay datos</h1>
    <?php endif; ?>
  </div>
</main>
