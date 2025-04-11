
<div class="container">
    <h1>Planteles</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre del Plantel</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 19; $i++)
            <tr>
                <td>{{ $i }}</td>
                <td>Plantel {{ $i }}</td>
                <td>
                    <a href="{{ url('/planteles/' . $i) }}" class="btn btn-primary">Ver Plantel</a>
                </td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
