<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Huobi\Api\Spot;



use Lin\Huobi\Request;

class Account extends Request
{
    /**
     * 
     * */
    public function get(array $data=[]){
        $this->type='GET';
        $this->path='/v1/account/accounts';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     * /v1/account/accounts/{account-id}/balance
     * */
    public function getBalance(array $data=[]){
        $this->type='GET';
        $this->path='/v1/account/accounts/'.$data['account-id'].'/balance';
        $this->data=$data;
        return $this->exec();
    }
    
    
    /**
     *POST /v1/account/transfer
     * */
    public function postTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/v1/account/transfer';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /v1/account/history
     * */
    public function getHistory(array $data=[]){
        $this->type='GET';
        $this->path='/v1/account/history';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *GET /v2/account/ledger
     * */
    public function getLedger(array $data=[]){
        $this->type='GET';
        $this->path='/v2/account/ledger';
        $this->data=$data;
        return $this->exec();
    }
    
    /**
     *POST /v1/futures/transfer
     * */
    public function postFuturesTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/v1/futures/transfer';
        $this->data=$data;
        return $this->exec();
    }
}