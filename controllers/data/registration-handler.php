<?php 

// Error and success messages
$messages = [
    'error' => [],
    'success' => [],
];

// 
if(!empty($_POST))
{

    //Debug
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    // Get variable
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $team_name = trim($_POST['team_name']);
    $mail = trim($_POST['mail']);
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];

    // Handle errors 
    if(empty($first_name))
    {
        $messages['error'][] = 'Il manque votre prénom';
    }
    if(empty($last_name))
    {
        $messages['error'][] = 'Il manque votre nom';
    }
    if(empty($team_name))
    {
        $messages['error'][] = "Il manque votre nom d'équipe";
    }
    if(empty($team_name))
    {
        $messages['error'][] = "Il manque votre nom d'équipe";
    }

    if(empty($password))
    {
        $messages['error'][] = 'Missing password';
    }
    elseif (strlen($password) < 5) 
    {
        $messages['error'][] = 'Password too short';
    }



    // Success
    if(empty($messages['error']))
    {
        $messages['success'][] = 'All good';

        $_POST['login'] = '';
        $_POST['password'] = '';
        $_POST['age'] = '';
        $_POST['gender'] = '';
    }
}

// Form not sent 
else 
{
  $_POST['first_name'] = '';
  $_POST['last_name'] = '';
  $_POST['team_name'] = '';
  $_POST['mail'] = '';
  $_POST['password'] = '';
  $_POST['password_confirmation'] = '';
}