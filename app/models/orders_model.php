<?php
class Orders_model extends FS_Model {
    
    private $ordersid = 0;
    private $uid = 0;
    private $receive_name = '';
    private $receive_phone = '';
    private $receive_time = '';
    private $receive_address = '';
    private $receive_remark = '';
    private $pay_paytype = '';//訂單付款類型
    private $pay_money = 0;//訂單付款金額
    private $pay_account = '';//訂單付款帳號
    private $pay_name = '';//訂單付款姓名
    private $pay_paytime = 0;//訂單付款時間
    private $pay_remark = '';//訂單付款其它備註
    private $pay_status = 0;//訂單付款狀態
    private $product_status = 0;
    private $paycheck_status = 0;
    private $orders_status = 0;
    private $sendtime = 0;
    private $sendtime_date = 0;
    private $sendtime_time = 0;
    private $status = 1;
	
	public function construct($arg = array())
	{
        //引入data
        $data = $this->common_model->data;
        
        //$arg引入資料之判定
        $ordersid = !empty($arg['ordersid']) ? $arg['ordersid'] : 0;
        $uid = !empty($arg['uid']) ? $arg['uid'] : 0;
        $receive_name = !empty($arg['receive_name']) ? $arg['receive_name'] : '';
        $receive_phone = !empty($arg['receive_phone']) ? $arg['receive_phone'] : '';
        $receive_time = !empty($arg['receive_time']) ? $arg['receive_time'] : '';
        $receive_address = !empty($arg['receive_address']) ? $arg['receive_address'] : '';
        $receive_remark = !empty($arg['receive_remark']) ? $arg['receive_remark'] : '';
        $pay_paytype = !empty($arg['pay_paytype']) ? $arg['pay_paytype'] : '';
        $pay_money = !empty($arg['pay_money']) ? $arg['pay_money'] : 0;
        $pay_account = !empty($arg['pay_account']) ? $arg['pay_account'] : '';
        $pay_name = !empty($arg['pay_name']) ? $arg['pay_name'] : '';
        $pay_paytime = !empty($arg['pay_paytime']) ? $arg['pay_paytime'] : 0;
        $pay_remark = !empty($arg['pay_remark']) ? $arg['pay_remark'] : '';
        $pay_status = !empty($arg['pay_status']) ? $arg['pay_status'] : 0;
        $product_status = !empty($arg['product_status']) ? $arg['product_status'] : 0;
        $paycheck_status = !empty($arg['paycheck_status']) ? $arg['paycheck_status'] : 0;
        $orders_status = !empty($arg['orders_status']) ? $arg['orders_status'] : 0;
        $sendtime_date = !empty($arg['sendtime_date']) ? $arg['sendtime_date'] : '';
        $sendtime_time = !empty($arg['sendtime_time']) ? $arg['sendtime_time'] : '';
        $sendtime = !empty($arg['sendtime']) ? $arg['sendtime'] : 0;
        $status = !empty($arg['status']) ? $arg['status'] : 1;
        
        //uid
        if(!empty($uid) == FALSE || $uid == 0)
        {
            $uid = $data['user']['uid'];
        }
        
        if(empty($sendtime) && !empty($sendtime_date) && !empty($sendtime_time) )
        {
            $sendtime = $sendtime_date.' '.$sendtime_time;
        }
        else if(!empty($sendtime) && empty($sendtime_date) && empty($sendtime_time) )
        {
            $sendtime_array = explode(' ', $sendtime);
            $sendtime_date = $sendtime_array[0];
            $sendtime_time = $sendtime_array[1];
        }
        
        //set
        $this->ordersid = $ordersid;
        $this->receive_name = $receive_name;
        $this->receive_phone = $receive_phone;
        $this->receive_time = $receive_time;
        $this->receive_address = $receive_address;
        $this->receive_remark = $receive_remark;
        $this->sendtime = $sendtime;
        $this->sendtime_date = $sendtime_date;
        $this->sendtime_time = $sendtime_time;
        $this->pay_paytype = $pay_paytype;
        $this->pay_money = $pay_money;
        $this->pay_account = $pay_account;
        $this->pay_name = $pay_name;
        $this->pay_paytime = $pay_paytime;
        $this->pay_remark = $pay_remark;
        $this->pay_status = $pay_status;
        $this->product_status = $product_status;
        $this->paycheck_status = $paycheck_status;
        $this->orders_status = $orders_status;
        $this->uid = $uid;
        $this->status = $status;
        
        return TRUE;
    }
    
