<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index () 
    {
        $articles = Article::all();

        return view("articles", ["articles" => $articles]);
    }

    public function create(){
        return view("articles_create");
    }


    public function store(Request $request)
{
    // Validation des données
    $validated = $request->validate([
        'title' => 'required|min:3|max:255',
        'content' => 'required|min:10',
    ]);
    
    // Création de l'article
    Article::create($validated);
    
    // Redirection vers la liste avec un message de succès
    return redirect()->route('articles.index')->with('success', 'Article créé avec succès !');
}
}
