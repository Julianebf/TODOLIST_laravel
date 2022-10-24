@extends('main_layout')

@section('content')
    <div class="row">
        <div class="col s6 offset-6 card #00bfa5 teal accent-4">
            <div class="card">  
                <div class="card-action">
                    <h4 class="teal-text"> Nova Tarefa </h4>
                    <form action="{{route('new_task_submit')}}" method="post">
                        
                        {{-- <input type="text" name="" id="">
                        <input type="submit" name="" id="Enviar"> --}}
                        <div class="row">
                            <form class="col s12">
                              <div class="row">
                                @csrf
                                <div class="input-field col s12">
                                  <textarea id="textarea1"  class="materialize-textarea" name="text_new_task" id=text_new_task></textarea>
                                  <label for="text_new_task">Escreva a nova tarefa:</label>
                                  <button class="btn waves-effect waves-light" type="submit">Salvar
                                    <i class="material-icons right">playlist_add_check</i>
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