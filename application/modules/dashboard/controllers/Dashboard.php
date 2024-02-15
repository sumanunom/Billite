
<?php error_reporting (E_ALL ^ E_NOTICE); ?>


<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Billite
 *
 * @author      Axiom Consulting
 * @copyright   Copyright (c) 2022 Billite.in
 * @license     https://billite.in/license.txt
 */

/**
 * Class Dashboard
 */

class Dashboard extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('Dashboard_model');
        $this->load->model('New_model');
        
    } 

    public function index()
    {
        $this->load->model('Dashboard_model');

    // ------------ Type of category -------------
      $ty_of_cat = $this->Dashboard_model->type_of_category();

        $type_name = array();  
        foreach ($ty_of_cat as $row)
        {    
          $type_name[] = $row['item_category'];           
        }
        $t_r = $type_name;
        $cat_other = ["Others"];
        $type_report = array_merge($t_r,$cat_other);

        $type_total = array();  
        foreach ($ty_of_cat as $row)
        {    
          $type_total[] = $row['total_cat'];           
        }

        $arrAssocSum = array_sum($type_total);

        $other_cat = $this->Dashboard_model->total_category();
        foreach ($other_cat as $row)
        {    
          $o_cat  = $row['total_invoice'];           
        }
        $other = $o_cat;

        $other_val = array();
        $other_val[] = $other - $arrAssocSum;
 
        $c_t = $type_total;
       
        $all_value = array_merge($c_t ,$other_val);

        $total_category = $all_value ;

        // -------------------------------

        $client =  $this->Dashboard_model->get_clients();
        
        $client_id = array();  
        foreach ($client as $row)
        {    
         $client_id[] = $row['client_id'];           
        }

        $client_tops = $this->Dashboard_model->top_clients($client_id);
        $client_tops1 = $this->Dashboard_model->client($client_id);
        $client_tops2 = $this->Dashboard_model->top($client_id);
        $client_tops3 = $this->Dashboard_model->clients($client_id);
        $client_tops4 = $this->Dashboard_model->top_client($client_id);  

        // ------------- Current year invoice status-------------

        $next_year = date("Y")+1;
        $current_year = date("Y");
        $previous_year = date("Y")-1;

        $month = date('m');

        if($month <= 3)
        {
        
           $pre_year = $previous_year.'-'.'04'.'-01';
           $current_start = $pre_year;

           $curr_year = $current_year.'-'.'03'.'-31';
           $current_end = $curr_year;
          
        } 
            elseif($month>3)
        {
            $current_start = $current_year.'-'.'04'.'-01';
            $current_end = $next_year.'-'.'03'.'-31';
        }

        $current_year_start = $current_start ;
        $current_year_end = $current_end;

        $current =  $this->Dashboard_model->current_status($current_year_start, $current_year_end);
 
        $status = array();  
        foreach ($current as $row)
        {    
          $status[] = $row['all_total'];           
        }
        $billing_status = $status;
        
        $array = $status;
        
        // Save first 3 values to a separate array
        $first_three = array_splice($array, 0, 3);

        // Move the 4th value to the beginning of the array
        $fourth_value = array_splice($array, 3, 0);
        $array = array_merge($fourth_value, $array);

        // Add the saved first 3 values to the end of the array
        $array = array_merge($array, $first_three);

        $billing_status = $array;

        // ------------- Last year invoice status-------------
        $previous_year = date("Y")-2;
        $last_year = date("Y")-1;
        $current_year = date("Y");

        if($month <= 3)
        {
        
           $p_year = $previous_year.'-'.'04'.'-01';
           $last_start = $p_year;

           $c_year = $last_year.'-'.'03'.'-31';
           $last_end = $c_year;
          
        } 
            elseif($month>3)
        {
            $last_start = $last_year.'-'.'04'.'-01';
            $last_end = $current_year.'-'.'03'.'-31';
        }
        
        $last_year_start = $last_start;
        $last_year_end = $last_end;

        $last = $this->Dashboard_model->last_status($last_year_start, $last_year_end);
        
        $last_status = array();  
        foreach ($last as $row)
        {    
          $last_status[] = $row['all_total'];           
        }
        $last_billing_status = $last_status;


        // ---------------- BIlling overview ------------------
        $total_billing = $this->Dashboard_model->current_billing($current_year_start, $current_year_end);
        $current_paid = $this->Dashboard_model->current_billing_paid($current_year_start, $current_year_end);
        
        $c_paid = array();  
        foreach ($current_paid as $cp)
        {    
          $c_paid[] = $cp['total_paid'];           
        }
        $current_billing_paid = $c_paid;
        
        $arr = $c_paid;

         // Save first 3 values to a separate array
        $first_three = array_splice($arr, 0, 3);

        // Move the 4th value to the beginning of the array
        $fourth_value = array_splice($array, 3, 0);
        $arr = array_merge($fourth_value, $arr);

        // Add the saved first 3 values to the end of the array
        $arr = array_merge($arr, $first_three);

        $current_billing_paid = $arr;
        
        $c_paid = array_sum($c_paid);

        // ------------------- Quote Report -----------------------

        $quote_report =  $this->Dashboard_model->quote_report();

         $quote_status = array();  
        foreach ($quote_report as $row)
        {    
          $quote_status[] = $row['all_total'];           
        }
        $quote_report_status = $quote_status;

        $quote_month = array();  
        foreach ($quote_report as $row)
        {    
          $quote_month[] = $row['month'];           
        }
        $quote_month_status = $quote_month;

        $rec_act =  $this->Dashboard_model->recent_client_modified();
        
        foreach ($rec_act  as $row) {
            $c_date[] = $row['client_date_modified'];   
            $c_name[] = $row['client_name'];
            $create_date[] = $row['client_date_created'];    
        }

        $rec_quote  =  $this->Dashboard_model->recent_quote_modified();
        foreach ($rec_quote  as $row) {
            $q_date[] = $row['quote_date_modified'];   
            $q_name[] = $row['client_name']; 
            $quote[]  = $row['quote_number'];    
            $quote_create[] = $row['quote_date_created'];
        }

        $rec_invo = $this->Dashboard_model->recent_invoice_modified();
        foreach ($rec_invo as $row)
        {    
            $i_date[]  = $row['invoice_date_modified'];      
            $i_name[]  = $row['client_name'];   
            $invoice[] = $row['invoice_number'];
            $invo_create[] = $row['invoice_date_created'];            
        }

        $rec_pay =  $this->Dashboard_model->recent_payment_created();
        foreach ($rec_pay as $row)
        {    
            $p_date[] = $row['payment_date']; 
            $p_name[] = $row['client_name'];   
            $pay[]    = $row['payment_amount'];   
            $invo_pay[] = $row['invoice_number'];        
        }       
            
        $array = Array (

            Array (
                "name" => $c_name[0],                 
                "datetime" => $c_date[0],
                "client_create" => $create_date[0],
            ),
            Array (
                "name" => $c_name[1],
                "datetime" => $c_date[1],
                "client_create" => $create_date[1],
            ),
            Array (
                "name" => $c_name[2],
                "datetime" => $c_date[2],
                "client_create" => $create_date[2],
            ),
            Array (
                "name" => $c_name[3],
                "datetime" => $c_date[3],
                "client_create" => $create_date[3],
            ),
            Array (
                "name" => $c_name[4],
                "datetime" => $c_date[4],
                "client_create" => $create_date[4],
            ),
            Array (
                "name" => $c_name[5],
                "datetime" => $c_date[5],
                "client_create" => $create_date[5],
            ),
            Array (
                "name" => $c_name[6],
                "datetime" => $c_date[6],
                "client_create" => $create_date[6],
            ),
            Array (
                "name" => $c_name[7],
                "datetime" => $c_date[7],
                "client_create" => $create_date[7],
            ),
            Array (
                "name" =>$q_name[0],
                "datetime" => $q_date[0],
                "quote" => $quote[0],  
                "quote_create" => $quote_create[0],
            ),
            Array (
                "name" => $q_name[1],
                "datetime" => $q_date[1],
                "quote" => $quote[1],  
                "quote_create" => $quote_create[1],
            ),
            Array (
                "name" => $q_name[2],
                "datetime" => $q_date[2],
                "quote" => $quote[2], 
                "quote_create" => $quote_create[2], 
            ),
            Array (
                "name" => $q_name[3],
                "datetime" => $q_date[3],
                "quote" => $quote[3],  
                "quote_create" => $quote_create[3],
            ),
            Array (
                "name" => $q_name[4],
                "datetime" => $q_date[4],
                "quote" => $quote[4],  
                "quote_create" => $quote_create[4],
            ),
            Array (
                "name" => $q_name[5],
                "datetime" => $q_date[5],
                "quote" => $quote[5], 
                "quote_create" => $quote_create[5], 
            ),
            Array (
                "name" => $q_name[6],
                "datetime" => $q_date[6],
                "quote" => $quote[6], 
                "quote_create" => $quote_create[6], 
            ),
            Array (
                "name" => $q_name[7],
                "datetime" => $q_date[7],
                "quote" => $quote[7],
                "quote_create" => $quote_create[7],  
            ),
            Array (
                "name" =>$i_name[0],
                "datetime" => $i_date[0],
                "invoice" => $invoice[0], 
                "invoice_create" => $invo_create[0],
            ),
            Array (
                "name" => $i_name[1],
                "datetime" => $i_date[1],
                "invoice" => $invoice[1],  
                "invoice_create" => $invo_create[1],
            ),
            Array (
                "name" => $i_name[2],
                "datetime" => $i_date[2],
                "invoice" => $invoice[2],  
                "invoice_create" => $invo_create[2],
            ),
            Array (
                "name" => $i_name[3],
                "datetime" => $i_date[3],
                "invoice" => $invoice[3],  
                "invoice_create" => $invo_create[3],
            ),
            Array (
                "name" => $i_name[4],
                "datetime" => $i_date[4],
                "invoice" => $invoice[4],  
                "invoice_create" => $invo_create[4],
            ),
            Array (
                "name" => $i_name[5],
                "datetime" => $i_date[5],
                "invoice" => $invoice[5],  
                "invoice_create" => $invo_create[5],
            ),
            Array (
                "name" => $i_name[6],
                "datetime" => $i_date[6],
                "invoice" => $invoice[6],  
                "invoice_create" => $invo_create[6],
            ),
            Array (
                "name" => $i_name[7],
                "datetime" => $i_date[7],
                "invoice" => $invoice[7],  
                "invoice_create" => $invo_create[7],
            ),
            Array (
                "name" =>$p_name[0],
                "datetime" => $p_date[0],
                "payment" => $pay[0], 
                "invoice_pay" =>$invo_pay[0], 
            ),
            Array (
                "name" => $p_name[1],
                "datetime" => $p_date[1],
                "payment" => $pay[1],  
                "invoice_pay" =>$invo_pay[1], 
            ),
            Array (
                "name" => $p_name[2],
                "datetime" => $p_date[2],
                "payment" => $pay[2],  
                "invoice_pay" =>$invo_pay[2], 
            ),
            Array (
                "name" => $p_name[3],
                "datetime" => $p_date[3],
                "payment" => $pay[3], 
                "invoice_pay" =>$invo_pay[3],  
            ),
            Array (
                "name" => $p_name[4],
                "datetime" => $p_date[4],
                "payment" => $pay[4], 
                "invoice_pay" =>$invo_pay[4],  
            ),
            Array (
                "name" => $p_name[5],
                "datetime" => $p_date[5],
                "payment" => $pay[5],
                "invoice_pay" =>$invo_pay[5],   
            ),
            Array (
                "name" => $p_name[6],
                "datetime" => $p_date[6],
                "payment" => $pay[6],  
                "invoice_pay" =>$invo_pay[6], 
            ),
            Array (
                "name" => $p_name[7],
                "datetime" => $p_date[7],
                "payment" => $pay[7], 
                "invoice_pay" =>$invo_pay[7],  
            )
            
        );

         usort($array , function ($element1, $element2) {
            $datetime1 = strtotime($element1['datetime']);
            $datetime2 = strtotime($element2['datetime']);
            return $datetime2 - $datetime1;
        });

         // ---------------------------- Last Month Payment, Quote, Invoice ------------------------------

        $previous_year = date("Y")-1;

        $month = date('m');

        if($month < 2)
        {
            $pay_start = $previous_year.'-'.'12'.'-01';
            $pay_end = $previous_year.'-'.'12'.'-31';
            $last_month_payment = $this->Dashboard_model->last_month_pay_amt($pay_start, $pay_end);
            $last_month_quote = $this->Dashboard_model->last_month_quote_amt($pay_start, $pay_end);
            $last_month_invoice = $this->Dashboard_model->last_month_invo_amt($pay_start, $pay_end);
        }else{
            $last_month_payment = $this->Dashboard_model->lm_pay_amt();
            $last_month_quote = $this->Dashboard_model->lm_quote_amt();
            $last_month_invoice = $this->Dashboard_model->lm_invo_amt();
        }

        $this->layout->set(
            array(
                'todo' => $this->Dashboard_model->add(), 

                'c_name' => $this->Dashboard_model->get_client_name(),
                'i_num' => $this->Dashboard_model->get_invoice_num(),
                'q_num' => $this->Dashboard_model->get_quote_num(),

                'invo' => $this->Dashboard_model->recent_invoice(),
                'unpaid_invoice' => $this->Dashboard_model->unpaid_invoice(),
                'quote' => $this->Dashboard_model->recent_quotes(),
                'top_clients' => $this->Dashboard_model->top_clients($client_id),
                'client' => $this->Dashboard_model->client($client_id),
                'top' => $this->Dashboard_model->top($client_id),
                'clients' => $this->Dashboard_model->clients($client_id),
                'top_client' => $this->Dashboard_model->top_client($client_id),

                'total_invoice' => $this->Dashboard_model->total_invoice(),
                'cm_total_client' => $this->Dashboard_model->no_of_client(),
                'total_client' => $this->Dashboard_model->total_client(),

                'current_month_invoice' => $this->Dashboard_model->no_invo_amt(),
                'last_month_invoice' => $last_month_invoice,
                'current_month_quote' => $this->Dashboard_model->no_quote_amt(),
                'last_month_quote' => $last_month_quote,
                'current_month_pay' => $this->Dashboard_model->no_pay_amt(),
                'last_month_pay' => $last_month_payment,

                'total_billing_overview' => $total_billing,
                'this_y_paid' => $c_paid,
                'total_category' => $total_category,
                'all_category_name' => $type_report,
                'recent_activity' => $array,
                'quote_report' => $quote_report_status,
                'quote_month' => $quote_month_status,

                'this_year_paid' => $current_billing_paid,
                'this_year_billing' => $billing_status,
                'last_year_status' => $last_billing_status,
            )
        ); 

        $this->load->library('form_validation');
       // $this->form_validation->set_rules('date','date','required');
        $this->form_validation->set_rules('value','value','required');
       // $this->form_validation->set_rules('status','status','required');
        
        if($this->form_validation->run())     
        {

       $params = array(
            // 'id' => $this->input->post('id'),  
           // 'date'  => $this->input->post('date'),  
            'value'   => $this->input->post('value'),  
            'status'  =>$this->input->post('status'),
            'user_id' =>$this->input->post('user_id'),
                
            );
           
        $todo = $this->Dashboard_model->add_todo($params);
            redirect('dashboard'); 
}
else{

        $this->layout->buffer('content', 'dashboard/new_index');
        $this->layout->render();
    }
}

public function done($id)
{


        $this->load->model('Dashboard_model');

        $this->layout->set(
            array(
                'todo' => $this->Dashboard_model->add(), 

            )
        ); 


        $this->load->library('form_validation');

        $this->form_validation->set_rules('status','status','required');
        
        
        if($this->form_validation->run())     
        {

       $params = array( 
            'status'   =>$this->input->post('status'),
                
            );
       
       $todo = $this->Dashboard_model->update_status($id,$params);
       redirect('dashboard'); 
}
else
    {

        $this->layout->buffer('content', 'dashboard/new_index');
        $this->layout->render();
    }

}

 public function delete($id)
    {
        $this->New_model->delete($id);
        redirect('dashboard');
    }

}