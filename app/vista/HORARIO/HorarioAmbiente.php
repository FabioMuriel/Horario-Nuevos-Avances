<main id="main" class="main">
  <br>


  <section class="section">

    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title" style="font-size:30px;">HORARIO &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" type="submit" style="height: 50px;" data-bs-toggle="modal" data-bs-target="#ModalRegistroHorario">AGREGAR</button></h1>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <br>
            <div class="table-responsive">
              <table class="table" id="tablaHorario" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">AMBIENTE</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>

          </div>
        </div>

      </div>
    </div>

    <form action="" method="POST" id="RegistrarHorario">
      <div class="modal fade" id="ModalRegistroHorario" tabindex="-1">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"><b>AGREGAR HORARIO</b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <input type="hidden" name="sede_horario" id="sede_horario" value="<?php echo $id_sede; ?>">

                <div class="row">
                  <div class="col-12">
                    <b>AMBIENTE</b>
                    <select class="form-select" data-width="100%" data-size="3" name="salon_horario" id="salon_horario">
                    </select>
                  </div>
                </div>
                <div class="row">
                  <label for="dias"><b>DIAS</b></label>
                  <div id="days-list" class="col-sm-12">
                    <a data-day="1" class="btn btn-secondary">Lunes</a>
                    <a data-day="2" class="btn btn-secondary">Martes</a>
                    <a data-day="3" class="btn btn-secondary">Miercoles</a>
                    <a data-day="4" class="btn btn-secondary">Jueves</a>
                    <a data-day="5" class="btn btn-secondary">Viernes</a>
                    <a data-day="6" class="btn btn-secondary">Sabado</a>
                  </div>
                  <input id="days-chose" class="form-control" type="text" name="dias">
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>HORA INICIAL</b>
                    <input class="form-control" type="time" id="horaI" name="horaI" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>HORA FINAL</b>
                    <input class="form-control" type="time" id="horaF" name="horaF" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
              <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
          </div>
        </div>
      </div>
    </form>


    <div class="modal fade" id="ModalTablaHorario" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><b>HORARIO - <label id="txtsalon"></label></b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="table-responsive" id="CargarHorario">

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
          </div>
        </div>
      </div>
    </div>

    <form action="" method="POST" id="RegistrarEnHorario">
      <div class="modal fade" id="ModalLLenarHorario" tabindex="-1">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="jesus-header">
              <h5 class="modal-title"><b style="color:white;">AGREGAR &nbsp;<label id="DiaYHora"></label></b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <b>PROGRAMA</b>
                    <select class="selectpicker" data-show-subtext="true" data-live-search="true" data-width="100%" data-size="3" name="programa_horario" id="programa_horario" title="---SELECCIONE---">
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>FICHA</b>
                    <select class="selectpicker" data-show-subtext="true" data-live-search="true" data-width="100%" data-size="3" name="ficha_horario" id="ficha_horario">
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>COMPETENCIA</b>
                    <input type="hidden" id="id_compe" name="id_compe">
                    <select class="selectpicker" data-show-subtext="true" data-live-search="true" data-width="100%" data-size="3" name="competencia_horario" id="competencia_horario" title=""></select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>RESULTADOS</b><br>
                    <select name="resultado_horario" id="resultado_horario" data-width="100%" required multiple multiple title="--SELECCIONE--" class="form-control selectpicker">
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>INSTRUCTOR</b>
                    <select class="selectpicker" data-show-subtext="true" data-live-search="true" data-width="100%" data-size="3" name="instructor_horario" id="instructor_horario">
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>COLOR</b>
                    <select class="selectpicker" data-width="100%" data-size="3" name="color_horario" id="color_horario">
                      <option value="null">--SELECCIONE--</option>
                      <option value="azul">AZUL</option>
                      <option value="amarillo">AMARILLO</option>
                      <option value="cyan">CYAN</option>
                      <option value="gris">GRIS</option>
                      <option value="morado">MORADO</option>
                      <option value="naranja">NARANJA</option>
                      <option value="rojo">ROJO</option>
                      <option value="rosado">ROSADO</option>
                      <option value="verde">VERDE</option>
                      <option value="vinotinto">VINOTINTO</option>
                      <!-- Nuevos colores -->
                      <option value="jade">JADE</option>
                      <option value="ambar">AMBAR</option>
                      <option value="azul rey">AZUL REY</option>
                      <option value="pardo">PARDO</option>
                      <option value="carmin">CARMIN</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>HORAS</b>
                    <input type="number" id="horas_horario" name="horas_horario" class="form-control">
                    <input type="hidden" id="idtd" name="idtd">
                    <input type="hidden" id="id_horario" name="id_horario">
                    <input type="hidden" id="id_salon" name="id_salon">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
              <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <!-- Inicio del modal de datos para editar-->

    <form action="" method="POST" id="RegistrarEnHorario2">
      <div class="modal fade" id="ModalLLenarHorario2" tabindex="-1">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="jesus-header">
              <h5 class="modal-title"><b style="color:white;">EDITAR &nbsp;<label id="DiaYHora"></label></b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <b>PROGRAMA</b>
                    <select class="selectpicker" data-show-subtext="true" data-live-search="true" data-width="100%" data-size="3" name="programa_horarioE" id="programa_horarioE" title="---SELECCIONE---">
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>FICHA</b>
                    <select class="selectpicker" data-show-subtext="true" data-live-search="true" data-width="100%" data-size="3" name="ficha_horarioE" id="ficha_horarioE">
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>COMPETENCIA</b>
                    <input type="hidden" id="id_compe" name="id_compe">
                    <select class="selectpicker" data-show-subtext="true" data-live-search="true" data-width="100%" data-size="3" name="competencia_horarioE" id="competencia_horarioE" title=""></select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>RESULTADOS</b><br>
                    <select name="resultado_horarioE" id="resultado_horarioE" data-width="100%" multiple multiple title="--SELECCIONE--" class="form-control selectpicker">
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>INSTRUCTOR</b>
                    <select class="selectpicker" data-show-subtext="true" data-live-search="true" data-width="100%" data-size="3" name="instructor_horarioE" id="instructor_horarioE">
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>COLOR</b>
                    <select class="selectpicker" data-width="100%" data-size="3" name="color_horarioE" id="color_horarioE">
                    <option value="null">--SELECCIONE--</option>
                      <option value="azul">AZUL</option>
                      <option value="amarillo">AMARILLO</option>
                      <option value="cyan">CYAN</option>
                      <option value="gris">GRIS</option>
                      <option value="morado">MORADO</option>
                      <option value="naranja">NARANJA</option>
                      <option value="rojo">ROJO</option>
                      <option value="rosado">ROSADO</option>
                      <option value="verde">VERDE</option>
                      <option value="vinotinto">VINOTINTO</option>
                      <!-- Nuevos colores -->
                      <option value="jade">JADE</option>
                      <option value="ambar">AMBAR</option>
                      <option value="azul rey">AZUL REY</option>
                      <option value="pardo">PARDO</option>
                      <option value="carmin">CARMIN</option>

                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <b>HORAS</b>
                    <input type="number" id="horas_horarioE" name="horas_horarioE" class="form-control">
                    <input type="hidden" id="idtd" name="idtd">
                    <input type="hidden" id="id_horario" name="id_horario">
                    <input type="hidden" id="id_salon" name="id_salon">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
              <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Fin del modal -->

    <!-- Modal para modificar el horario guardado -->
    <form action="" method="POST" id="EditarEnHorario">
      <div class="modal fade" id="ModalEditarHorario" tabindex="-1">
      <div class="modal-dialog ">
          <div class="modal-content">
            <div class="jesus-header">
              <h5 class="modal-title"><b style="color:white;">AGREGAR &nbsp;<label id="DiaYHora"></label></b></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <b>PROGRAMA</b>
                    <input type="text" id="contenido">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
              <button type="submit" class="btn btn-primary">GUARDAR</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- Fin del modal -->
  </section>

</main>