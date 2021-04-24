@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Qr Generator</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('qr.store') }}" aria-label="Generate QR">
                            @csrf

                            <div class="form-group row">
                                <label for="text" class="col-sm-4 col-form-label text-md-right">QR Data</label>
                                <div class="col-md-6">
                                    <input id="data" type="text"
                                           class="form-control{{ $errors->has('data') ? ' is-invalid' : '' }}"
                                           name="data" value="{{ old('data') }}" placeholder="Enter Qr data" required
                                           autofocus>
                                    @if ($errors->has('data'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('data') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Generate
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
