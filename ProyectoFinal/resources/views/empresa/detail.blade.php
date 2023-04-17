@extends('layout')

@section('title', 'Llistat d\'empresas')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/empresaDetail.css') }}" />
    @parent
@endsection

@section('content')
<div class="titulo">
    <h1>{{ $empresa->name }}</h1>
</div>
<!-- <a href="{{ route('empresa_new') }}">+ Nova empresa</a> -->
<div class="containerEmpresa">
    <div>
        <div class="labels">
            <div class="infoEmpresa">
                <div class="list-header">
                    <div id="info">Info empresa</div>
                    <div class="filtro"><button class="filtrar">Editar Informacio</button></div>
                </div>
                <table id="info-table" class="table table-striped table-dark">
                    <tr>
                        <th scope="row">CIF</th>
                        <td>{{ $empresa->cif }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nom empresa</th>
                        <td>{{ $empresa->name }}</td>
                    </tr>
                    <tr>
                        <th>Sector</th>
                        <td>{{ $empresa->sector }}</td>
                    </tr>
                    <tr>
                        <th>Comarca</th>
                        <td>{{ $poblacio->comarca->name }}</td>
                    </tr>
                    <tr>
                        <th>Poblacio</th>
                        <td>{{ $poblacio->name }}</td>
                    </tr>
                </table>
            </div>
            <div class="contactes">
                <div class="list-header">
                    <div id="contactes">Contactes</div>
                    <div class="filtro"><button class="filtrar">Crear Contacte</button></div>
                </div>
                <table id="contactes-table" class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col"><span>Nom</span></th>
                            <th scope="col"><span>Correu Electronic</span></th>
                            <th scope="col"><span>Telefon</span></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody id="contactes-info">
                    @foreach($contactes as $contacte)
                        <tr>
                            <th scope="row"><a href="{{ route('contacte_detail', $contacte->id) }}">{{ $contacte->name }}</a></th>
                            <td><a href="{{ route('contacte_detail', $contacte->id) }}">{{ $contacte->email }}</a></td>
                            <td><a href="{{ route('contacte_detail', $contacte->id) }}">{{ $contacte->phonenumber }}</a></td>
                        </tr> 
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <div class="estades">
            <div class="list-header">
                <div id="estades">Estades</div>
                <div class="filtro"><button class="filtrar">Crear Estada</button></div>
            </div>
            <table id="estades-table" class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col"><span>Alumne</span></th>
                        <th scope="col"><span>Curs</span></th>
                        <th scope="col"><span>Cicle</span></th>
                        <th scope="col"><span>Tutor</span></th>
                        <th scope="col"><span>Tipus estada</span></th>
                        <th scope="col"><span>Valoracio</span></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="estades-info">
                @foreach($estades as $estada)
                    <tr>
                        <th><a href="{{ route('estada_detail', $estada->id) }}">{{ $estada->student_name }}</a></th>
                        <td><a href="{{ route('estada_detail', $estada->id) }}">{{ $estada->curs->name }}</a></td>
                        <td><a href="{{ route('estada_detail', $estada->id) }}">{{ $estada->cicle->shortname }}</a></td>
                        <td><a href="{{ route('estada_detail', $estada->id) }}">{{ $estada->tutor() }}</a></td>
                        <td>
                            <a href="{{ route('estada_detail', $estada->id) }}">
                                @if ($estada->dual == true)
                                    Dual
                                @else
                                    FTC
                                @endif
                            </a>
                        </td>
                        <td><a href="{{ route('estada_detail', $estada->id) }}">{{ $estada->evaluation }}</a></td>
                    </tr>   
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<br>
@endsection