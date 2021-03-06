<?php
class Client {
	private $_client;
	
	public function __construct($wsdl = null, $options)
	{
		$this->_client = new SoapClient($wsdl,$options);
	}

	public function submitNotify()
	{
		// $submitNotifyRequestMessage = new stdClass;
		// $submitNotifyRequestMessage->storeID = 'kuruma_yahoo_jp_id';
		// $submitNotifyRequestMessage->businessCommodityID = '1';
		// $submitNotifyRequestMessage->auctionID = '123';
		// $submitNotifyRequestMessage->startDate = time();
		// $submitNotifyRequestMessage->endDate = time();
		$submitNotifyRequestMessage = (object)array(
			'storeID' 				=> 'kuruma_yahoo_jp_id',
			'businessCommodityID' 	=> '43',
			'auctionID' 			=> '123',
			'startDate' 			=> time(),
			'endDate' 				=> time(),
		);
		
		return $this->_client->submitNotify($submitNotifyRequestMessage);
	}

	public function questionNotify()
	{
		$questionNotifyRequestMessage = (object) array(
			'storeID' 		=> 'kuruma_yahoo_jp_id',
			'questionID' 	=> 'test123',
			'auctionID' 	=> '123',
			'questioner' 	=> '47852121a',
			'comment' 		=> 'Test question',
		);
		return $this->_client->questionNotify($questionNotifyRequestMessage);
	}

	public function bidNotify()
	{
		$bidNotifyRequestMessage = (object) array(
			'storeID' 		=> 'vn_test',
			'auctionID' 	=> '123',
			'bidderArray' 	=> array(
				(object) array('bidder' => '47852121a'),
				(object) array('bidder' => '1adasd')
			),
			'price'			=> '12345'
		);
		return $this->_client->bidNotify($bidNotifyRequestMessage);
	}

	public function soldNotify()
	{
		$soldNotifyRequestMessage = (object) array(
			'storeID' 			=> 'kuruma_yahoo_jp_id',
			'auctionID' 		=> '123',
			'winnerInfoArray' 	=> (object) array(
				'winner' 	=> '47852121a',
				'email'  	=> '',
				'price'	 	=> '2121217',
				'quantity'	=> '',
			),
			'quantityTotal'		=> '',
			'businessCommodityID' => '43'
		);
		return $this->_client->soldNotify($soldNotifyRequestMessage);
	}	

	public function closeNotify()
	{
		$closeNotifyRequestMessage = (object) array(
			'storeID' 		=> 'kuruma_yahoo_jp_id',
			'auctionID' 	=> '123',
		);
		return $this->_client->closeNotify($closeNotifyRequestMessage);
	}

	public function orderNotify()
	{
		$orderNotifyRequestMessage = (object) array(
			'storeID' 		=> 'kuruma_yahoo_jp_id',
			'auctionID' 	=> '',
			'winner' 		=> array(),
			'orderNo'		=> ''
		);
		return $this->_client->soldNotify($orderNotifyRequestMessage);
	}	


}
