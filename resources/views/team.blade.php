@extends('layouts.web')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Team List') }}</div>

                <div class="card-body">
                        <div class="col-xs-12">
                            <div class="mr-b-5 event-headings text-uppercase">

                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 pd-l-25 pd-r-25">
                                        
                                    </div>
                                    <div class="col-xs-4 col-sm-4 event-name-pd-left">
                                        <p>Team name</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4">
                                        <p>Country</p>
                                    </div>
                                    
                                </div>

                            </div>

                                <div class="row">
                                     @foreach ($response as $data)
                                    <div class="col-xs-4 col-sm-4 img-ctn-on-mobile pd-l-25 pd-r-25">
                                        @if(isset($data->logo_uri) && ($data->logo_uri != NULL))

                                        <a href="{{URL('team/'.$data->id) }}"><img src="{{$data->logo_uri}}" width="100" height="100"  alt="logo"></a>
                                                        @else
                                                            <a href="{{URL('team/'.$data->id) }}"><img src="/images/default.png" width="100" height="100" alt="logo"></a>
                                                        @endif
                                    </div>
                                    <div class="col-xs-4 col-sm-4">
                                        <a href="{{URL('team/'.$data->id) }}"><p class="my-md-5">{{ $data->name }}</p></a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4">
                                        <p class="my-md-5">{{ $data->club_state }}</p>
                                    </div>
                                     @endforeach
                            </div>
                        </div>
                    {{$response->appends(request()->query())->links()}}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
