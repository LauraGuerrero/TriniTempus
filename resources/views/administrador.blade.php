<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>TriniTempus</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">

    <!-- calendario CSS -->
    <link rel="stylesheet" href="{{ asset('css/css_calendario.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!---css--->
    <link rel="stylesheet" href="{{ asset('css/stilos.css')}}">
    
    <!--icono pestaña-->
    <link rel="ICON" type="iMAGEN/PNG" href="{{ asset('img/pestaña.png')}}"/>

</head>

<body class="fondo">
    
 @if( Route::has( 'login' ) )
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        <a href="{{ url('/mi_cuenta') }}">Mi cuenta </a>
        @else
        <a href="{{ url('/') }}">Salir del area administracion</a> @if (Route::has('register'))
         @endif @endauth
    </div>
@endif
    
    <!----------------------------------contenido---------------------------------------------->
    <div class="content">
        <div class="title m-b-md">
            <a id="capa" ><img  src="{{ asset('img/logo.png')}}" style='max-width: 180px'/></a>
        </div>
        
        <div class="container-fluid tex-center py-auto ">
            <h2 class="titulo tex-center">Administrar sitio</h2>
            
            
        <div class="row">
            <div class="col-6  " id="capa_añadir">
                <h2 class="titulo tex-center">Añadir al sitio</h2>
                 
                <form action="{{ url('/Admin/anadirCiudad') }}" method="post" id="formulario_crear_ciudad">
                    <input type="hidden" name="_token" id="csrf-token" value="{{Session::token()}}">
                    <p>Añadir ciudad:&nbsp&nbsp
                        <input type="text" name="ciudad" placeholder="Introduce la ciudad..."></input>
                        <input type="submit" class="btn btn-info" value="Guardar" id="btnGuardar">
                    </p>
                 </form>
            
                <form action="{{ asset('/Admin/anadirCategoria') }}" method="post" id="formulario_crear_categoria">
                    @csrf
                    <p>Añadir categoria:&nbsp&nbsp
                        <input type="text" name="categoria" placeholder="Introduce la categoria..."></input>
                        <input type="submit" class="btn btn-info" value="Guardar" id="btnGuardar">
                    </p>
                 </form>
                
                <form action="{{ asset('/Admin/anadirSubCategoria') }}" method="post" id="formulario_crear_sub_categoria">
                    @csrf
                    <p>Añadir sub-categoria:&nbsp&nbsp
                        <input type="text" name="sub_categoria" placeholder="Introduce la sub-categoria..."></input>
                        <input type="submit" class="btn btn-info" value="Guardar" id="btnGuardar">
                    </p>
                 </form>
        <!--AQUI AÑADIR USUARIOS SE AÑADEN ELLOS  SERVICIOS LOS AÑADEN ELLOS Y EVENTOS LOS AÑADEN ELLOS-->
            </div>


            <div class="col-6 " id="capa_eliminar">
                <h2 class="titulo tex-center">Eliminar del sitio</h2>
                
                <form action="{{ asset('/Admin/eliminarCiudad') }}" method="post" id="formulario_eliminar_ciudad">
                    @csrf
                    <p>Eliminar ciudad:&nbsp&nbsp
                        <input type="text" name="ciudad" placeholder="Introduce la ciudad..."></input>
                        <input type="submit" class="btn btn-info" value="Eliminar" id="btnEliminar">
                    </p>
                 </form>
            
                <form action="{{ asset('/Admin/eliminarCategoria') }}" method="post" id="formulario_eliminar_categoria">
                    @csrf
                    <p>Eliminar categoria:&nbsp&nbsp
                        <input type="text" name="categoria" placeholder="Introduce la categoria..."></input>
                        <input type="submit" class="btn btn-info" value="Eliminar" id="btnEliminar">
                    </p>
                 </form>
                
                <form action="{{ asset('/Admin/eliminarSubCategoria') }}" method="post" id="formulario_eliminar_sub_categoria">
                    @csrf
                    <p>Eliminar sub-categoria:&nbsp&nbsp
                        <input type="text" name="sub_categoria" placeholder="Introduce la sub-categoria..."></input>
                        <input type="submit" class="btn btn-info" value="Eliminar" id="btnEliminar">
                    </p>
                 </form>

                           <!--AQUI AÑADIR ELIMINAR USUARIOS ELIMINAR SERVICIOS Y EVENTOS-->
<!--AQUI AÑADIR AÑADIR CAMPO PARA BUSCAR USUARIO POR ID Y 
                                APARECEN LOS DATOS EN TABLA PASAR A MODIFICAR DATOS Y ELIMINAR USUARIO-->
            </div>
        </div> 
<br><hr><br>
            <div class="row ">
                
                <div class="col-6 ">
                
                    <form action="{{ url('BuscarUsuarios') }}" method="post" id="formulario_buscar_usuarios">
                    @csrf
                    <p>Buscar usuarios:&nbsp&nbsp
                        
                        <input type="submit" class="btn btn-info" value="Buscar" id="btnEliminar">
                    </p>
                 </form>
                
                </div>

                <div class="col-6 ">

                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        @if ($usuarios->isEmpty())
                        <div>No hay usuarios</div>
                        @else
                        <table id="tabla_mis_servicios" class="table table-striped table-hover ">
                            <!--table table-hover table-dark-->
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>nombre</th>
                                    <th>Apellidos</th>
                                    <th>Ciudad</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($usuarios as $usuario)
                                <tr>
                                    <td>{!! $usuario->id !!}</td>
                                    <td>{!! $usuario->name !!}</td>
                                    <td>{!! $usuario->apellidos !!}</td>
                                    <td>{!! $usuario->ciudad !!}</td>
                                    <td>{!! $usuario->email !!}</td>
                                    <td> 
                                        
                                        
                                        <form action="{{ url('eliminarUsuario')}}/{{ $usuario->id }}"  method="post" id="usuario">
                                            @csrf
                                            {{method_field('DELETE')}}
                                          <input type="submit" class="btn btn-info" value="eliminar" id="btnGuardar" >
                                         </form>   
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                
                </div>

            </div>
        
    </div><!--container-->
</div><!--content-->
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/js_calendario.js')}}"></script>
</body>
</html>
