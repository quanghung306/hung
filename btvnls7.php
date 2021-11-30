<?php
$userListInput = [
    [
        "username" => "Karl",
        "language" => "en"
    ], [
        "username" => "Tam",
        "language" => "vi"
    ], [    
        "username" => "Kazuki",
        "language" => "ja"
    ]
];
function Message ($name, $language) {
    $message = '';
    foreach ($language as $user) {
        if ($name === $user['username']) {
            if ($user['language'] ==   "en") {
                $message = 'Hello ' . $name;
            } else if ($user['language'] == "vi") {
                $message = 'Xin chào ' . $name;
            } else if ($user['language'] == "ja") {
                $message = 'Konichiwa ' . $name;
            } else {
                $message = 'Not found';
            }
        }
    }
    return $message;
}
echo message('Karl' , $userListInput);
echo message('Tam' , $userListInput);
echo message('Kazuki' , $userListInput);


?>