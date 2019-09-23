@extends('layouts.web')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Players List') }}</div>

                <div class="card-body">
                    <div class="col-xs-12">
                            <div class="mr-b-5 event-headings text-uppercase">

                                <div class="row">
                                    <div class="col-xs-12 col-sm-2 pd-l-25 pd-r-25">
                                        
                                    </div>
                                    <div class="col-xs-3 col-sm-3 event-name-pd-left">
                                        <p>First name</p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                        <p>Last name</p>
                                    </div>
                                    <div class="col-xs-3 col-sm-2">
                                        <p>Jersey number</p>
                                    </div>
                                    <div class="col-xs-3 col-sm-2">
                                        <p>Country</p>
                                    </div>
                                </div>

                            </div>

                                <div class="row">
                                     @foreach ($response as $data)
                                    <div class="col-xs-12 col-sm-2 img-ctn-on-mobile pd-l-25 pd-r-25">
                                        @if(isset($data['player_details']['image_uri']) && ($data['player_details']['image_uri'] != NULL))

                                        <img  src="{{'http://localhost/cricketdemo/public/'.$data['player_details']['image_uri']}}"  width="100" height="100" alt="Pic">

                                        @else
                                        <img  src="/images/default.png"  width="100" height="100" alt="Pic">

                                        @endif
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                        <p class="my-md-5">{{ $data['player_details']['first_name'] }}</p>
                                    </div>
                                    <div class="col-xs-3 col-sm-3">
                                        <p class="my-md-5">{{ $data['player_details']['last_name'] }}</p>
                                    </div>
                                    <div class="col-xs-3 col-sm-2">
                                       <p class="my-md-5"> {{ $data['player_details']['jersey_number'] }}</p>
                                    </div>
                                     <div class="col-xs-3 col-sm-2">
                                       <p class="my-md-5">{{ $data['player_details']['country'] }} </p>
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



