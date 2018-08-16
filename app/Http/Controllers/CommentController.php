<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    //
    public function store($post)
    {
        $this->validate(request(),[
            'body'=>'required|min:2'
        ]);
        $post=Post::where('link',$post)->first();  
        $post->addComment(request('body'));
        return back();
    }
    public function control()
    {
        define('API_KEY','661968560:AAG0Izgk-fabybDKqNegqYe8jC0mQMQ_eAE');
        function makeHTTPRequest($method,$datas=[])
        {
            $url = "https://api.telegram.org/bot".API_KEY."/".$method;
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
            $res = curl_exec($ch);
            if(curl_error($ch))
            {
                var_dump(curl_error($ch));
            }else
            {
                return json_decode($res);
            }
        }  

        $update = json_decode(file_get_contents('php://input'));
        if(isset($update->callback_query))
        {
			$callbackQueryId=$update->callback_query->id;
            makeHTTPRequest('answerCallbackQuery',['callback_query_id'=>$callbackQueryId]);
            $item=$update->callback_query->data;
            $item=explode("_",$item);
            $com=Comment::find($item[1]);
            if($item[0]=='0')
            {
                $com->publish=0;
                $com->save();
                makeHTTPRequest('sendMessage',[
                    'chat_id'=>110374168,
                    'text'=>"نظر مورد نظر در وضعیت عدم تایید قرار گرفت ✅",
                ]);
            }
            else if($item[0]=='1')
            {
                $com->publish=1;
                $com->save();
                makeHTTPRequest('sendMessage',[
                    'chat_id'=>110374168,
                    'text'=>"نظر مورد نظر تایید شد ✅",
                ]);
            }
            else{

            }
        }
        else
        {
            makeHTTPRequest('sendMessage',[
                'chat_id'=>110374168,
                'text'=>"❌ تنها روی باتن ها کلیک کنید ❌",
            ]);

        }
    }
}
