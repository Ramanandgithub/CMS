<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentBlock;
use Illuminate\Support\Facades\Cache;

class ShowPageContoller extends Controller
{
    public function showpage($id)
    {
        // cache key
        $cacheKey = "page_blocks_" . $id;

        // cache for 10 minutes
        $blocks = Cache::remember($cacheKey, 600, function () use ($id) {
            return ContentBlock::where('page_id', $id)
                ->orderBy('order_index')
                ->get();
        });

        return response()->json($blocks);
    }
}
