<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use \Log;

class CommentController extends Controller
{
    //
    public function store($post)
    {
        $this->validate(request(),[
            'body'=>'required|min:2'
        ]);
        $post=Post::where('link',$post)->first();  
        $post->addComment(request());
        return redirect(url()->previous().'#alert');
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
            $messageId = $update->callback_query->message->message_id;
            $item=$update->callback_query->data;
            $item=explode("_",$item);
            $comment=Comment::find($item[1]);
            $counter=1;
            $subChilds=array();
            array_push($subChilds,$comment->id);
            while($last=array_pop($subChilds))
            {
                foreach (Comment::where('replyTo',$last)->where('publish',1)->get() as $subCom) 
                {
                    $counter++;
                    array_push($subChilds,$subCom->id);
                }
            }
            if($item[0]=='0')
            {
                $comment->post->countComments=$comment->post->countComments-$counter;
                $comment->post->save();
                $comment->publish=0;
                $comment->save();
                makeHTTPRequest('editMessageText',[
                    'chat_id'=>110374168,
                    'message_id'=>$messageId,
                    'parse_mode'=>'html',   
                    'text'=>"<b>".$comment->body."</b>\n\n❌ Comment Successfully Disapproved.",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Approve",'callback_data'=>'1_'.$item[1]] //back from short or long definition
                            ]
                        ]
                    ])
                ]);
            }
            else if($item[0]=='1')
            {
                $comment->post->countComments=$comment->post->countComments+$counter;
                $comment->post->save();
                $comment->publish=1;
                $comment->save();
                makeHTTPRequest('editMessageText',[
                    'chat_id'=>110374168,
                    'message_id'=>$messageId,
                    'parse_mode'=>'html',   
                    'text'=>"<b>".$comment->body."</b>\n\n✅ Comment Successfully Approved.",
                    'reply_markup'=>json_encode([
                        'inline_keyboard'=>[
                            [
                                ['text'=>"Disapprove",'callback_data'=>'0_'.$item[1]] //back from short or long definition
                            ]
                        ]
                    ])
                ]);
            }
            else{

            }
        }
        else
        {
            makeHTTPRequest('sendMessage',[
                'chat_id'=>110374168,
                'text'=>"❌ ERROR ❌",
            ]);

        }
    }
}
