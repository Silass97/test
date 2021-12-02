@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 50px;
  }
  .push {
    margin-top: 50px;
    color: blue;
    
  }
</style>

<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <h2 class="push">Liste des personnes inscrites</h2>
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Nom</td>
          <td>Email</td>
          <td>Numero de Telephone</td>
          <td>Profession</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($etudiants as $etudiant)
        <tr>
            <td>{{$etudiant->id}}</td>
            <td>{{$etudiant->nom}}</td>
            <td>{{$etudiant->email}}</td>
            <td>{{$etudiant->numero}}</td>
            <td>{{$etudiant->profession}}</td>
            <td class="text-center">
                <a href="{{ route('etudiant.edit', $etudiant->id)}}" class="btn btn-primary btn-sm"">Modifier</a>
                <form action="{{ route('etudiant.destroy', $etudiant->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Supprimer</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection