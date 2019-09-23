@extends('layouts.web')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Point Table') }}</div>

                <div class="card-body">
                        <div class="col-xs-12">
                            <div class="mr-b-12 event-headings text-uppercase">

                                <div class="row">
                                    <div class="col-xs-2 col-sm-2 pd-l-25 pd-r-25">
                                        
                                    </div>
                                    <div class="col-xs-2 col-sm-2 event-name-pd-left">
                                        <p>Team name</p>
                                    </div>
                                    <div class="col-xs-2 col-sm-2">
                                        <p>Played</p>
                                    </div>
                                    <div class="col-xs-2 col-sm-2">
                                        <p>Won</p>
                                    </div>
                                    <div class="col-xs-2 col-sm-2">
                                        <p>Lost</p>
                                    </div>
                                    <div class="col-xs-2 col-sm-2">
                                        <p>Points</p>
                                    </div>
                                    
                                </div>

                            </div>

                                <div class="row">
                                     @foreach ($response as $data)
                                    <div class="col-xs-2 col-sm-2 img-ctn-on-mobile pd-l-25 pd-r-25">
                                        @if(isset($data->logo_uri) && ($data->logo_uri != NULL))

                                        <a href="{{route('team.show', $data->id)}}"><img src="{{$data->logo_uri}}" width="100" height="100"  alt="logo"></a>
                                                        @else
                                                            <a href="{{route('team.show', $data->id)}}"><img src="/images/default.png" width="100" height="100" alt="logo"></a>
                                                        @endif
                                    </div>
                                    <div class="col-xs-2 col-sm-2">
                                        <a href="{{route('team.show', $data->id)}}"><p class="my-md-5">{{ $data->name }}</p></a>
                                    </div>
                                    <div class="col-xs-2 col-sm-2">
                                        <p class="my-md-5">{{ $data->played }}</p>
                                    </div>
                                     <div class="col-xs-2 col-sm-2">
                                        <p class="my-md-5">{{ $data->won }}</p>
                                    </div>
                                     <div class="col-xs-2 col-sm-2">
                                        <p class="my-md-5">{{ $data->lost }}</p>
                                    </div>
                                     <div class="col-xs-2 col-sm-2">
                                        <p class="my-md-5">{{ $data->points }}</p>
                                    </div>
                                     @endforeach
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
