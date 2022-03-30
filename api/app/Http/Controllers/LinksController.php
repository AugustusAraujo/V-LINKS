<?php

namespace App\Http\Controllers;

use \App\Models\Links;
use Illuminate\Http\Request;
use Illuminate\Http\Request as HttpRequest;

class LinksController extends Controller
{
    /**
     * The links Controller
     * @param Request $request
     * @param string $link
     * @return string
     */
    public function show(Request $request, $link = 2)
    {
        if ($link == 2) {
            return response()->json([
                "status" => "Invalid Param."
            ], 400);
        }
        $links = new Links();
        $result = $links->where("shortened", $link)->first();
        if (empty(json_decode($result))) {
            return response()->json([
                "status" => "Invalid Param."
            ], 400);
        }
        return response()->json($result, 200);
    }
}
