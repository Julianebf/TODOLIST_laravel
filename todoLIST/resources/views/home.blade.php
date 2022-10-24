@extends('main_layout')

@section('content')
    <div class="row">
        <div class="col s6 offset-6 card #00bfa5 teal accent-4">
            <div class="card">  
                <div class="card-action">
                    <h3 class="teal-text"> Lista de tarefas </h3>

                    <a href = "{{route('new_task')}}" class="waves-effect waves-light btn">Nova Tarefa</a>
                    <a href = "{{route('list_invisible')}}" class="waves-effect waves-light btn">Lista de tarefas invisiveis</a>
                    <hr>
                   
                    @if ($tasks->count() === 0)
                        <p> Não existem tarefas a realizar.</p>
                    @else
                    <div class="row">
                        <div class="col s12 m6 push-m3 slighten-2">
                            <table class="striped">
                                <thead>
                                    <tr>
                                        <th>Tarefas</th>
                                    </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{$task->task}}</td>
                                        <td>
                                        @if ($task->done == null)
                                            <a href="{{route('task_done', ['id' => $task->id])}}" class="btn-floating purple"><i class="material-icons">check</i>
                                        @else
                                            <a href="{{route('task_undone', ['id' => $task->id])}}" class="btn-floating green"><i class="material-icons">done_all</i>
                                        @endif
                                        </td>
                                        <td><a href="{{route('edit_task', ['id' => $task->id])}}" class="btn-floating blue lighten-1"><i class="material-icons">edit</i></td></td>
                                        <td>
                                        @if ($task->visible == 1)
                                            <a href="{{route('task_invisible', ['id' => $task->id])}}" class="btn-floating grey"><i class="material-icons">visibility</i>
                                        @else
                                            <a href="{{route('task_visible', ['id' => $task->id])}}" class="btn-floating black"><i class="material-icons">visibility_off</i>
                                        @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                            <p>Total: {{$tasks->count()}}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>         
@endsection