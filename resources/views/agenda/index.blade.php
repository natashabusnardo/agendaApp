@extends('agenda.nav')
@section('title', 'Agenda index')
@section('content')
<div class="col-md-10 offset-md-1 dashboard-agendas-container">
    <p>Confira nossos contatos</p>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

            @foreach($agenda as $agenda)
                <tr>
                    <th scope="row">{{ $agenda->id }}</th>
                    <td>{{ $agenda->nome }}</td>
                    <td>{{ $agenda->telefone }}</td>
                    <td>{{ $agenda->email }}</td>
                    <td class="text-end align-middle">
                        <a href="{{ route('agenda.show', $agenda->id) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                        <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn" onclick=" return confirm('Deseja remover esse contato?');"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                        </form>
                    <td>
                </tr>   
            @endforeach
        </tbody>
    </table>
</div>
@endsection