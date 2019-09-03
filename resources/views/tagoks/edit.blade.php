@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tagadatok szerkesztése</div>

                <div class="card-body">
                  {!! Form::model($tagok, array('route' => ['tagok.update', $tagok->id], 'method'=>'PUT')) !!}

                  <table class= "table-responsive">
              <thead>
                <tr>
                  <th>{!!Form::label('name', 'Név:')!!}</th>
                  <th>{!!Form::label('email', 'E-mail cím:')!!}</th>

                </tr>
              </thead>
              <tbody>
              <tr>
              <td>
                <div class="form-group">
                  {!!Form::text('name', '', ['type'=>'hidden', 'class' => 'form-control', 'placeholder' => $tagok->name])!!}
                </div>
              </td>
              <td>
                <div class="form-group">

                  {!!Form::text('email', '', ['type'=>'hidden', 'class' => 'form-control', 'placeholder' => $tagok->email])!!}
                </div>
              </td>
              <td>
                <div>
                  {!!Form::button('Szerkesztés', ['type' => 'submit','class' => 'btn btn-success'])!!}
                </div>

              </td>
              </tr>
              </tbody>
              </table>


                  {!! Form::close() !!}



                </div>
            </div>
            @if(count($errors) >0)
              @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                  {{$error}}
                </div>
              @endforeach
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                  {{session('success')}}
                </div>
            @endif

        </div>
    </div>
</div>
@endsection
