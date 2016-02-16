@extends('layouts.master')
@section('title', $title )

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading ui-draggable-handle">
        <div class="panel-title">
          <h3>Configuración</h3>
        </div>
        <ul class="panel-controls panel-controls-title">
          <li><a href="#" class="panel-fullscreen rounded"><span class="fa fa-expand"></span></a></li>
        </ul>
      </div>
      <div class="panel-body">
        <div class="panel panel-default tabs">
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="active"><a href="#tab-principal" role="tab" data-toggle="tab" aria-expanded="true">Principal</a></li>
            <li class=""><a href="#tab-horas" role="tab" data-toggle="tab" aria-expanded="false">Información sitio web</a></li>
            <li class=""><a href="#tab-mensajes" role="tab" data-toggle="tab" aria-expanded="false">E-mails</a></li>
          </ul>
          <div class="panel-body tab-content">
            <div class="tab-pane active" id="tab-principal">
              @if (! empty(Session::get('message')))
              <div class="row">
                <center>
                  <div class="alert alert-success">
                    {{Session::get('message')}}
                  </div>
                </center>
              </div>
              @endif
              <center>
                <span class="label label-info">Instructivo</span> La información ingresada sirve para ser mostrada en el sitio web de su organización.
              </center>
              <br>
              <form action="{{ URL::to('plataforma/editar-configuracion') }}" method="post" class="form-horizontal">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Nombre organización</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" value="{{ $configuracion->nombre }}" name="nombre" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Logo corporativo</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="file" value="" name="logo" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Email principal</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" value="{{ $configuracion->email }}" name="email" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Teléfono principal</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" value="" name="{{ $configuracion->telefono }}" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Teléfono secundario</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" value="" name="{{ $configuracion->telefono_secundario }}" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Información</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <textarea class="form-control" name="informacion">{{ $configuracion->informacion }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Última modificación</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <h6>{{ $configuracion->updated_at }}</h6>
                    </div>
                  </div>
                </div>
                <input type="submit" class="btn btn-success" value="Editar configuración" />
              </form>
            </div>
            <div class="tab-pane" id="tab-horas">
              @if (! empty(Session::get('message_web')))
              <div class="row">
                <center>
                  <div class="alert alert-success">
                    {{Session::get('message_web')}}
                  </div>
                </center>
              </div>
              @endif
              <center>
                <span class="label label-info">Instructivo</span> La información ingresada sirve para ser mostrada en el sitio web de su organización.
              </center>
              <br>
              <form action="{{ URL::to('plataforma/editar-configuracion-web') }}" method="post" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Descripción</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" value="{{ $configuracion->descripcion }}" name="descripcion" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Servicio</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" value="{{ $configuracion->texto_servicio }}" name="texto_servicio" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Nosotros</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" value="{{ $configuracion->texto_nosotros }}" name="texto_nosotros" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Nosotros (texto)</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group col-md-12">
                      <textarea name="texto_nosotros_informacion" class="form-control" rows="5">{{ $configuracion->texto_nosotros_informacion }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Infraestructura</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" value="{{ $configuracion->texto_infraestructura }}" name="texto_infraestructura" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Equipo</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" value="{{ $configuracion->texto_equipo }}" name="texto_equipo" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 col-xs-12 control-label">Contacto</label>
                  <div class="col-md-6 col-xs-12">
                    <div class="input-group">
                      <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                      <input type="text" value="{{ $configuracion->texto_contacto }}" name="texto_contacto" class="form-control">
                    </div>
                  </div>
                </div>
                <input type="submit" class="btn btn-success" value="Editar configuración para sitio web" />
              </form>
            </div>
            <div class="tab-pane" id="tab-mensajes">
              ....
            </div>

          </div>
        </div>
      </div>
      <div class="panel-footer">

      </div>
    </div>
  </form>
</div>
</div>

@stop
