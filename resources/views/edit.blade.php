@extends('layout')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Modification des Données
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('etudiant.update', $etudiants->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom" value="{{ $etudiants->nom }}"/>
          </div>
          <div class="form-group">
              <label for="prenom">Prenom</label>
              <input type="prenom" class="form-control" name="prenom" value="{{ $etudiants->prenom }}"/>
          </div>
          <div class="form-group">
              <label for="dateNaissance">Date de Naissance</label>
              <input type="date" class="form-control" name="dateNaissance" value="{{ $etudiants->dateNaissance }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $etudiants->email }}"/>
          </div>
          <div class="form-group">
              <label for="profession">Profession</label>
              <input type="text" class="form-control" name="profession" value="{{ $etudiants->profession }}"/>
          </div>
          <div class="form-group">
              <label for="numero">Numero de Telephone</label>
              <input type="tel" class="form-control" name="numero" value="{{ $etudiants->numero }}"/>
          </div>
          
          <button type="submit" class="btn btn-block btn-danger">Enregistrer les Modifications</button>
      </form>
  </div>
</div>
@endsection