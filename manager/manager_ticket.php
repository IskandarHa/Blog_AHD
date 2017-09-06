<?php

require_once('../model/connection_sql.php');
$bdd = getPDO();


function getTickets()
{
    //$bdd = require_once("../model/connection_sql.php");
    $tickets = $bdd->query("SELECT * FROM ticket ORDER BY art_id DESC");
    return $tickets;
}

function getTicket($idTicket)
{
    //$bdd = require_once ("../model/connection_sql.php");
    $ticket = $bdd->prepare("SELECT id, title, chapo, content, author, date"
    ." WHERE id=?");
    $ticket->execute(array($idTicket));
}

function deleteTicket($idTicket)
{
    //$bdd = require_once ("../model/connection_sql.php");
    $ticket = $bdd->prepare("DELETE FROM ticket WHERE id=?");
    $ticket->exectue(array($idTicket));
}

function updateTicket(array $data)
{
    //$bdd = require_once ("../model/connection_sql.php");
    $ticket = $bdd->prepare("UPDATE ticket SET title=?, chapo=?, content=?, author=?, date=NOW() WHERE id=?");
    $ticket->execute(array($data['title'],$data['chapo'],$data['content'],$data['author'],$data['id']));
}