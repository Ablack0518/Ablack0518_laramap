<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    function index()
    {
        //Post::destroy(['id']);// To delete rows on table
        //(DB::statement('DROP TABLE posts'));
        //$posts = DB::table('posts')->get();// Query\Bluider
        //dump(date('d M Y'));


        $title = 'introduction';
        $content = '<p class="corps">Laravel Mix fournit une API fluide pour définir les étapes de construction de Webpack pour votre application Laravel à l\'aide de plusieurs préprocesseurs CSS et JavaScript courants. Grâce à un simple chaînage de méthodes, vous pouvez définir facilement votre pipeline d\'actifs</p>';
        //$post = Post::create(['title' => $title, 'content' => $content, "slug" => 'parcourir-le-code-source', 'published' => 1]);

        $posts = Post::all(); // Eloquent\Collection
        //$title = Post::get('title');

        return view('posts.index', compact('posts'));
    }
    function show()
    {
        $title = 'introduction';
        $content = 'Laravel Mix fournit une API fluide pour définir les étapes de construction de Webpack pour votre application Laravel à l\'aide de plusieurs préprocesseurs CSS et JavaScript courants. Grâce à un simple chaînage de méthodes, vous pouvez définir facilement votre pipeline d\'actifs';
        //DB::insert('insert into posts (title, content) values (:title, :content)', ['title'=> $title,'content'=> $content]);
        $posts = DB::select('SELECT * FROM posts'); //get posts of database an using PDO
        dump($posts);
        $post = DB::table('posts'); //get posts of database an using queryBuilder
        dump($post->get()); //display all posts
        dump($post->get()[1]);
        dump($post->First()); //display the first posts
        echo json_encode($post->get());
        dump($post->where('id', '=', 2)->get());
        dump($post->count());
        if (Post::get()) {
            $data = Post::get();
        }
        //dd(Post::find(1));
        $data = $post->get();
        dd(Post::all());
        DB::statement('DROP TABLE name_table');
    }
}
