<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

// CMS
use App\Models\Article;
use App\Models\Investment;
use App\Models\InvestmentSelectfield;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('investment')) {
            $query = $request->only(['area', 'rooms', 'highlighted', 'price', 'type', 'kitchen', 'balcony', 'garden', 'terrace']);

            if ($request->filled('investment')) {
                return redirect()->route('front.developro.plan', [
                        'slug' => $request->investment
                    ] + $query);
            }

            return redirect()->route('front.developro.search.index', $query);
        }

        $investments = Investment::where('status', 1)
            ->whereIn('type', [1, 2, 3])
            ->whereHas('city')
            ->with('city')
            ->get();

        $completed = Investment::where('status', 2)
            ->orderBy('date_end', 'desc')
            ->get();

        $news = Article::where('status', 1)->orderBy('posted_at', 'DESC')->limit(2)->get();

        $types = [1, 3, 2];

        $flatOptions = [];
        foreach ($types as $type) {
            $flatOptions[$type] = InvestmentSelectfield::where('category', 1)
                ->where('type', $type)
                ->orderBy('sort')
                ->get();
        }

        $houseOptions = [];
        foreach ($types as $type) {
            $houseOptions[$type] = InvestmentSelectfield::where('category', 2)
                ->where('type', $type)
                ->orderBy('sort')
                ->get();
        }

        return view('front.homepage.index', [
//            'array' => Inline::getElements(1),
            'news' => $news,
            'completed' => $completed,
            'investments' => $investments,
            'flatArea' => $flatOptions[1],
            'flatRooms' => $flatOptions[3],
            'flatPrice' => $flatOptions[2],
            'houseArea' => $houseOptions[1],
            'houseRooms' => $houseOptions[3],
            'housePrice' => $houseOptions[2],
        ]);
    }
}
