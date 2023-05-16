@extends('layout')

@section('title', $cicle->shortname)

@section('stylesheets')
<link rel="stylesheet" href="{{ asset('css/cicleDetail.css') }}" />
@parent
@endsection

@section('content')
<div class="titulo">
    <h1>{{ $cicle->shortname }} - {{ $cicle->name }}</h1>
</div>
<div class="containerCicle">
    <div>
        <div class="btnTorna">
            <a href="{{ route('cicle_list') }}"><i class="bi bi-arrow-left-circle-fill"></i> {{ trans('translation.back') }}</a>
        </div>
        <div class="labels">
            <div class="infoCicle">
                <div class="list-header">
                    <div id="info">{{ trans('translation.info') }}</div>
                    <div class="filtro"><button class="filtrar" data-bs-toggle="modal" data-bs-target="#editInfo">{{ trans('translation.edit') }}</button></div>
                </div>
                <table id="info-table" class="table table-striped table-dark">
                    <tr>
                        <th scope="row">{{ trans('translation.acronimo') }}</th>
                        <td>{{ $cicle->shortname }}</td>
                    </tr>
                    <tr>
                        <th>{{ trans('translation.name') }}</th>
                        <td>{{ $cicle->name }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editInfo" tabindex="-1" aria-labelledby="editInfoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoLabel">{{ trans('translation.edit').' '.trans('translation.cicle') }}</h5>
                <button type="button" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <form method="POST" name="editCicleForm" action="{{ route('cicle_edit', $cicle->id) }}">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="col-md-2 col-12">
                            <label class="col-form-label" for="shortname">{{ trans('translation.acronimo') }}</label>
                        </div>
                        <div class="col-md-10 col-12">
                            <input class="form-control" type="text" name="shortname" value="{{ $cicle->shortname }}" />
                        </div>
                        <div class="error" id="shortname-edit-cicle-error"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-12">
                            <label class="col-form-label" for="name">{{ trans('translation.name') }}</label>
                        </div>
                        <div class="col-md-10 col-12">
                            <input class="form-control" type="text" name="name" value="{{ $cicle->name }}" />
                        </div>
                        <div class="error" id="name-edit-cicle-error"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ trans('translation.cancel') }}</button>
                    <button type="submit" class="btn btn-secondary">{{ trans('translation.confirm') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/validators.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cicle_edit_validator.js') }}"></script>
@endsection
