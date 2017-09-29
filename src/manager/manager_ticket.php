<?php

require_once(__DIR__.'/../model/connection_sql.php');

function getTickets()
{
    $bdd = getPDO();
    $tickets = $bdd->query("SELECT * FROM ticket ORDER BY art_id DESC");
    return $tickets;
}

function getTicket($idTicket)
{
    $bdd = getPDO();
    $ticket = $bdd->prepare("SELECT id, title, chapo, content, author, date"
    ." WHERE id= :idTicket");
    $ticket->bindParam(':idTicket',$idTicket,PDO::PARAM_INT);
    $ticket->execute();
}

function deleteTicket($idTicket)
{
    $bdd = getPDO();
    $ticket = $bdd->prepare("DELETE FROM ticket WHERE id= :idTicket");
    $ticket->bindParam(':idTicket',$idTicket,PDO::PARAM_INT);
    $ticket->exectue();
}

function updateTicket(array $data, $idTicket)
{
    $bdd = getPDO();
    $date = new \DateTime();
    $date_format = $date->format('Y-m-d H:i:s');$
    $ticket = $bdd->prepare("UPDATE ticket SET title= :title, chapo= :chapo, content= :content, author= :author, date=". $date_format ." WHERE id= :idTicket");
    $ticket->bindParam(':title',$data['title'],PDO::PARAM_STR);
    $ticket->bindParam(':chapo',$data['chapo'],PDO::PARAM_STR);
    $ticket->bindParam(':content',$data['content'],PDO::PARAM_STR);
    $ticket->bindParam(':author',$data['author'],PDO::PARAM_STR);
    $ticket->bindParam(':idTicket',$idTicket,PDO::PARAM_INT);
    $ticket->execute();
}

function createTicket(array $data)
{
    $bdd = getPDO();
    $date = new \DateTime();
    $date_format = $date->format('Y-m-d H:i:s');$
    $ticket = $bdd->prepare("INSERT INTO ticket VALUES (':title', ':chapo',':content',':author',$date_format)");
    $ticket->bindParam(':title',$data['title'],PDO::PARAM_STR);
    $ticket->bindParam(':chapo',$data['chapo'],PDO::PARAM_STR);
    $ticket->bindParam(':content',$data['content'],PDO::PARAM_STR);
    $ticket->bindParam(':author',$data['author'],PDO::PARAM_STR);
    $ticket->execute();
}