<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\User;
use App\Models\Role;


class DynamicPDFController extends Controller
{
    function index()
    {
     $customer_data = $this->get_customer_data();
     return view('Main.dynamic_pdf')->with('customer_data', $customer_data);
    }

    function get_customer_data()
    {
     $customer_data = User::with('rolesOfUser')
         ->limit(10)
         ->get();
     return $customer_data;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {
     $customer_data = $this->get_customer_data();
     $output = '
     <h3 align="center">Customer Data</h3>
     <table width="100%" style="border-collapse: collapse; border: 0px;">
      <tr>
    <th style="border: 1px solid; padding:12px;" width="20%">Id</th>
    <th style="border: 1px solid; padding:12px;" width="30%">Name</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Email</th>
    <th style="border: 1px solid; padding:12px;" width="15%">Role</th>
   </tr>
     ';  
     foreach($customer_data as $customer)
     {
      $output .= '
      <tr>
       <td style="border: 1px solid; padding:12px;">'.$customer->id.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->name.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->email.'</td>
       <td style="border: 1px solid; padding:12px;">'.$customer->rolesOfUser['name'].'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
