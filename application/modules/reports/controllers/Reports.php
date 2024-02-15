<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Billite
 *
 * @author      Axiom Consulting
 * @copyright   Copyright (c) 2022 Billite.in
 * @license     https://billite.in/license.txt
 * @link        https://billite.in
 */

/**
 * Class Reports
 */
class Reports extends Admin_Controller
{
    /**
     * Reports constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('mdl_reports');
        $this->load->model('New_model');
    }

    public function sales_by_client()
    {

    $dt = date('Y/m/d H:i:s');
        $start_date = date("Y/m/1", strtotime($dt));
        $end_date = date("Y/m/t", strtotime($dt));
        $sale_results = $this->mdl_reports->sales_this_month($start_date, $end_date);
        $sub =  $this->mdl_reports->invo_sub_total();

        // ------------- Financial Year -------------

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

           $cur_start = '01'.'/'.'04'.'/'.$previous_year;
           $cur_end = '31'.'/'.'03'.'/'.$current_year;
          
        } 
            elseif($month>3)
        {
            $current_start = $current_year.'-'.'04'.'-01';
            $current_end = $next_year.'-'.'03'.'-31';

            $cur_start = '01'.'/'.'04'.'/'.$current_year;
           $cur_end = '31'.'/'.'03'.'/'.$next_year;
        }

        $current_year_start = $current_start ;
        $current_year_end = $current_end;

        $financial_this_year = $this->mdl_reports->financial_sales_by_client($current_year_start, $current_year_end);
                
            $this->layout->set(
           array(
            'fin_from' => $cur_start,
            'fin_to' =>  $cur_end,
            'financial_this_year' => $financial_this_year,

            'sale_results' => $sale_results,
            'sales_this_year'=>  $sub,
             'sales_custom' => $custom_year,
           ));

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content', 'reports/new_sales_by_client',$data)->render();

    }


    public function payment_history()
    {

        $dt = date('Y/m/d H:i:s');
        $start_date = date("Y/m/1", strtotime($dt));
        $end_date = date("Y/m/t", strtotime($dt));
        $sale_results = $this->mdl_reports->payment_history_month($start_date, $end_date);

        $st_date = date("Y/1/1");
        $e = date("Y/12/31");

        $pay_year = $this->mdl_reports->payment_history_year($s_date, $e_date);

         // ------------- Financial Year -------------

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

           $cur_start = '01'.'/'.'04'.'/'.$previous_year;
           $cur_end = '31'.'/'.'03'.'/'.$current_year;
          
        } 
            elseif($month>3)
        {
            $current_start = $current_year.'-'.'04'.'-01';
            $current_end = $next_year.'-'.'03'.'-31';

            $cur_start = '01'.'/'.'04'.'/'.$current_year;
           $cur_end = '31'.'/'.'03'.'/'.$next_year;
        }

        $current_year_start = $current_start ;
        $current_year_end = $current_end;

        $financial_this_year = $this->mdl_reports->financial_payment_year($current_year_start, $current_year_end);

            $this->layout->set(
           array(

            'sale_results' => $sale_results,
            'sales_this_year'=>  $pay_year,
            'sales_custom' => $custom_year,
            'fin_from' => $cur_start,
            'fin_to' =>  $cur_end,
            'financial_this_year' => $financial_this_year,
           ));

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content','reports/payment_history_index',$data)->render();
    }


    public function invoice_aging()
    {

        $invo_aging = $this->mdl_reports->invo_aging();

          $this->layout->set(
           array(

            'sale_results' => $invo_aging,
           ));

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content', 'reports/new_invoice_aging',$data)->render();
    }

    public function sales_by_year()
    {
    
        $sale_results = $this->mdl_reports->sales_date_month();
        $sub =  $this->mdl_reports->sales_date_year();
                
        // ------------- Financial Year -------------

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

           $cur_start = '01'.'/'.'04'.'/'.$previous_year;
           $cur_end = '31'.'/'.'03'.'/'.$current_year;
          
        } 
            elseif($month>3)
        {
            $current_start = $current_year.'-'.'04'.'-01';
            $current_end = $next_year.'-'.'03'.'-31';

            $cur_start = '01'.'/'.'04'.'/'.$current_year;
            $cur_end = '31'.'/'.'03'.'/'.$next_year;
        }


        $current_year_start = $current_start ;
        $current_year_end = $current_end;

        $financial_this_year = $this->mdl_reports->financial_sales_by_date($current_year_start, $current_year_end);
                
            $this->layout->set(
           array(
            'fin_from' => $cur_start,
            'fin_to' =>  $cur_end,
            'financial_this_year' => $financial_this_year,

            'sale_results' => $sale_results,
            'sales_this_year'=>  $sub,
             'sales_custom' => $custom_year,
           ));

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content', 'reports/new_sales_by_date',$data)->render();
    }


        public function tax_summary()
    {

         $user_id = $this->session->userdata('user_id'); 

        $user_state = $this->mdl_reports->user_state($user_id);

        $tax_month = $this->mdl_reports->tax_summary_month();
        $tax_year =  $this->mdl_reports->tax_summary_year();
                
        // ------------- Financial Year -------------

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

           $cur_start = '01'.'/'.'04'.'/'.$previous_year;
           $cur_end = '31'.'/'.'03'.'/'.$current_year;
          
        } 
            elseif($month>3)
        {
            $current_start = $current_year.'-'.'04'.'-01';
            $current_end = $next_year.'-'.'03'.'-31';

            $cur_start = '01'.'/'.'04'.'/'.$current_year;
            $cur_end = '31'.'/'.'03'.'/'.$next_year;
        }

        $current_year_start = $current_start ;
        $current_year_end = $current_end;

        $financial_this_year = $this->mdl_reports->financial_tax_summary($current_year_start, $current_year_end);
                
            $this->layout->set(
           array(
            'fin_from' => $cur_start,
            'fin_to' =>  $cur_end,
            'financial_this_year' => $financial_this_year,

            'user_state' => $user_state,
            'sale_results' => $tax_month,
            'sales_this_year'=>  $tax_year,
             'sales_custom' => $custom_year,
           ));

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content', 'reports/tax_summary',$data)->render();
    }

        public function sale_custom_year()
    {

        if ($this->input->post('btn_submit')) {

            if($this->input->post('from_date') !='' && $this->input->post('to_date') != ''){
            $data = array(
                'results' => $this->mdl_reports->custom_year($this->input->post('from_date'), $this->input->post('to_date')),
                'from_date' => $this->input->post('from_date'),
                'to_date' => $this->input->post('to_date'),
            );
            $custom_year =  $this->mdl_reports->custom_year($this->input->post('from_date'), $this->input->post('to_date'));

            $cus_from = $this->input->post('from_date');
            $cus_to = $this->input->post('to_date');
             $this->layout->set(
           array(
             'sales_custom' => $custom_year,
             'cus_from' => $cus_from,
             'cus_to' => $cus_to,
           ));
        }
    }

           $this->layout->set(
           array(
             'sales_custom' => $custom_year,
           ));

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content', 'reports/sale_custom_year',$data)->render();
    }

        public function sale_date_custom_year()
    {
        if($this->input->post('from_date') !='' && $this->input->post('to_date') != ''){
          if ($this->input->post('btn_submit')) {
            $data = array(
                'results' => $this->mdl_reports->sale_custom_year($this->input->post('from_date'), $this->input->post('to_date')),
                'from_date' => $this->input->post('from_date'),
                'to_date' => $this->input->post('to_date'),
            );
            $custom_year =  $this->mdl_reports->sale_custom_year($this->input->post('from_date'), $this->input->post('to_date'));

            $cus_from = $this->input->post('from_date');
            $cus_to = $this->input->post('to_date');
             $this->layout->set(
           array(
             'sales_custom' => $custom_year,
             'cus_from' => $cus_from,
             'cus_to' => $cus_to,
           ));
        }
}
            $this->layout->set(
           array(
             'sales_custom' => $custom_year,
           ));

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content', 'reports/sale_date_custom_year',$data)->render();
    }

        public function tax_custom_year()
    {

         if ($this->input->post('btn_submit')) {

         if($this->input->post('from_date') !='' && $this->input->post('to_date') != ''){

            $data = array(
                'results' => $this->mdl_reports->tax_summary($this->input->post('from_date'), $this->input->post('to_date')),
                'from_date' => $this->input->post('from_date'),
                'to_date' => $this->input->post('to_date'),
            );
            $custom_year =  $this->mdl_reports->tax_summary($this->input->post('from_date'), $this->input->post('to_date'));

            $cus_from = $this->input->post('from_date');
            $cus_to = $this->input->post('to_date');
             $this->layout->set(
           array(
             'sales_custom' => $custom_year,
             'cus_from' => $cus_from,
             'cus_to' => $cus_to,
           ));
        }
}
         $user_id = $this->session->userdata('user_id'); 

        $user_state = $this->mdl_reports->user_state($user_id);

            $this->layout->set(
           array(
            'user_state' => $user_state,
             'sales_custom' => $custom_year,
           ));

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content', 'reports/tax_custom_year',$data)->render();
    }


        public function pay_custom_year()
    {

         if ($this->input->post('btn_submit')) {


            $data = array(
                'results' => $this->mdl_reports->payment_history($this->input->post('from_date'), $this->input->post('to_date')),
                'from_date' => $this->input->post('from_date'),
                'to_date' => $this->input->post('to_date'),
            );

             $custom_year =  $this->mdl_reports->payment_history($this->input->post('from_date'), $this->input->post('to_date'));

            $pay_from = $this->input->post('from_date');
            $pay_to = $this->input->post('to_date');

             $this->layout->set(
           array(
             'sales_custom' => $custom_year,
             'cus_from' => $pay_from,
             'cus_to' => $pay_to,
           ));

    }
            $this->layout->set(
           array(
             'sales_custom' => $custom_year,
           ));

        $data['c_name'] = $this->New_model->get_client_name();
        $data['i_num'] = $this->New_model->get_invoice_num();
        $data['q_num'] = $this->New_model->get_quote_num();

        $this->layout->buffer('content', 'reports/pay_custom_year',$data)->render();
    }

}
