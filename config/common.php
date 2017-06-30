<?php
return [
    'timesheet_spreadsheet_id' => '12Jprt_OTlv_vV6tVTH6XAdVPyIIK1-3G_JievcMwIyU',
    'id' => [
        'nguyen_phuc_luong' => '1839415',
        'hoang_huu_hoi' => '1991503',
        'hr_team' => [
            '1749245', // hanh
            '1749189', // linh
            '2095357', // uyen
            '1878625', // ngoc
            '1798742', // giang
            '1979508', // mai
            '781916',  // mo
        ]
    ],
    'timesheet_checking_user_ids' => [
        '1749245', // hanh
        '1749189', // linh
        '2095357', // uyen
        '1878625', // ngoc
        '1798742', // giang
        '1979508', // mai
        '781916',  // mo
        '1839415', // luong
    ],
    'day' => [
        'mon' => 'Monday',
        'tue' => 'Tuesday',
        'wed' => 'Wednesday',
        'thu' => 'Thursday',
        'fri' => 'Friday',
        'sat' => 'Saturday',
        'sun' => 'Sunday',
    ],
    'universities' => [
        ['id' => 1, 'name' => 'HUST'],
        ['id' => 2, 'name' => 'VNU'],
        ['id' => 3, 'name' => 'DNU'],
        ['id' => 4, 'name' => 'FRAMGIA'],
    ],
    'background_position' => [
        'x' => 0,
        'y' => 0,
        'zoom' => 1000
    ],
    'avatar_size' => 140,
    'mention' => [
        'admin' => [
            'teacher_mention' => '<a href="/#/teachers/:id:/profile" class="user-name">:name:</a>',
            'admin_mention' => '<a href="/#/admins/:id:/edit" class="user-name">:name:</a>',
        ],
        'teacher' => [
            'teacher_mention' => '<a href="/#/profile/basic/:id:" class="user-name">:name:</a>',
            'admin_mention' => '<span class="user-name" data-id=":id:">:name:</span>',
        ],
        'lesson' => [
            'teacher_mention' => '<span class="lesson-content">:content:</span>',
            'admin_mention' => '<span class="lesson-content">:content:</span>',
        ],
    ],
    'file_base_link' => '<a href=":link:" target="_blank">:name:</a>',
    'file_no_link' => '<span class="file-name">:name:</span>',
    'preview_server_link' => 'https://view.officeapps.live.com/op/view.aspx?src=',
    'max_criteria' => 10,
    'mention_link' => ':message:<a href="/#/dashboard/month?c=:courseId:&l=:lessonIds:&sci=:classId:">a comment</a>',
];
