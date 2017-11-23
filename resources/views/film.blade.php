@extends('layouts.app')

@section('title')
Film
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="shadow" id="single-film-div">
                  <h2 class="film-name"><b>{{ucfirst($film->name)}}</b></h2>
                  <br>
                  <img class="img-responsive film-img" src="{{ URL::to('images/'.$film->photo) }}"/>
                  <div class="film-inner-div">

                      <h4>{{ ucfirst($film->description) }}</h4>
                      <br/>
                      <h5><b>Release Date</b></h5>
                      <h5>{{$film->release_date}}</h5>
                      <h5><b>Release Rating</b></h5>
                      <h5 class="blue_text">{{$film->rating}}/5</h5>
                      <h5><b>Ticket Price</b></h5>
                      <h5>${{$film->ticket_price}}</h5>
                      <h5><b>Country</b></h5>
                      <h5>{{$film->country}}</h5>
                      <h5><b>Genre(s)</b></h5>
                      <h5>{{$film->genre}}</h5>
                      <br/>
                  </div>
                  <!--<a href="/add-project" class="btn btn-success">View</a>-->
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
             <h3>Comments</h3>
             <hr/>
             <br/>
             @if(Auth::check())
                 <h4>Comment on this film</h4>
                 <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/comment">
                     {{ csrf_field() }}

                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                         <label for="name" class="col-md-4 control-label">Name</label>

                         <div class="col-md-6">
                             <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                             @if ($errors->has('name'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('name') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>
                     <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                         <label for="comment" class="col-md-4 control-label">Comment</label>

                         <div class="col-md-6">
                             <textarea id="comment" type="text" class="form-control" rows="3" name="comment" value="{{ old('comment') }}" required autofocus></textarea>

                             @if ($errors->has('comment'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('comment') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>
                     <input id="film_id" class="form-control" name="film_id" value="{{$film->id}}" required type="hidden">
                     <div class="form-group">
                         <div class="col-md-6 col-md-offset-4">
                             <button type="submit" class="btn btn-primary">
                                 Submit
                             </button>
                         </div>
                     </div>
                 </form>
                 <hr/>
             @endif
             <br/>

             @if($comments)
                 @foreach($comments as $comment)
                 <div class="shadow" id="comment-film-div">
                      <h4 class="comment-name"><b>{{$comment->name}}</b></h4>
                      <h5>{{$comment->comment}}</h5>
                 </div>
                 @endforeach
             @endif
        </div>
      </div>
    </div>
@endsection
