<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryObserver
{
    /**
     * Handle the Category "created" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function creating(Category $category)
    {
        $category['tenant_id'] = Auth::user()->tenant->id;
    }


}
