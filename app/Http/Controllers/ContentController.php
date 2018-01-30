<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Comment;
use App\Tag;

class ContentController extends Controller
{
    public function save() {
        //$content = new Content;
        //$content->name = "secondo contenuto";
        //$content->content = "gfh fhgfh  gfhg gfh dggfh ";
        //$content->save();

        //$content = Content::find(2);
        //$tag1 = new Tag(); // creo un oggetto Tag
        //$tag1->name = 'tag-2';
        //$tag2 = new Tag(); // creo un oggetto Tag
        //$tag2->name = 'tag-3';
        //$content->tags()->save($tag); // salva il tag e lo associa a content
        //$tag = Tag::find(2);

        $comment->content()->save($comment); // salva il commento e lo associa a content


        //$comment1 = new Comment(); // creo un oggetto commento
        //$comment1->body = 'sec commento!';
        //$content->comments()->save($comment); // salva il commento e lo associa a content
        //$comment2 = new Comment(); // creo un oggetto commento
        //$comment2->body = 'terz commento!';
        //$content->comments()->saveMany([$comment1,$comment2]); // salva più commenti
        //$content->comments()->createMany([['body' => 'quint comment'],['body' => 'sest comment']]);
        //$comment = Comment::find(2);
        //dd(Content::find(1)->comments());

    }
}
