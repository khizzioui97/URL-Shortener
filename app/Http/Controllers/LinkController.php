<?php

namespace App\Http\Controllers;

use App\services\LinkService;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    private $urlService;

    public function __construct(LinkService $urlService)
    {
        $this->urlService = $urlService;
    }

    public function shorten(Request $request)
    {
        
        $this->validate($request, [
            'url' => 'required|url|max:255'
        ]);

        $short_url=$this->urlService->shorten($request->url);

        return response()->json(compact('short_url'), 201);
    }

    public function redirect($code)
    {
        $longURL = $this->urlService->redirectToLongURL($code);

        if ($longURL) {
            return redirect($longURL);
        }

        return response()->json(['error' => 'Short URL not found'], 404);
    }

    public function stats()
    {
        $urls = $this->urlService->getTopURLs();

        return response()->json(['urls' => $urls]);
    }
}
