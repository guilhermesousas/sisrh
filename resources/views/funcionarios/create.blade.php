@extends('layouts.default')
@section('title', 'SisRH - Cadastro de Funcionário')

@section('content')
    <h1 class="fs-2 mb-3">Cadastro do Funcionário</h1>

    <form class="row g-3" method="POST" action="{{route('funcionarios.store')}}" enctype="multipart/form-data">
        {{--criar hash de segurançap--}}
        @csrf
        @include('funcionarios.partials.form')

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <a href="{{ route('funcionarios.index')}}" class="btn btn-danger">Cancelar</a>

        </div>
      </form>
@endsection
