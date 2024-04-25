<?php
require_once('../mailer/PHPMailer.php');
use PHPMailer\PHPMailer\PHPMailer;
// require_once('config.php');
require_once("smtp.php");

class emailMessage{
    public function tradeChange($tradeId,$mode,$amt,$date,$APP_NAME,$tp){
        return "
        <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Trade Notification</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 10px;
        }

        .trade-details {
            background-color: #e0e0e0;
            padding: 15px;
            margin: 20px 0;
            border-radius: 8px;
            text-align: left;
        }

        .summary {
            background-color: #f0f0f0;
            padding: 10px;
            margin: 15px 0;
            border-radius: 5px;
            text-align: left;
        }

        .thank-you {
            color: #008000;
            font-weight: bold;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Trade Action Notification</h2>
        <p>We are pleased to inform you that your trade has been successfully $tp.</p>

        <div class='trade-details'>
            <p><strong>Trade ID:</strong> $tradeId</p>
            <p><strong>Type:</strong> $mode</p>
            <p><strong>Volume:</strong> $amt</p>
            <p><strong>Date:</strong> $date</p>
        </div>


        <p class='thank-you'>Thank you for choosing $APP_NAME for your crypto trading needs!</p>

        <div class='footer'>
            <p>This is an automated notification. Please do not reply to this email.</p>
        </div>
    </div>
</body>
</html>

        ";
    }
    public function creditUser($amt,$date,$APP_NAME){
        return "
        <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Account Notification</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 10px;
        }

        .trade-details {
            background-color: #e0e0e0;
            padding: 15px;
            margin: 20px 0;
            border-radius: 8px;
            text-align: left;
        }

        .summary {
            background-color: #f0f0f0;
            padding: 10px;
            margin: 15px 0;
            border-radius: 5px;
            text-align: left;
        }

        .thank-you {
            color: #008000;
            font-weight: bold;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Credit Alert</h2>
        <p>Your account deposit was successful. Details below.</p>

        <div class='trade-details'>
            <p><strong>Amount</strong> $amt</p>
            <p><strong>Type:</strong> credit</p>
            <p><strong>Date:</strong> $date</p>
        </div>


        <p class='thank-you'>Thank you for choosing $APP_NAME for your crypto trading needs!</p>

        <div class='footer'>
            <p>This is an automated notification. Please do not reply to this email.</p>
        </div>
    </div>
</body>
</html>

       
        ";
    }
    public function debitUser($amt,$date,$APP_NAME){
        return "
        <!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Account Notification</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 10px;
        }

        .trade-details {
            background-color: #e0e0e0;
            padding: 15px;
            margin: 20px 0;
            border-radius: 8px;
            text-align: left;
        }

        .summary {
            background-color: #f0f0f0;
            padding: 10px;
            margin: 15px 0;
            border-radius: 5px;
            text-align: left;
        }

        .thank-you {
            color: #008000;
            font-weight: bold;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Debit Alert</h2>
        <p>Your account withdrawal was successful. Details below.</p>

        <div class='trade-details'>
            <p><strong>Amount</strong> $amt</p>
            <p><strong>Type:</strong> credit</p>
            <p><strong>Date:</strong> $date</p>
        </div>


        <p class='thank-you'>Thank you for choosing $APP_NAME for your crypto trading needs!</p>

        <div class='footer'>
            <p>This is an automated notification. Please do not reply to this email.</p>
        </div>
    </div>
</body>
</html>

       
        ";
    }
}

?>