<?php

return [
    'mid-career' => [
        'to'      => array_filter(explode(',', env('MID_CAREER_ENTRY_MAIL_TO', ''))),
        'cc'      => array_filter(explode(',', env('MID_CAREER_ENTRY_MAIL_CC', ''))),
        'bcc'     => array_filter(explode(',', env('MID_CAREER_ENTRY_MAIL_BCC', ''))),
        'subject' => env('MID_CAREER_ENTRY_MAIL_SUBJECT', 'Entry Received'),

        'pdf' => [
            'resume'             => env('MID_CAREER_ENTRY_PDF_RESUME', 'Resume.pdf'),
            'personal-statement' => env('MID_CAREER_ENTRY_PDF_PERSONAL_STATEMENT', 'PersonalStatement.pdf'),
        ],
    ],

    'new-graduate' => [
        'to'      => array_filter(explode(',', env('NEW_GRADUATE_ENTRY_MAIL_TO', ''))),
        'cc'      => array_filter(explode(',', env('NEW_GRADUATE_ENTRY_MAIL_CC', ''))),
        'bcc'     => array_filter(explode(',', env('NEW_GRADUATE_ENTRY_MAIL_BCC', ''))),
        'subject' => env('NEW_GRADUATE_ENTRY_MAIL_SUBJECT', 'Entry Received'),

        'pdf' => [
            'resume'             => env('NEW_GRADUATE_ENTRY_PDF_RESUME', 'Resume.pdf'),
            'personal-statement' => env('NEW_GRADUATE_ENTRY_PDF_PERSONAL_STATEMENT', 'PersonalStatement.pdf'),
        ],
    ],
];
