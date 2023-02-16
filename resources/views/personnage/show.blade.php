@extends("layouts.app")
@section("content")
    <h1 class="container text-center  shadow w-50 rounded my-5 p-2 bg-dark border border-light text-light">Personnage Details </h1>
    <table class="table table-bordered  text-light">
        <tr>
            <th>Nom : </th>
            <td>{{$personnages->nom}}</td>
        </tr>
        <tr>
            <th>Company : </th>
            <td>{{$personnages->company}}</td>
        </tr>
        <tr>
            <th>Detail : </th>
            <td>{{$personnages->detail}}</td>
        </tr>
        <tr>
            <th>fortune : </th>
            <td>{{$personnages->fortune}}</td>
        </tr>

    </table>
    @endsection
