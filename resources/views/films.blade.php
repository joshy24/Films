@extends('layouts.app')

@section('title')
Films
@endsection

@section('content')
    <div id="index-top">
        <div class="container">
            <a href="{{ route('films.new') }}"><h4 class="text-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Add a New Film</h4></a>
            <h4 class="text-center">All Films</h4>
            <h6 class="text-center">Click One to View More Info</h6>
        		 @foreach($films as $film)
                  <div class="col-sm-6 col-md-6 col-md-offset-3 shadow films-single-film">
                      <a href="{{ route('films.one', ['film' => $film->slug]) }}">
                      <img class="img-responsive" src="{{ URL::to('images/'.$film->photo) }}">
                      </a>
                      <h3><b>{{$film->name}}</b></h3>
                      <h4>{{ ucfirst($film->description) }}</h4>
                      <h5><b>Average Rating</b></h5>
                      <h5 class="blue_text">{{$film->rating}}/5</h5>
                      <a href="{{ route('films.one', ['film' => $film->slug]) }}"></a>
                  </div>
        		  @endforeach

        </div>
    </div>
@endsection
