<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda - Index</title>
</head>
<body>
    <fieldset>
        <legend>Agenda</legend>
        <a href="{{ route('agenda.create') }}">Novo Contato</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agenda as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['nome'] }}</td>
                        <td>{{ $item['telefone'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>
                            <a href="{{ route('agenda.show', $item['id']) }}">Ver</a>
                            <a href="{{ route('agenda.edit', $item['id']) }}">Editar</a>
                            <form action="/agenda/{{ $item['id'] }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </fieldset>
</body>
</html>