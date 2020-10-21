@extends('parent')

@section('main')

    <div align="right" style="margin-top: 20px; margin-bottom: 20px;">
        <a href="{{ route('crud.create') }}" class="btn btn-success btn-sm">
            Pridat pouzivatela
        </a>
    </div>

    <table class="table table-bordered">
        <tr>
            <th style="width: 20%;">Meno</th>
            <th style="width: 20%;">Priezvisko</th>
            <th style="width: 20%;">Heslo</th>
            <th style="width: 10%;">Vek</th>
            <th style="width: 20%;">Akcia</th>
        </tr>

        @foreach($data as $riadok)
            <tr>
                <td>{{ $riadok->meno }}</td>
                <td>{{ $riadok->priezvisko }}</td>
                <td>{{ $riadok->heslo }}</td>
                <td>{{ $riadok->vek }}</td>
                <td class="text-center">
                    <a href="{{ route('crud.edit', $riadok -> id) }}" class="btn btn-primary" style="display: inline; padding-top: 2px; padding-bottom: 2px;">Upravit</a>

                    <form action="{{ route('crud.destroy', $riadok -> id) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary" style="padding-top: 0px; padding-bottom: 0px;">Vymazat</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection
