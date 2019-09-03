@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tagok
                  <table class="table">
                  <thead>
                    <tr>
                      <th>{{ link_to_route('tagok.create', 'Új tag rögzítése', null, ['class' => 'btn btn-secondary'])}} </th>
                    </tr>

                  </thead>
                  </table>

                </div>

                <div class="card-body">


                  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tag neve</th>
        <th>Tag e-mail címe</th>
      </tr>
    </thead>

    <tbody>
     @if(count($tagoks)>0)
      @foreach($tagoks as $tagok)
      <tr>
        <td>{{$tagok->id}}</td>
        <td>{{$tagok->name}}</td>
        <td>{{$tagok->email}}</td>
        <td>
          {!! Form::open(array('route'=>['tagok.destroy',$tagok->id], 'method'=>'DELETE')) !!}
            {{ link_to_route('tagok.edit', 'Szerkesztés', [$tagok->id], ['class' => 'btn btn-primary'])}}
            |
            {!! Form::button('Törlés', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
          {!! Form::close() !!}
        </td>
        </tr>
        @endforeach
      @endif



      </tbody>
    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
