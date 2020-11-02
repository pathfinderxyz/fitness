 <div class="container-fluid">
 <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Agenda</h4>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card-body">
                                            <h4 class="card-title m-t-10">Tipo de Eventos</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="calendar-events" class="">
                                                        <div class="calendar-events" data-class="bg-info">
                                                            <i class="icon-arrow-right-circle text-info"></i>Reunion</div>
                                                        <div class="calendar-events" data-class="bg-success">
                                                            <i class="icon-arrow-right-circle text-success"></i>Entrenamiento</div>
                                                        <div class="calendar-events" data-class="bg-danger">
                                                            <i class="icon-arrow-right-circle text-danger"></i>Cumpleaños</div>
                                                        
                                                    </div>
                                                    <!-- checkbox -->
                                                    <div class="custom-control custom-checkbox m-l-10 m-t-10">
                                                        <input type="checkbox" class="custom-control-input" id="drop-remove">
                                                        <label class="custom-control-label" for="drop-remove">Eliminar</label>
                                                    </div>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn m-t-10 btn-info btn-block waves-effect waves-light">
                                                        <i class="ti-plus"></i> Añadir un nuevo tipo
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="card-body b-l calender-sidebar">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN MODAL -->
                <div class="modal none-border" id="my-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    <strong>Añadir evento</strong>
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Crear evento</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-new-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">
                                    <strong>Añadir</strong> a tipo de eventos</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form role="form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Categoria de evento</label>
                                            <input class="form-control form-white" placeholder="nombre" type="text" name="category-name" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Color para la categoria</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Verde</option>
                                                <option value="danger">Rojo</option>
                                                <option value="info">Azul</option>
                                                <option value="primary">Blanco</option>
                                                <option value="warning">Amarillo</option>
                                                <option value="inverse">Negro</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">guardar</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                 </div>