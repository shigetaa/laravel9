<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\Tweet;
use App\Services\TweetService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        $tweetId = (int) $request->route('tweetId');
        if (!$tweetService->checkOwnTweet($request->user()->id, $tweetId)) {
            throw new AccessDeniedHttpException();
        }
        //dd($tweetId);
        /*$tweet = Tweet::where('id',$tweetId)->first();
        if(is_null($tweet)) {
            throw new NotFoundHttpException('存在しないつぶやき');
        }*/
        $tweet = Tweet::where('id',$tweetId)->firstOrFail();
        //dd($tweet);
        return view('tweet.update')->with('tweet',$tweet);
    }
}
