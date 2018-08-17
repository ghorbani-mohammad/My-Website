<?php

namespace App;
use \Log;
use \Session;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //
    protected $fillable=['title','body','link'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function addComment($body)
    {
        
        $comment=$this->comments()->create([
            'body' => $body,
            'publish' => 0,
            'post_id' => $this->id
        ]);
        $this->countComments=$this->countComments+1;
        $this->save();   
        Session::flash('message', 'Your Comment Will Publish After Inspection, Thanks.'); 
        Session::flash('alert-class', 'alert-success'); 
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
        makeHTTPRequest('sendMessage',[
            'chat_id'=>110374168,
            'text'=>"📢✉️New Comment:\n\n<b>".$body."</b>",
            'parse_mode'=>'html',
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                        [
                            ['text'=>"Approve",'callback_data'=>'1_'.$comment->id],
                            // ['text'=>"Delete",'callback_data'=>'0_'.$comment->id]
                        ]
                    ]
                ])
        ]);
    }
}
