@extends('layouts.app')

@section('title')
Create
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Film</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="/create">
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

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" rows="3" type="text" class="form-control" name="description" value="{{ old('description') }}" required></textarea>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('release_date') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Release Date</label>

                            <div class="col-md-6">

                                <input id="release_date" type="date" class="form-control" name="release_date" value="{{ old('release_date') }}" required>

                                @if ($errors->has('release_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('release_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rating') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Rating</label>

                            <div class="col-md-6">
                                <select id="rating" name="rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>

                                @if ($errors->has('rating'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rating') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <select id="country" name="country">
                                    <option value="spain">Spain</option>
                                    <option value="germany">Germany</option>
                                    <option value="kosovo">Kosovo</option>
                                    <option value="djubuti">Djubuti</option>
                                </select>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ticket_price') ? ' has-error' : '' }}">
                            <label for="ticket_price" class="col-md-4 control-label">Ticket Price</label>

                            <div class="col-md-6">

                                $<input id="ticket_price" type="number" class="form-control" name="ticket_price" value="{{ old('ticket_price') }}" required>

                                @if ($errors->has('ticket_price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ticket_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">
                            <label for="genre" class="col-md-4 control-label">Genre</label>

                            <div class="col-md-6">

                                <input id="genre" type="text" class="form-control" name="genre" value="{{ old('genre') }}" required>

                                <h5 class="grey_text">seperate multiple genre's with a comma (,)</h5>

                                @if ($errors->has('genre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('genre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="photo" class="col-md-4 control-label">Film Image</label>
                            <div class="col-md-6">
                                <input type="file" required accept="image/*" file-model="myFile" id="photo" name="photo"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
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
