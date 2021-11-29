

@extends('plantilla')

@section('content')
    


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Crear Pacientes</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
       <div class="row">
         <div class="col-12">
           
           <div class="card">
             
             <div class="card-body">

              <form action="" method="post" >
               
                @csrf

                <div class="row">
                  <div class="col-6">
                    
                    <label >Tipo Documento</label>
                    <select name="tipo_documento_id" id="tipo_documento_id" class="form-control">
                       <option value="1">Cedula de Ciudadania</option>
                        <option value="2">Tarjeta de identidad</option>
                    </select>
                    <label >Numero documento</label>
                    <input type="number"  class="form-control" name="numero_documento">
                     <label >Primer nombre</label>
                    <input type="text"  class="form-control" name="nombre1">
                    <label >Segundo Nombre</label>
                    <input type="text" class="form-control" placeholder="juanito" name="nombre2">

                    <label >Primer apellido</label>
                    <input type="text" class="form-control" placeholder="Gomez" name="apellido1">
                    <label >Segundo Apellido</label>
                    <input type="text" class="form-control" placeholder="perez"  name="apellido2" required>
                  </div>
                  <div class="col-6">

                    <label >Genero</label>
                    <select name="genero_id" id="genero_id" class="form-control">
                       <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>

                     @livewire('registrar')
                   
                  </div> 
                    
                  </div>
                  </div>
                 
                
                  
                  <br>

                  <button class="btn  btn-outline-success btn-sm">Agregar Paciente</button>
                
              </form>
               
               
             </div>

<hr>


           </div>
         </div>
       </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  
  @endsection