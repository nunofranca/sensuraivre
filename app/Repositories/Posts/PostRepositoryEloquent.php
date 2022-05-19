<?php

namespace App\Repositories\Posts;

use App\Models\Post;
use App\Repositories\BaseRepository;

class PostRepositoryEloquent extends BaseRepository implements PostRepositoryInterface
{

    public function __construct(Post $post)
    {
        parent::__construct($post);
    }

    public function getAllForHomePage()
    {
        return Post::with(['images', 'category'])
            ->limit(20)
            ->orderByDesc('id')
            ->get();
    }

}
