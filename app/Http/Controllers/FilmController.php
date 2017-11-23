<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Film;
use App\Comment;

use Validator;

class FilmController extends Controller
{
    public function index(){
        $films = Film::all();
        return redirect()->route('films.all', compact('films'));
    }

    public function create(){
        return view('create');
    }

    public function submit_create(Request $request){
      $validator = Validator::make($request->all(), [
        'name' => 'required|min:3',
        'description' => 'required',
        'release_date' => 'required',
        'rating' => 'required',
        'ticket_price' => 'required',
        'country' => 'required',
        'genre' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6000'
      ]);

      if($validator->fails()){
          return redirect()->back()->withErrors($validator)->withInput($request->all());
      }
      else{
        $image = $request->file('photo');

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/images');

        $image->move($destinationPath, $input['imagename']);

        $film = new Film($request->all());
        $film->photo = $input['imagename'];
        $film->slug = str_slug($request->name, '-');

        if($film->save()){
            $films = Film::all();

            return view('films', compact('films'));
        }
      }

    }

    public function film(Request $request){
        $film = Film::where('slug', $request->film)->first();

        if($film){
            $comments = $film->comments()->get();

            return view('film', ['film' => $film, 'comments' => $comments]);
        }
        else{
            $films = Film::all();
            return redirect()->route('films.all', compact('films'));
        }

    }

    public function films(){
        $films = Film::all();

        return view('films', compact('films'));
    }

    public function comment(Request $request){
      $validator = Validator::make($request->all(), [
        'name' => 'required|min:3',
        'comment' => 'required|min:2',
        'film_id' => 'required'
      ]);

      if($validator->fails()){
          return redirect()->back()->withErrors($validator)->withInput($request->all());
      }
      else{
          $comment = new Comment($request->all());

          if($comment->save()){
              $film = Film::where('id', $request->film_id)->first();

              $comments = $film->comments()->get();

              return view('film', ['film' => $film, 'comments' => $comments]);
          }
          else{
             redirect()->back();
          }
      }
    }
}
