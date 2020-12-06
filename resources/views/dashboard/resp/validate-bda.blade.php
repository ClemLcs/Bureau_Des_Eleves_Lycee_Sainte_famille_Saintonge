@extends('layouts.dashboard')
@section('validate-bda')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9-users">
                                <h2 class="title-1 m-b-25">Liste des utilisateurs</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                <th class="text-center">Classe</th>
                                                <th class="text-center">Rôle</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Date de création</th>
                                                <th class="text-center">Edition</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users_all as $list)
                                            <tr>
                                                <td class="text-center">{{$list->name}}</td>
                                                <td class="text-center">{{$list->prenom}}</td>
                                                <td class="text-center">{{$list->classe}}</td>
                                                <td class="text-center">{{$list->role}}</td>
                                                <td class="text-center">{{$list->email}}</td>
                                                <?php 
                                                    $datetimeFormat = 'D, M Y à H:i:s';
                                                    
                                                    $date = new DateTime(null, new \DateTimeZone('Europe/Paris'));
                                                    $date->setTimestamp(strtotime($list->created_at));
                                                      
                                                ?>
                                                <td class="text-center">{{ $date->format($datetimeFormat)}}</td>
                                                <td class="text-left">
                                                    <button class="btn btn-warning btn-sm"><em class="material-icons">mode_edit</em>Edition</button><br><br>
                                                    <button class="btn btn-danger btn-sm"><em class="material-icons">event_busy</em>Supprimer</button><br><br>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection 