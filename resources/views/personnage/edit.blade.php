@extends("layouts.app")
@section("content")
        <h1>Modifier Personnage</h1>
    @if($errors ->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        </div>
    @endif
        <form action="{{url('personnage/'.$personnages->id)}}" method="post">
        @method("PATCH")
        @csrf
        <div class="form-group mb-3">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{$personnages->nom}}">
        </div>
        <div class="form-group mb-3">
            <label for="company">Company</label>
            <input type="text" name="company" id="nom" class="form-control" value="{{$personnages->company}}">
        </div><div class="form-group mb-3">
            <label for="fortune">Fortune</label>
            <input type="text" name="fortune" id="fortune" class="form-control" value="{{$personnages->fortune}}">
        </div><div class="form-group mb-3">
            <label for="detail">Details</label>
            <input type="text" name="detail" id="nom" class="form-control" value="{{$personnages->detail}}">
        </div>
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
        </form>
    @endsection
