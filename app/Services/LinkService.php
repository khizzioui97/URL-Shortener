<?php

namespace App\Services;

use App\Models\links;
use Illuminate\Http\Response;

class LinkService
{
    public function shorten($longURL)
    {
        $shortURL = $this->generateUniqueShortURL();
        links::create([
            'long_url' => $longURL,
            'short_url' => $shortURL,
            'click_count' => 0
        ]);

        return $shortURL;
    }

    public function redirectToLongURL($shortURL)
    {
        $url = links::where('short_url', $shortURL)->first();

        if ($url) {
            $url->increment('click_count');
            return $url->long_url;
        }

        return null;
    }

    public function getTopURLs()
    {
        return links::orderBy('click_count', 'desc')->get();
    }

    private function generateUniqueShortURL()
    {
        $shortURL = substr(md5(uniqid(rand(), true)), 0, 6);

        while (links::where('short_url', $shortURL)->exists()) {
            $shortURL = substr(md5(uniqid(rand(), true)), 0, 6);
        }

        return $shortURL;
    }
}
