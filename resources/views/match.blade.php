@extends('layouts.web')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Matches') }}</div>

                <div class="card-body">
                        <div class="col-xs-12">
                            <div class="mr-b-5 text-uppercase">

                                <div class="row">
                                    
                                    <div class="col-xs-4 col-sm-4">
                                        <p>Match</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4">
                                        <p>Winner</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4">
                                        <p>Date</p>
                                    </div>
                                    
                                </div>

                            </div>

                                <div class="row">
                                     @foreach ($response as $data)
                                    
                                    <div class="col-xs-4 col-sm-4">
                                        <p class="my-md-5">{{ $data['first_team_details']['name'] }} Vs {{ $data['second_team_details']['name'] }}</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4">
                                        <p class="my-md-5">{{ $data['winner_details']['name'] }}</p>
                                    </div>
                                     <div class="col-xs-4 col-sm-4">
                                        <p class="my-md-5">{{ date('Y-m-d H:i',strtotime($data['held_on'])) }}</p>
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
