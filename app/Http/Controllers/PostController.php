<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Obtener todas las publicaciones paginadas
        $posts = Post::paginate(10);

        // Cargar la vista y pasar los datos
        return view('posts.index', compact('posts'));
    }

}
