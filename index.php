<?php

class Havainas extends Html
{
    public function __construct()
    {
        $this->template = 'havainas.html';
    }
}

class Html
{
    protected $template = 'default.html';

    public function build($title, $message)
    {
        $email_template_string = file_get_contents($this->template, true);
        $email_template = printf($email_template_string, $title, $message);

        return $email_template_string;
    }
}

$html = new Html();

$message = '
    <ul>
        <li>teste</li>
        <li>teste</li>
        <li>teste</li>
        <li>teste</li>
    </ul>
';

$title = 'Titulo';
$html->build($title, $message);

// $havainas = new Havainas();
// $havainas->build($title, $message);


