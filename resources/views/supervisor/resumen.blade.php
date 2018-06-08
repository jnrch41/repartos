  @extends('supervisor.template.main')

  @section('content')

  <div class="titulo_seccion">
    <h2 class="display-5">Resumen</h2>
    <p class="">Aquí podrá elegir que nivel desea mirar</p>
  </div>
  <div class="select_resumen">
      <select class="form-control">
        <option selected>Mis repartos</option>
      </select>
      <select class="form-control">
        <option selected>Todos</option>
        <option>R2</option>
        <option>R10</option>
        <option>R7</option>
        <option>R28</option>
        <option>R3</option>
        <option>R50</option>
      </select>
  </div>


          <div class="col-sm-12 tabla">
            <table class="table table-striped tabla_responsive">
              <thead class="cabecera_tabla">
                <tr>
                  <th>#</th>
                  <th>Indicadores</th>
                  <th>Ayer</th>
                  <th>Ult sem</th>
                  <th>Ult mes</th>
                  <th>Progreso</th>
                  <th>Tendencia</th>
                  <th>Estado</th>
                  <th>Detalles</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Nuevos clientes</td>
                  <td>15</td>
                  <td>820</td>
                  <td>82</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i data-toggle="modal" data-target="#modal_comp_semanas" class="fa fa-long-arrow-alt-down ult_semana_negativo"></i></td>
                  <td> <button disabled class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
                  <td>
                    <!-- Actualmente no tiene detalles  -->
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Env improductivos</td>
                  <td>30</td>
                  <td>120</td>
                  <td>96</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i data-toggle="modal" data-target="#modal_comp_semanas" class="fa fa-long-arrow-alt-up ult_semana_positivo"></i></td>
                  <td> <button disabled class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="fa fa-eye"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Movimientos env</td>
                  <td>15</td>
                  <td>20</td>
                  <td>10</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i data-toggle="modal" data-target="#modal_comp_semanas" class="fa fa-long-arrow-alt-right ult_semana_neutral"></i></td>
                  <td> <button disabled class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="fa fa-eye"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Clientes inactivos</td>
                  <td>45</td>
                  <td>15</td>
                  <td>48</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i data-toggle="modal" data-target="#modal_comp_semanas" class="fa fa-long-arrow-alt-up ult_semana_positivo"></i></td>
                  <td> <button disabled class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
                  <td>
                    <!-- Actualmente no tiene detalles  -->
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Sifones</td>
                  <td>5</td>
                  <td>52</td>
                  <td>35</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i data-toggle="modal" data-target="#modal_comp_semanas" class="fa fa-long-arrow-alt-up ult_semana_positivo"></i></td>
                  <td> <button disabled class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
                  <td>
                    <!-- Actualmente no tiene detalles  -->
                  </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Botellones</td>
                  <td>5</td>
                  <td>52</td>
                  <td>35</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i data-toggle="modal" data-target="#modal_comp_semanas" class="fa fa-long-arrow-alt-up ult_semana_positivo"></i></td>
                  <td> <button disabled class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="fa fa-eye"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>Saborizada</td>
                  <td>5</td>
                  <td>52</td>
                  <td>35</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i data-toggle="modal" data-target="#modal_comp_semanas" class="fa fa-long-arrow-alt-up ult_semana_positivo"></i></td>
                  <td> <button disabled class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
                  <td>
                    <!-- Actualmente no tiene detalles  -->
                  </td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>Desvío de horario</td>
                  <td>135</td>
                  <td>26</td>
                  <td>29</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i data-toggle="modal" data-target="#modal_comp_semanas" class="fa fa-long-arrow-alt-right ult_semana_neutral"></i></td>
                  <td> <button disabled class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_desvio" class="fa fa-eye"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>Fiado</td>
                  <td>127</td>
                  <td>10</td>
                  <td>85</td>
                  <td><span class="line" width="100">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i data-toggle="modal" data-target="#modal_comp_semanas" class="fa fa-long-arrow-alt-down ult_semana_negativo"></i></td>
                  <td> <button disabled class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
                  <td>
                    <!-- Actualmente no tiene detalles  -->
                  </td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>Reclamos</td>
                  <td>5</td>
                  <td>52</td>
                  <td>35</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i data-toggle="modal" data-target="#modal_comp_semanas" class="fa fa-long-arrow-alt-up ult_semana_positivo"></i></td>
                  <td> <button disabled class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_reclamos" class="fa fa-eye"></i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>




          <!-- Modal de reclamos -->
           <div class="modal fade" id="modal_reclamos">
             <div class="modal-dialog modal-lg">
               <div class="modal-content">

                 <!-- Modal cabecera -->
                 <div class="modal-header">
                   <h4 class="modal-title">Última semana</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>

                 <!-- Modal cuerpo -->
                 <div class="modal-body">
                   <div class="container">
                     <div class="panel-group">
                       <div class="row">
                          <div class="col-md-12">
                            <div class="panel panel-danger">
                                  <div class="panel-heading cabecera_reclamos_desvio">
                                    <h5>10/05/2018</h5>
                                  </div>
                                  <div class="panel-body">
                                    <hr>
                                    <p>
                                      <h6>R1:</h6> <b>Motivo:</b> Explicación  -  <b>Detalle:</b> Explicación    -  <b>Estado:</b> Explicación </p>
                                    <hr>
                                      <h6>R1:</h6> <b>Motivo:</b> Explicación  -  <b>Detalle:</b> Explicación    -  <b>Estado:</b> Explicación </p>
                                    <hr>
                                      <h6>R4:</h6> <b>Motivo:</b> Explicación  -  <b>Detalle:</b> Explicación    -  <b>Estado:</b> Explicación </p>
                                    <hr>
                                  </div>
                            </div>
                            <div class="panel panel-info">
                                  <div class="panel-heading cabecera_reclamos_desvio">
                                    <h5>12/05/2018</h5>
                                  </div>
                                  <div class="panel-body">
                                    <hr>
                                    <h6>R4:</h6> <b>Motivo:</b> Explicación  -  <b>Detalle:</b> Explicación    -  <b>Estado:</b> Explicación </p>
                                    <hr>
                                  </div>
                            </div>
                          </div>
                       </div>
                     </div>
                   </div>
                 </div>

                 <!-- Modal footer -->
                 <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 </div>

               </div>
             </div>
           </div>




          <!-- Modal de desvios -->
           <div class="modal fade" id="modal_desvio">
             <div class="modal-dialog modal-lg">
               <div class="modal-content">

                 <!-- Modal cabecera -->
                 <div class="modal-header">
                   <h4 class="modal-title">Última semana</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>

                 <!-- Modal cuerpo -->
                 <div class="modal-body">
                   <div class="container">
                     <div class="panel-group">
                       <div class="row">
                          <div class="col-md-12">
                            <div class="panel panel-danger">
                                  <div class="panel-heading cabecera_reclamos_desvio">
                                    <h5>10/05/2018</h5>
                                  </div>
                                  <div class="panel-body">
                                    <hr>
                                    <p> <b>R1:</b> 1er horario <b>20 min demorado</b></p>
                                    <hr>
                                    <p> <b>R10:</b> Ult horario <b>15 minutos demorado</b></p>
                                    <hr>
                                    <p> <b>R11:</b> Intervalo <b>1hs</b>- Entre las 11:00 y las 12:00hs</p>
                                    <hr>
                                  </div>
                            </div>
                            <div class="panel panel-info">
                                  <div class="panel-heading cabecera_reclamos_desvio">
                                    <h5>12/05/2018</h5>
                                  </div>
                                  <div class="panel-body">
                                    <hr>
                                    <p> <b>R3:</b> Intervalo de <b>2hs</b>- Entre las 15:00 y las 17:00hs</p>
                                    <hr>
                                  </div>
                            </div>
                          </div>
                       </div>
                     </div>
                   </div>
                 </div>

                 <!-- Modal footer -->
                 <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 </div>

               </div>
             </div>
           </div>








           <!-- Modal de rendimiento -->
            <div class="modal fade" id="modal_detalle_resumen">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <!-- Modal cabecera -->
                  <div class="modal-header">
                    <h4 class="modal-title">Detalle de botellones</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal cuerpo -->
                  <div class="modal-body">
                    <table class="table table-striped">
                      <thead class="cabecera_tabla">
                        <tr>
                          <th>#</th>
                          <th>Items</th>
                          <th>Ayer</th>
                          <th>Ult semana</th>
                          <th>Ult mes</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>12 litros</td>
                          <td>6</td>
                          <td>12</td>
                          <td>50</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>15 litros</td>
                          <td>8</td>
                          <td>19</td>
                          <td>70</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>30 litros</td>
                          <td>3</td>
                          <td>15</td>
                          <td>30</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>

                </div>
              </div>
            </div>





            <!-- Modal de rendimiento -->
             <div class="modal fade" id="modal_comp_semanas">
               <div class="modal-dialog modal-lg">
                 <div class="modal-content">

                   <!-- Modal cabecera -->
                   <div class="modal-header">
                     <h4 class="modal-title">Tendencia</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                   </div>

                   <!-- Modal cuerpo -->
                   <div class="modal-body">
                     <table class="table table-striped">
                       <thead class="cabecera_tabla">
                         <tr>
                           <th>#</th>
                           <th>Items</th>
                           <th>Semana anterior</th>
                           <th>Ult Semana</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <th scope="row">1</th>
                           <td>Nuevos clientes</td>
                           <td>980</td>
                           <td>820</td>
                         </tr>
                       </tbody>
                     </table>
                   </div>

                   <!-- Modal footer -->
                   <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                   </div>

                 </div>
               </div>
             </div>




          <div class="grafico_chart">
            <canvas id="chart_resumen" width="100%" height="400"></canvas>
            <script src="../../js/chart_resumen.js"> </script>
          </div>


@endsection
