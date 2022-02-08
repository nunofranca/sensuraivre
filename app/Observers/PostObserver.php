<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function creating(Post $post)
    {
        $post['slug'] = Str::slug($post['title']);
        $post['user_id'] = Auth::user()->id;
        $post['tenant_id'] = Auth::user()->tenant->id;

    }


}
