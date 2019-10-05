@extends('layouts.app', [
    'pageTitle' => 'Inversiones',
    'pageSlogan' => 'Duplicamos tus ahorros en el mercado financiero.',
    'alignmentJumbotron' => 'text-left'
    ])
@section('content')

    <table class="table">
        <thead>
            <tr>

                <th scope="col">Empresa</th>
                <th scope="col">Acciones</th>
                <th scope="col">Valor de Acción</th>
                <th scope="col">CompraVenta de Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Arcos Dorados</td>
                <td>100</td>
                <td>100</td>
                <td class="row">
                    <p class="btn btn-primary">Comprar</p>
                    <p class="btn btn-success ml-3">Vender</p>
                </td>
            </tr>
        </tbody>
    </table>

@endsection