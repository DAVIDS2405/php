<?php

interface SendProject
{
    public function send();
}
interface ISendMail
{
    public function send();
}
class SendMail implements ISendMail
{
    public function send()
    {
        echo "Se envía el proyecto";
    }
}
class Project
{
    public function create()
    {
        echo "Se ha creado el proyecto";
    }
}

class SalesProject extends Project implements SendProject

{
    private ISendMail $sender;

    public function __construct(ISendMail $sender)
    {
        $this->sender = $sender;
    }
    public function send()
    {
        $this->sender->send();
    }
}

class InternalProject implements Project {}


function send(SendProject $project)
{
    $project->send();
}

$sendMail = new SendMail();
send(new SalesProject($sendMail));
