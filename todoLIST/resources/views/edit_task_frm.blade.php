@extends('main_layout')

@section('content')
    <div class="row">
        <div class="col s6 offset-6 card #00bfa5 teal accent-4">
            <div class="card">  
                <div class="card-action">
                    <h4 class="teal-text"> Editar Tarefa </h4>
                    <form action="{{route('edit_task_submit')}}" method="post">
                        <div class="row">
                            <form class="col s12">
                              <div class="row">
                                @csrf
                                <input type="hidden" name="id_task" value="{{$task->id}}">
                                <input type="checkbox" />
                                <div class="input-field col s12">
                                  <textarea class="materialize-textarea" name="text_edit_task" id=text_edit_task value="{{$task->$task}}"></textarea>
                                  <label for="text_edit_task">Edite a tarefa:</label>
                                  <button class="btn waves-effect waves-light" type="submit">Editar
                                    <i class="material-icons right">border_color</i>
                                  </button>
                                  <a href="{{route('home')}}" class="waves-effect waves-light btn red">Cancelar <i class="material-icons right">close</i></a>
                                </div>
                              </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>         
@endsection