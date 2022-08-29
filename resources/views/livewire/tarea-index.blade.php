<div>
<div>
    <div class="row">
        <div class="col-sm-9">
            <input type="text" name="" id="text", placeholder="Buscar..." class="form-control" wire:model="busqueda">
        </div>
        <div class="col-sm-3">
            <select name="" id="" class="form-select" wire:model="paginacion">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>
    <table class='table table-stripped table-hover'>
        <thead>
            <tr>
                <th>
                    nombre
                </th>
                <th>
                    finalizada 
                </th>
                <th>
                    fecha limite 
                </th>
                <th>
                    urgencia 
                </th>
                <th>
                    descripcion 
                </th>
                <th>
                    opciones 
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
            <tr>
                <td>
                    {{ $tarea->nombre}} 
                </td>
                <td>
                    {{$tarea->finalizada()}}
                </td>
                <td>
                    {{$tarea->fecha_limite->format('h:i - d/m/y')}}
                </td>
                <td>
                    {{$tarea->urgencia()}}
                </td>
                <td>
                    {{$tarea->descripcion}}
                </td>
                <td>
                    <a href="{{ route('tarea.edit', $tarea) }}">editar</a>
                    <a href="{{ route('tarea.show', $tarea) }}">ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tareas->links() }}
</div>

</div>