	public function db_construct($arg = array())
    {
        //$arg引入資料之判定
        $db_where = !empty($arg['db_where']) ? $arg['db_where'] : array();
        
		$this->db->from('orders');
		$this->db->where($db_where);
		$query = $this->db->get();
		$orders_array = $query->row_array();
        
        $this->construct($orders_array);
    }
    
	public function get_array()
	{
        $orders['ordersid'] = $this->ordersid;
        $orders['product_status'] = $this->product_status;
        $orders['paycheck_status'] = $this->paycheck_status;
        $orders['receive_name'] = $this->receive_name;
        $orders['receive_phone'] = $this->receive_phone;
        $orders['receive_time'] = $this->receive_time;
        $orders['receive_address'] = $this->receive_address;
        $orders['receive_remark'] = $this->receive_remark;
        $orders['pay_paytype'] = $this->pay_paytype;
        $orders['pay_money'] = $this->pay_money;
        $orders['pay_account'] = $this->pay_account;
        $orders['pay_name'] = $this->pay_name;
        $orders['pay_paytime'] = $this->pay_paytime;
        $orders['pay_remark'] = $this->pay_remark;
        $orders['pay_status'] = $this->pay_status;
        $orders['sendtime'] = $this->sendtime;
        $orders['sendtime_date'] = $this->sendtime_date;
        $orders['sendtime_time'] = $this->sendtime_time;
        $orders['orders_status'] = $this->orders_status;
        $orders['uid'] = $this->uid;
        $orders['status'] = $this->status;
        
		return $orders;
	}
    
	public function update($arg = array())
	{
        $update_white_list = !empty($arg['update_white_list']) ? $arg['update_white_list'] : array();
        
        $orders2 = $this->get_array();
        
        $orders = array(
            'ordersid' => $orders2['ordersid'],
            'uid' => $orders2['uid'],
            'product_status' => $orders2['product_status'],
            'paycheck_status' => $orders2['paycheck_status'],
            'receive_name' => $orders2['receive_name'],
            'receive_phone' => $orders2['receive_phone'],
            'receive_time' => $orders2['receive_time'],
            'receive_address' => $orders2['receive_address'],
            'receive_remark' => $orders2['receive_remark'],
            'pay_paytype' => $orders2['pay_paytype'],
            'pay_money' => $orders2['pay_money'],
            'pay_account' => $orders2['pay_account'],
            'pay_name' => $orders2['pay_name'],
            'pay_paytime' => $orders2['pay_paytime'],
            'pay_remark' => $orders2['pay_remark'],
            'pay_status' => $orders2['pay_status'],
            'sendtime' => $orders2['sendtime'],
            'sendtime_date' => $orders2['sendtime_date'],
            'sendtime_time' => $orders2['sendtime_time'],
            'orders_status' => $orders2['orders_status']
        );
        
        //如果有設更新白名單，就刪除不在白名單內的更新數據
        if(!empty($update_white_list))
        {
            foreach($orders as $key => $value)
            {
                if(!in_array($key, $update_white_list))
                {
                    unset($orders[$key]);
                }
            }
        }
        
        if( empty($orders['ordersid']) )
        {
            $orders['ordersid'] = $this->common_model->db_search_max( array('table_name' => 'orders', 'id_name' => 'ordersid') ) + 1;
            $this->db->insert('orders', $orders);
        }
        else
        {
            $this->db->where(array('ordersid' => $orders['ordersid']));
            $this->db->update('orders', $orders);
        }
    }
    
    public function hidden()
    {
        $orders_array = $this->get_array();

        $this->db->where( array('ordersid' => $orders_array['ordersid'] ) );
        $this->db->update('orders', array('status' => 0) ); 
    }
	
}