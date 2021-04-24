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
{{--                            {!! QrCode::size(250)--}}
{{--                                ->encoding('UTF-8')--}}
{{--                                ->format('png')--}}
{{--                                ->color(255, 0, 0)--}}
{{--                                ->style('round')--}}
{{--                                ->eye('circle')--}}
{{--                                ->errorCorrection('H')--}}
{{--                                ->merge('https://onestepahead.com.np/wp-content/uploads/2021/03/logo-small.png', .3, true)--}}
{{--                                ->generate($data); !!}--}}

                            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
                                                                ->size(250)
                                                                ->encoding('UTF-8')
                                                                ->color(255, 0, 0)
                                                                ->style('round')
                                                                ->eye('circle')
                                                                ->errorCorrection('H')
                                                                ->merge('https://onestepahead.com.np/wp-content/uploads/2021/03/logo-small.png', .3, true)
                                                                ->generate($data)) !!} ">

                        </div>
                        <div class="text-center pt-4">
                            <a href="{{route('qr.index')}}" class="btn btn-outline-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
