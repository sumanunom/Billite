<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dashboard_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get SiteVisit by id
     */

function add_todo($params)
    {
        $this->db->insert('todo',$params);
        return $this->db->insert_id();
    }

   function update_status($id,$params)
    {
        $this->db->where('id',$id);
        return($this->db->update('todo',$params));
    }

    public function add(){

        $query = $this->db->query(" SELECT * FROM todo 
        INNER JOIN ip_users ON todo.user_id = ip_users.user_id
        ORDER BY todo .status DESC");
        $query = $query->result_array();
        return $query;
    }
    
    public function delete_data($id){  
           $this->db->where("id", $id);  
           $this->db->delete("todo");  
           //DELETE FROM tbl_user WHERE id = $id  
      }  
    
    public function did_delete_row($id){
    $this -> db -> where('id', $id);
    $this -> db -> delete('todo');
}

public function get_client_name(){
    $this->db->select('*');
    $this->db->from('ip_clients');
    return $this->db->get()->result();
}

public function get_invoice_num(){
    $this->db->select('*');
    $this->db->from('ip_invoices');
    return $this->db->get()->result();
}

public function get_quote_num(){
    $this->db->select('*');
    $this->db->from('ip_quotes');
    return $this->db->get()->result();
}


    public function recent_invoice()
    {
        $this->db->select('A.*,D.invoice_paid,C.invoice_number,C.invoice_id,C.invoice_status_id,D.invoice_total,B.item_name');
        $this->db->from('ip_clients As A');
        $this->db->join('ip_invoices AS C', 'A.client_id = C.client_id');
        $this->db->join('ip_invoice_items As B', 'C.invoice_id = B.invoice_id');
        $this->db->join('ip_invoice_amounts AS D', 'B.invoice_id = D.invoice_id');
        $this->db->order_by('C.invoice_number DESC');
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    public function recent_quotes()
    {
        $this->db->select('A.client_name,A.*, B.quote_date_created,B.quote_id, B.quote_number, C.quote_total');
        $this->db->from('ip_clients As A');
        $this->db->join('ip_quotes AS B', 'A.client_id = B.client_id');
        $this->db->join('ip_quote_amounts AS C', 'C.quote_id = B.quote_id');
        $this->db->order_by('B.quote_number DESC');
        $this->db->limit(5);
        return $this->db->get()->result();
    }
  
// -------------------- ALL TOP CLIENTS -------------------------

     public function get_clients()
    {
        $this->db->select(' DISTINCT(A.client_id), SUM(C.invoice_total) AS total');
        $this->db->from('ip_clients As A');
        $this->db->join('ip_invoices AS B', 'A.client_id = B.client_id');
        $this->db->join('ip_invoice_amounts AS C', 'B.invoice_id = C.invoice_id'); 
        $this->db->where('B.invoice_status_id >', 1 );  
        $this->db->group_by('A.client_id'); 
        $this->db->order_by('total', 'DESC');
        $this->db->limit(5);  
        $query =$this->db->get();
        $result = $query->result_array(); 
        return $result; 
    }

    public function top_clients($client_id)
{
    $this->db->select('DISTINCT(A.client_name),A.client_id, COUNT(B.client_id) AS Numofin ,B.invoice_status_id ,SUM(C.invoice_total) AS total');
    $this->db->from('ip_clients As A');
    $this->db->join('ip_invoices AS B', 'A.client_id = B.client_id');
    $this->db->join('ip_invoice_amounts AS C', 'B.invoice_id = C.invoice_id');
    $array = array('A.client_id' => $client_id[0] , 'B.invoice_status_id >' => 1);
    $this->db->where($array); 
    return  $this->db->get()->result_array();
}

public function client($client_id)
{
    $this->db->select('DISTINCT(A.client_name),A.client_id, COUNT(B.client_id) AS Numofin , SUM(C.invoice_total) AS total');
    $this->db->from('ip_clients As A');
    $this->db->join('ip_invoices AS B', 'A.client_id = B.client_id');
    $this->db->join('ip_invoice_amounts AS C', 'B.invoice_id = C.invoice_id');
    $array = array('A.client_id' => $client_id[1] , 'B.invoice_status_id >' => 1);
    $this->db->where($array);
    return  $this->db->get()->result();
}
public function top($client_id)
{
    $this->db->select('DISTINCT(A.client_name),A.client_id, COUNT(B.client_id) AS Numofin , SUM(C.invoice_total) AS total');
    $this->db->from('ip_clients As A');
    $this->db->join('ip_invoices AS B', 'A.client_id = B.client_id');
    $this->db->join('ip_invoice_amounts AS C', 'B.invoice_id = C.invoice_id');
    $array = array('A.client_id' => $client_id[2] , 'B.invoice_status_id >' => 1);
    $this->db->where($array);   
    return  $this->db->get()->result();
}

public function clients($client_id)
{
    $this->db->select('DISTINCT(A.client_name),A.client_id, COUNT(B.client_id) AS Numofin , SUM(C.invoice_total) AS total');
    $this->db->from('ip_clients As A');
    $this->db->join('ip_invoices AS B', 'A.client_id = B.client_id');
    $this->db->join('ip_invoice_amounts AS C', 'B.invoice_id = C.invoice_id');
    $array = array('A.client_id' => $client_id[3] , 'B.invoice_status_id >' => 1);
    $this->db->where($array);   
    return  $this->db->get()->result();
}

public function top_client($client_id)
{
    $this->db->select('DISTINCT(A.client_name),A.client_id, COUNT(B.client_id) AS Numofin , SUM(C.invoice_total) AS total');
    $this->db->from('ip_clients As A');
    $this->db->join('ip_invoices AS B', 'A.client_id = B.client_id');
    $this->db->join('ip_invoice_amounts AS C', 'B.invoice_id = C.invoice_id');
    $array = array('A.client_id' => $client_id[4] , 'B.invoice_status_id >' => 1);
    $this->db->where($array);   
    return  $this->db->get()->result();
}

// ----------------SUM TOTAL INVOICE----------------

public function total_invoice()
{
    $this->db->select('SUM(A.invoice_total) AS total, AVG(A.invoice_total) as average');
    $this->db->from('ip_invoice_amounts AS A');
    $this->db->join('ip_invoices AS B', 'A.invoice_id = B.invoice_id');
    $this->db->where('B.invoice_status_id >', 1 );  
    return  $this->db->get()->result();
}

// -----------------COUNT UNPAID INVOICES----------------------

public function unpaid_invoice()
{
    $this->db->select('COUNT(A.invoice_total) AS total_unpaid');
    $this->db->from('ip_invoice_amounts AS A');
    $this->db->join('ip_invoices AS B', 'A.invoice_id = B.invoice_id');
    $array = array('A.invoice_total >' => 0 , 'B.invoice_status_id >' => 1);
    $this->db->where($array);   
    return  $this->db->get()->result();
}

// ------------- Latest Activity---------------

public function recent_activity()
{
    $this->db->select('DISTINCT(client_name),client_date_created');
    $this->db->from('ip_clients');
    $this->db->order_by('client_date_created DESC ');
    $this->db->limit(8); 
    return  $this->db->get()->result_array();  
}


public function recent_client_modified(){
    $this->db->select('DISTINCT(client_name),client_date_modified,client_date_created');
    $this->db->from('ip_clients');
    $this->db->order_by('client_date_modified DESC ');
    $this->db->limit(8); 
    return  $this->db->get()->result_array();  
}


public function recent_invoice_modified(){
    $this->db->select('DISTINCT(A.invoice_number),A.invoice_date_modified,A.invoice_date_created,B.client_name');
    $this->db->from('ip_invoices AS A');
    $this->db->join('ip_clients As B', 'A.client_id = B.client_id');
    $this->db->order_by('A.invoice_date_modified DESC ');
    $this->db->limit(8); 
    return  $this->db->get()->result_array();  
}


public function recent_quote_modified(){
    $this->db->select('DISTINCT(A.quote_number),A.quote_date_modified,A.quote_date_created,B.client_name');
    $this->db->from('ip_quotes AS A');
    $this->db->join('ip_clients As B', 'B.client_id = A.client_id');
    $this->db->order_by('A.quote_date_modified DESC ');
    $this->db->limit(8); 
    return  $this->db->get()->result_array();  
}

public function recent_payment_created(){
    $this->db->select('A.payment_amount, A.payment_date, C.client_name,B.invoice_number');
    $this->db->from('ip_payments A');
    $this->db->join('ip_invoices AS B', 'A.invoice_id = B.invoice_id');
    $this->db->join('ip_clients As C', 'C.client_id = B.client_id');
    $this->db->order_by('payment_date DESC');
    $this->db->limit(8); 
    return  $this->db->get()->result_array();  
}

// ------------- Billing chart--------------

public function current_status($current_year,$next_year)
{
    $query = $this->db->query("SELECT months.month_number, COALESCE((B.all_total), 0) AS all_total
FROM (
    SELECT 1 AS month_number UNION SELECT 2 UNION SELECT 3 UNION
    SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION
    SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION
    SELECT 12
) AS months
LEFT JOIN (
    SELECT
        MONTH(A.invoice_date_created) AS month_number,
        SUM(B.invoice_total) AS all_total
    FROM
        ip_invoices AS A
    INNER JOIN ip_invoice_amounts AS B ON A.invoice_id = B.invoice_id
    WHERE
        A.invoice_date_created BETWEEN '$current_year' AND '$next_year' AND A.invoice_status_id > 1
        group by month(A.invoice_date_created)
) AS B ON months.month_number = B.month_number
GROUP BY months.month_number
ORDER BY months.month_number;
");
    $query = $query->result_array();
    return $query;
}

public function last_status($last_year,$cn_year)
{
    $query = $this->db->query("SELECT months.month_number, COALESCE((B.all_total), 0) AS all_total
FROM (
    SELECT 1 AS month_number UNION SELECT 2 UNION SELECT 3 UNION
    SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION
    SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION
    SELECT 12
) AS months
LEFT JOIN (
    SELECT
        MONTH(A.invoice_date_created) AS month_number,
        SUM(B.invoice_total) AS all_total
    FROM
        ip_invoices AS A
    INNER JOIN ip_invoice_amounts AS B ON A.invoice_id = B.invoice_id
    WHERE
        A.invoice_date_created BETWEEN '$last_year' AND '$cn_year' AND A.invoice_status_id > 1
        group by month(A.invoice_date_created)
) AS B ON months.month_number = B.month_number
GROUP BY months.month_number
ORDER BY months.month_number;
");
    $query = $query->result_array();
    return $query;
}

// ---------------------- Billing Overview -------------------------

public function current_billing($current_year,$next_year)
{
    $query = $this->db->query("SELECT SUM(invoice_total) AS billing_all_total
    FROM ip_invoice_amounts INNER JOIN ip_invoices ON ip_invoice_amounts.invoice_id = ip_invoices.invoice_id
    WHERE invoice_date_created BETWEEN '$current_year' AND '$next_year' AND (ip_invoices.invoice_status_id > 1);"); 
    $query = $query->result_array();
    return $query;
}

public function current_billing_paid($current_year,$next_year)
{
    $query = $this->db->query(" SELECT months.month_number, COALESCE((B.total_paid), 0) AS total_paid
    FROM (
        SELECT 1 AS month_number UNION SELECT 2 UNION SELECT 3 UNION
        SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7 UNION
        SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION
        SELECT 12
    ) AS months
    LEFT JOIN (
        SELECT 
            MONTH(A.invoice_date_created) AS month_number,
            SUM(B.invoice_paid) AS total_paid
        FROM 
            ip_invoices AS A 
        INNER JOIN ip_invoice_amounts AS B ON A.invoice_id = B.invoice_id
        WHERE 
            A.invoice_date_created BETWEEN '$current_year' AND '$next_year' AND A.invoice_status_id > 1 AND (B.invoice_id = A.invoice_id )
            group by month(A.invoice_date_created)
            
    ) AS B ON months.month_number = B.month_number

    GROUP BY months.month_number
    ORDER BY months.month_number; 
        ");
        $query = $query->result_array();
        return $query;
}

// ---------------- Quote Reports -----------------
public function quote_report()
{
    $query = $this->db->query("SELECT SUM(quote_total) AS all_total, MONTHNAME(quote_date_created) AS month, YEAR(quote_date_created) AS Y
    FROM ip_quote_amounts INNER JOIN ip_quotes ON ip_quote_amounts.quote_id = ip_quotes.quote_id 
    WHERE quote_date_created > DATE_SUB(now(), INTERVAL 6 MONTH)
    group by Y, month
    order by year(quote_date_created),month(quote_date_created);");
    $query = $query->result_array();
    return $query;
}

// ------------------TOTAL CLIENT ---------------------
public function no_of_client()
{
    $query = $this->db->query(" SELECT COUNT(client_id) AS id_count FROM ip_clients WHERE year(client_date_created)=year(now()) AND month(client_date_created)=month(now())");
    $query = $query->result_array();
    return $query;
}

public function total_client()
{
    $query = $this->db->query(" SELECT COUNT(client_id) AS lm_count FROM ip_clients");
    $query = $query->result_array();
    return $query;
}

// -------------------- TOTAL INVOICE----------------------

public function no_invo_amt()
{
    $query = $this->db->query(" SELECT SUM(invoice_total) AS in_total FROM ip_invoice_amounts  INNER JOIN ip_invoices ON ip_invoice_amounts.invoice_id = ip_invoices.invoice_id WHERE year(invoice_date_created)=year(now()) AND month(invoice_date_created)=month(now())");
    $query = $query->result_array();
    return $query;
}

public function lm_invo_amt()
{
    $query = $this->db->query(" SELECT SUM(invoice_total) AS lm_invoice FROM ip_invoice_amounts  INNER JOIN ip_invoices ON ip_invoice_amounts.invoice_id = ip_invoices.invoice_id WHERE year(invoice_date_created)=year(now()) AND month(invoice_date_created)=month(now())-1");
    $query = $query->result_array();
    return $query;
}

public function last_month_invo_amt($pay_start, $pay_end)
{
    $query = $this->db->query(" SELECT SUM(invoice_total) AS lm_invoice FROM ip_invoice_amounts  INNER JOIN ip_invoices ON ip_invoice_amounts.invoice_id = ip_invoices.invoice_id WHERE invoice_date_created BETWEEN '$pay_start' AND '$pay_end'");
    $query = $query->result_array();
    return $query;
}

// -------------------- TOTAL QUOTES-----------------------
public function no_quote_amt()
{
    $query = $this->db->query(" SELECT SUM(quote_total) AS quote_total FROM ip_quote_amounts INNER JOIN ip_quotes ON ip_quote_amounts.quote_id = ip_quotes.quote_id WHERE year(quote_date_created)=year(now()) AND month(quote_date_created)=month(now())");
    $query = $query->result_array();
    return $query;
}

public function lm_quote_amt()
{
    $query = $this->db->query(" SELECT SUM(quote_total) AS lm_quote FROM ip_quote_amounts INNER JOIN ip_quotes ON ip_quote_amounts.quote_id = ip_quotes.quote_id WHERE year(quote_date_created)=year(now()) AND month(quote_date_created)=month(now())-1");
    $query = $query->result_array();
    return $query;
}

public function last_month_quote_amt($pay_start, $pay_end)
{
    $query = $this->db->query(" SELECT SUM(quote_total) AS lm_quote FROM ip_quote_amounts INNER JOIN ip_quotes ON ip_quote_amounts.quote_id = ip_quotes.quote_id WHERE quote_date_created BETWEEN '$pay_start' AND '$pay_end'");
    $query = $query->result_array();
    return $query;
}

// ------------------ TOTAL PAYMENT------------------------

public function no_pay_amt()
{
    $query = $this->db->query(" SELECT SUM(payment_amount) AS pay_total FROM ip_payments WHERE year(payment_date)=year(now()) AND month(payment_date)=month(now())");
    $query = $query->result_array();
    return $query;
}

public function lm_pay_amt()
{
    $query = $this->db->query(" SELECT SUM(payment_amount) AS lm_pay FROM ip_payments WHERE year(payment_date)=year(now()) AND month(payment_date)=month(now())-1");
    $query = $query->result_array();
    return $query;
}

public function last_month_pay_amt($pay_start, $pay_end)
{
    $query = $this->db->query(" SELECT SUM(payment_amount) AS lm_pay FROM ip_payments 
        WHERE payment_date BETWEEN '$pay_start' AND '$pay_end'
        ");
        
    $query = $query->result_array();
    return $query;
}


// --------------------------------- Category --------------------------------------

public function type_of_category()
{
    $query = $this->db->query(" SELECT SUM(item_price) as total_cat ,item_category
        FROM ip_invoice_items
        WHERE item_category != ''
        group by item_category");
    $query = $query->result_array();
    return $query;
}


public function total_category()
{
    $query = $this->db->query(" SELECT SUM(item_price) as total_invoice
        FROM ip_invoice_items
        WHERE item_category = '' ");
    $query = $query->result_array();
    return $query;
}

}