@extends('layouts.parametrage.app')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/parametrage">Paramétrage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gestion Des Anomalies</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="row">
        <section class="col col-sm-12">
            <div class="card">
                <h3 class="card-header">Anomalies</h3>
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#anomalieModal">
                       Choisir Une Anomalie
                    </button>

                    <table class="table mt-3 ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Icon</th>
                            <th>Libelle</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>who seeks finds</td>
                            <td>who seeks finds</td>
                            <td>who seeks finds</td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-secondary">Modifier</button>
                                    <button type="button" class="btn btn-sm  btn-secondary">Supprimer</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>who seeks finds</td>
                            <td>who seeks finds</td>
                            <td>who seeks finds</td>
                            <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-secondary">Modifier</button>
                                    <button type="button" class="btn btn-sm  btn-secondary">Supprimer</button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>


<!--  fenetre Modal -->
<div class="modal fade" id="anomalieModal" tabindex="-1" role="dialog" aria-labelledby="utilisateurModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choisir Le Type d'Anomalie</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        
                    <div class="form-group">
                            <label for="description">Type d'Anomalie</label>
                            <input type="text" class="form-control" id="lien" aria-describedby="lienHelp" placeholder="Entrez le nom du type de l'anomalie">
                        </div>

                        <div class="form-group">
                            <label for="description">Description De L'application</label>
                            <textarea class="form-control" id="description" rows="3"></textarea>
                            <small id="libelleHelp" class="form-text text-muted">
                                Rendez vous à la page ou est survenu l'anomalie et copier le contenu de la barre
                                d'adresse de votre navigateur puis coller le ici.
                            </small>
                        </div>


                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choisir une icon</label>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>


    </div>

@endsection

