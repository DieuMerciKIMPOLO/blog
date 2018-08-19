<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Post;
Route::get('/', function () {
    $title="Super Titre";
    $body ="Super Content";
    // DB::insert('INSERT INTO posts(title, body) VALUES(:title, :body)',
    // ['title'=>$title, 'body'=>$body]);
    // dump(DB::select('SELECT * FROM posts'));
    // dump(DB::table('posts')->where('id','>',3)->get());
    // dump(DB::select('SELECT * FROM posts'));
    // dump(DB::table('posts')->where('id','>',3)->take(2)->get())/ we can use limit instead of take method;
    // dump(DB::table('posts')->whereTitleAndBody('Title value','Body value')->get());
     // dump(DB::table('posts')->whereTitle('Title','value')->OrWhereBody('Body', 'value')->get());
    //  Insert
    // DB::table('posts')->insert([
    //   'title'=>'Magnifique titre', 'body'=>'Magnifique Body'
    // ]);
    //To insert many of values use table of tables
    // dump(DB::table('posts')->get(['title as kimpolo']));
    // DB::table('posts')->where('id',13)->update(['body', 'We have already change it']);
    // ELOQUENT
    // DB::table('posts')->where('id',12)->delete();
    // dump(DB::table('posts')->get());

    // $post=App\Post::find(1);
    // dd($post->title);
    // $post= new Post;
    // $post->title="Mon nouveau titre";
    // $post->body="Mon nouveau body";
    // $post->save();
    // $post= new Post(['title'=>'Titre', 'body'=>'body']);
    // $post.save()
    //$post= Post::create(['title'=>'Titre', 'body'=>'body']);
    DB::statement('DROP TABLE posts');
    // dd(Post::all());
    $wiev=view('welcome');
    $wiev->name="KIMPOLO";
    $wiev->firstName="Dieu Merci";
    return $wiev;
});
