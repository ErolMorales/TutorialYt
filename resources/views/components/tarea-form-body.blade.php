@csrf
<div class="row">
    <div class="col-sm-12">
        <label for="InputNombre" class='form-label'>Nombre de la tarea</label>
        <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="..." value="{{ old('nombre', $tarea->nombre) }}">
    </div>
    <div class="col-sm-4">
        <div class="form-check">
            <label for="InputFinalizado" class="form-check-label">Finalizada</label>
            <input type="checkbox" name="finalizado" id="InputFinalizado" class="form-check-input" @checked( old('finalizado', $tarea->finalizado) )>
        </div>
    </div>
    <div class="col-sm-4">
        <label for="SelectUrgencia" class="form-label">Urgencia</label>
        <select name="urgencia" id="SelectUrgencia" class="form-select">
            @for($x=0; $x <count($urgencias); $x++)
                <option value="{{ $x }}" @selected( old('urgencia', $tarea->urgencia) )>{{ $urgencias[$x] }}</option>
                @endfor
        </select>
    </div>

    <div class="col-sm-4">
        <label for="InputFechaLimite" class="form-label">Fecha limite</label>
        <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('fecha_limite', 
            is_null($tarea->fecha_limite) ? '' : $tarea->fecha_limite->format('Y-m-d\TH:i') ) }}">
    </div>

    <div class="col-sm-12">
        <label for="TextAreaDescripcion" class="form-label">Descripcion</label>
        <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control">{{ old('descripcion', $tarea->descripcion) }}</textarea>
    </div>
    <div class="col-sm-12 text-end my-2">
        <button class="btn btn-primary" type="submit">
            Guardar
        </button>
    </div>
</div>
