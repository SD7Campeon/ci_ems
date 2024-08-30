<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home_model extends CI_Model{
    
    public function fetch_cus(){
        
          $query= $this->db->query("SELECT * FROM `recep`");
           return $query;
    }
        public function fetch_in_ex(){
          $date = date('Y-m-d');
          $query= $this->db->query("SELECT * FROM `credit` JOIN debit WHERE credit.date='$date' AND debit.date='$date'");
           return $query;
    }
    public function fetch_debit_dash(){
          $date = date('Y-m-d');
          $query= $this->db->query("SELECT * FROM  debit join recep WHERE debit.date='$date' and debit.cus_id=recep.id");
           return $query;
    }
    public function fetch_credit_dash(){
          $date = date('Y-m-d');
          $query= $this->db->query("SELECT * FROM `credit` join recep WHERE credit.date='$date' and credit.cus_id=recep.id");
           return $query;
    }
    
     public function fetch_report_debit($from,$to){
         
           $query= $this->db->query("select (SELECT SUM(debit.amount) FROM debit,recep where debit.date between '$from' and '$to' AND debit.cus_id=recep.id) AS Total,debit.amount, debit.date, debit.category_id, recep.name FROM recep,debit where debit.date between '$from' and '$to' AND debit.cus_id=recep.id ORDER BY debit.date");
           return $query;
    }
    
    public function fetch_report_credit($from,$to){
         
           $query= $this->db->query("select (SELECT  SUM(credit.amount) FROM credit,recep where credit.date between '$from' and '$to' AND credit.cus_id=recep.id) AS Total,credit.amount, credit.date, recep.name FROM recep,credit where credit.date between '$from' and '$to' AND credit.cus_id=recep.id ORDER BY credit.date");
           return $query;
    }
    public function fetch_credit_p($id){
         
           $query= $this->db->query("select * from credit join recep where credit.cus_id='$id'and credit.cus_id=recep.id");
           return $query;
    }
     public function fetch_debit_p($id){
         
           $query= $this->db->query("select * from debit join recep where debit.cus_id='$id'and debit.cus_id=recep.id");
           return $query;
    }
    public function fetch_sum_p($id){
         
           $query= $this->db->query("SELECT (SELECT SUM(credit.amount) FROM credit WHERE credit.cus_id='$id') AS ctotal ,(SELECT SUM(debit.amount) FROM debit WHERE debit.cus_id='$id') AS dtotal");
           return $query;
    }
    
    public function income (){
          $today =date('Y-m-d');
           $query= $this->db->query("SELECT SUM(credit.amount) as I FROM credit WHERE date='$today'");
           return $query;
    }
     public function expense(){
           $today =date('Y-m-d');
           $query= $this->db->query("SELECT SUM(debit.amount) as E FROM debit WHERE date='$today'");
           return $query;
    }
     public function count(){
           $query= $this->db->query("SELECT COUNT('id') as COUNT FROM recep");
           return $query;
    }
    
    
    
    
}
