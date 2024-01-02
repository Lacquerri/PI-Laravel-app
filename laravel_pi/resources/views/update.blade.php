<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Studenci</title>
    </head>
    <body>
    <h1>Edytuj dane studenta</h1>
    <form method="post" action="{{route('student.dbupdate',['student' => $student])}}">
    @csrf
    @method('put')
        <div>
            <label> Imie </label>
            <input type="text" name="Imie" value="{{$student->Imie}}" />
        </div>
        <div>
            <label> Nazwisko </label>
            <input type="text" name="Nazwisko" value="{{$student->Nazwisko}}" />
        </div>
        <div>
            <label> Ocena </label>
            <input type="name" name="Ocena" value="{{$student->Ocena}}" />
        </div>
        <div>
        <input type="submit" value="Zapisz" />
        </div>
    </form>
    <a href="{{route('student.read')}}">Powrót</a>
    </body>
</html>
