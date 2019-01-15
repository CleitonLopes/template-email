<?php

class Html
{
    public function build($message)
    {
        $email_template_string = file_get_contents('template.html', true);
        $email_template = printf($email_template_string, $message);

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

$html->build($message);


