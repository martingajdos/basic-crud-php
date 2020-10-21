@extends('parent')

@section('main')


    <div class="text-center">
        <a href="{{ route('crud.index') }}" class="btn btn-primary" style="margin-top: 20px; padding-top: 2px; padding-bottom: 2px;">Naspat</a>
    </div>

    <br />

    <form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label class="text-left">Meno</label>
            <div>
                <input type="text" name="meno" value="{{ $data->meno }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <div class="form-group">
            <label>Priezvisko</label>
            <div>
                <input type="text" name="priezvisko" value="{{ $data->priezvisko }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <div class="form-group">
            <label>Heslo</label>
            <div>
                <input type="text" name="heslo" value="{{ $data->heslo }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <div class="form-group">
            <label>Vek</label>
            <div>
                <input type="text" name="vek" value="{{ $data->vek }}" class="form-control input-lg" />
            </div>
        </div>
        <br />
        <div class="form-group text-center">
            <input type="submit" name="edit" class="btn btn-warning" style="padding-top: 2px; padding-bottom: 2px;" value="Upravit" />
        </div>
    </form>


@endsection
