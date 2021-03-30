
<div class="card">
    <div class="card-header">
        <label for="">Buscar:</label>
        <input wire:model="search" class="form-control " placeholder="Ingresa la fecha o el asunto del evento">   
    </div>
    @if ($eventos->count())
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>fecha</th>
                        <th>Asunto</th>
                        <th>Acta</th>
                        <th>prueba</th>
                        <th>Añadir acta</th>
                        
                    </tr>
                </thead>

                <tbody>
                    @foreach ($eventos as $evento)
                        <tr>
                            <td>{{$evento->id}}</td>
                            <td>{{$evento->Fecha}}</td>
                            <td>{{$evento->Asunto}}</td>
                            <td align="center">
                                <a class="btn btn-light btn-sm" target="_blank" href="{{Storage::url($evento->url)}}">
                                    <i class="far fa-eye"></i>
                                </a>
                            </td>
                            <td>{{$evento->evento_id}}</td>
                            <td >
                                <a type="button" class="btn btn-primary"  href="{{route('admin.actas.edit',$evento)}}" >Editar Acta</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$eventos->links()}}
        </div>
    @else
        <div class="card-body">
            <strong> No hay registros</strong>
        </div>
        
    @endif  
    
</div>

