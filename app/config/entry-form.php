<?php

return [
    'to'      => array_filter(explode(',', env('ENTRY_MAIL_TO', ''))),
    'cc'      => array_filter(explode(',', env('ENTRY_MAIL_CC', ''))),
    'bcc'     => array_filter(explode(',', env('ENTRY_MAIL_BCC', ''))),
    'subject' => env('ENTRY_MAIL_SUBJECT', 'Entry Received'),

    'resume_pdf'             => env('ENTRY_RESUME_PDF', 'Resume.pdf'),
    'personal_statement_pdf' => env('ENTRY_PERSONAL_STATEMENT_PDF', 'PersonalStatement.pdf'),
];
