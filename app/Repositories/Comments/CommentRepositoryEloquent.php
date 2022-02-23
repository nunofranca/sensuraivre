<?php

namespace App\Repositories\Comments;

use App\Models\Comment;
use App\Repositories\BaseRepository;

class CommentRepositoryEloquent extends BaseRepository implements CommentRepositoryInterface
{

    public function __construct(Comment $comment)
    {
        parent::__construct($comment);
    }

    public function getOrderByDesc($key)
    {
        return Comment::orderByDesc($key)->with('post')->get();
    }

}
