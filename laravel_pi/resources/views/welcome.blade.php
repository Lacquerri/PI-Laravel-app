<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Studenci</title>
    </head>
    <body>
    <h1>Dodaj studenta</h1>
    <form method="post" action="{{route('student.store')}}">
    @csrf
    @method('post')
        <div>
            <label> Imie </label>
            <input type="text" name="Imie" />
        </div>
        <div>
            <label> Nazwisko </label>
            <input type="text" name="Nazwisko" />
        </div>
        <div>
            <label> Ocena </label>
            <input type="name" name="Ocena" />
        </div>
        <div>
        <input type="submit" value="Zapisz" />
        </div>
    </form>
    <a href="{{route('student.read')}}">Zobacz wszystkich studentów</a>
    </body>
</html>
