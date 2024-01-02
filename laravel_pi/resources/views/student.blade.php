<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Studenci</title>
    </head>
    <body>
    <h1>Studenci</h1>
    <table border = "1">
    <tr>
    <th>ID</th>
    <th>Imie</th>
    <th>Nazwisko</th>
    <th>Ocena</th>
    <th>Edytuj</th>
    <th>Usuń</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->Imie}}</td>
        <td>{{$student->Nazwisko}}</td>
        <td>{{$student->Ocena}}</td>
        <td><a href="{{route('student.update',['student' => $student])}}">Edytuj</a></td>
        <td><form method="post" action="{{route('student.delete',['student' => $student])}}">
        @csrf
        @method('delete')
        <input type="submit" value="Usuń" />
        </form>
        </td>
    </tr>
    @endforeach
    
    </table>
    </body>
</html>
