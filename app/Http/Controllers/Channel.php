<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services as Services;
class Channel extends Controller
{
    private $channelService;
    public function __construct(Services\Channel $ServicesChannel)
    {
        $this->channelService = $ServicesChannel;
    }
    public function syncAllByUser(){
        $this->channelService->syncAllByUser($this->getLoginUser());
        return ;
    }
    public function getCampaigns(Request $request){
        $params = $request->all();
        $channel_id = $params['channel_id'];
        $user = $this->getLoginUser();
        $client_id = 1;
        #$result = $this->channelService->adAccount()->getListByClient($client);
        #return $this->result($result);
    }
}
