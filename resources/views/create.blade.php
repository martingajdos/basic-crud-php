@extends('parent')

@section('main')

    <div class="text-center">
        <a href="{{ route('crud.index') }}" class="btn btn-primary" style="margin-top: 20px; padding-top: 2px; padding-bottom: 2px;">Naspat</a>
    </div>

    <form method="post" action="{{ route('crud.store') }}">

        @csrf

        <div class="form-group">
            <label class="text-left">Meno</label>
            <div>
                <input type="text" name="meno" class="form-control input-lg" />
            </div>
        </div>


        <div class="form-group">
            <label class="text-left">Priezvisko</label>
            <div>
                <input type="text" name="priezvisko" class="form-control input-lg" />
            </div>
        </div>

        <div class="form-group">
            <label class="text-left">Heslo</label>
            <div>
                <input type="password" name="heslo" class="form-control input-lg" />
            </div>
        </div>

        <div class="form-group">
            <label class="text-left">Vek</label>
            <div>
                <input type="number" name="vek" class="form-control input-lg" />
            </div>
        </div>

        <div class="form-group text-center">
            <input type="submit" name="pridat" class="btn btn-warning" style="padding-top: 2px; padding-bottom: 2px;" value="Pridat" />
        </div>

    </form>

@endsection
