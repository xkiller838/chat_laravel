@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de usuarios para chatear') }}</div>

                <div class="card-body">
                   <table>
                        <thead>
                            <tr>
                                <th scope="col">
                                      Nombre
                                </th>
                                
                                <th scope="col">
                                      Email
                                </th>
                                <th scope="col">
                                      Accion
                                </th>
                                <th scope="col">
                                      Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                            <tr>
                            @if (Auth::check())
                                
                            @else
                                
                            @endif
                                <td data-label="Nombre">
                                       {{$usuario->name}}
                                </td>

                                <td  data-label="Email">
                                      {{$usuario->email}}
                                </td>
                               
                                <td data-label="Accion">
                                    <a href="{{ route('chat.with', $usuario->id ) }}" target="_blank">
                                        <button type="button" class="btn btn-info btn-sm"><i class="fas fa-comment-alt"></i>&nbsp;Chat</button>
                                    </a>
                                </td>

                                <td  data-label="Online">
                                         @if ($usuario->isOnline())
                                             <li class="text-success">
                                                 Online
                                             </li>
                                         @else
                                             <li class="text-muted">
                                                Offline
                                            </li>
                                         @endif
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
@endsection

