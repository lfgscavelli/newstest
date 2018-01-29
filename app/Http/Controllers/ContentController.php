<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Comment;

class ContentController extends Controller
{
    public function save() {

        if (Content::all()->count()<1) {
            $content = new Content;
            $content->name = "primo contenuto";
            $content->content = "gfh fhgfh  gfhg gfh dggfh ";
            $content->save();
        } else {
            $content = Content::find(1);
        }
        //$comment1 = new Comment(); // creo un oggetto commento
        //$comment1->body = 'sec commento!';
        //$content->comments()->save($comment); // salva il commento e lo associa a content
        //$comment2 = new Comment(); // creo un oggetto commento
        //$comment2->body = 'terz commento!';
        //$content->comments()->saveMany([$comment1,$comment2]); // salva più commenti
        //$content->comments()->createMany([['body' => 'quint comment'],['body' => 'sest comment']]);
        //$comment = Comment::find(2);
        dd(Content::find(1)->comments());

    }
}
