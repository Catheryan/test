<?php
namespace Home\Service;

class MoreService extends CommonService
{
    public function getteaAddressList()
    {
        $more = $this->getM();
        $info = $more->select();
        return $info;
    }

    protected function getModelName()
    {
        return 'teaaddresslist';
    }

    public function getXiMeeting()
    {
        $more = M('ximeeting');
        $info = $more->where('id = '.$_SESSION['current_account']['id'])->select();
        return $info;
    }
    public function addMeeting()
    {
        $more = M('ximeeting');
        $info = $more->where('id = '.$_SESSION['current_account']['id'])->select();
        return $info;
    }
}