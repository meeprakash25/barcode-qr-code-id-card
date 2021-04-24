@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Generated QR Code</div>

                    <div class="card-body">
                        <p>Data: {{$data}}</p>

                        <div class="visible-print text-center">
                            @php
                                echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG($data, 'C39+',2,50,array(255,1,1), true) . '" alt="barcode"   />';
                            @endphp
                        </div>
                        <div class="text-center pt-4">
                            <a href="{{route('barcode.index')}}" class="btn btn-outline-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
