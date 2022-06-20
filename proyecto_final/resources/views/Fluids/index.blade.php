<x-app-layouts title="ENTRADA DE LÍQUIDOS">
    <div class="container py-3">
        <form method="POST" action="{{ route('fluids.store') }}">
            @csrf
            <div class="mb-3">
                <label for="hora" class="form-label">Hora</label>
                <input name="input" type="number" class="form-control" id="hora">
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Hora</th>
                    @foreach($fluids as $fluid)
                        <th scope="col">{{ $fluid->hour }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Entrada</th>
                    @foreach($fluids as $fluid)
                        <td>{{ $fluid->input }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layouts>