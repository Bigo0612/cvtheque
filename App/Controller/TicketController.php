<?php


namespace App\Controller;

use App\Model\TicketModel;
use App\Service\Controller;

class TicketController extends Controller
{
    public function ticket(){
    $title = 'ticket';
    $ticket = TicketModel::all();
    $join = TicketModel::tickett();

    $this->render('app.default.ticket',array(
        'ticket' => $ticket,
        'join' =>$join

    ));
    }
}