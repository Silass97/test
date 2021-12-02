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
        Formulaire d'inscription
    </div>

    <div class="card-body">
        @if ($errors->any())
            <div class="alet alert-danger">
                <ul>
                    @foreach ($errors->all() as $error )
                        
                    <li>{{ $error }}</li>
                        
                    @endforeach
                </ul>

            </div><br/>
        @endif
        <form method="post" action="{{ route('etudiant.store') }}">
            <div class="form-group">
                @csrf
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom"/>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="prenom" class="form-control" name="prenom"/>
            </div>
            <div class="form-group">
                <label for="dateNaissance">Date de Naissance</label>
                <input type="date" class="form-control" name="dateNaissance"/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email"/>
            </div>
            <div class="form-group">
                <label for="profession">Profession</label>
                <input type="text" class="form-control" name="profession"/>
            </div>
            <div class="form-group">
                <label for="numero">Numero de Téléphone</label>
                <input type="tel" class="form-control" name="numero"/>
            </div>
            
            <button type="submit" class="btn btn-block btn-danger">Créer un Utilisateur</button>
        </form>
    </div>
</div>
@endsection