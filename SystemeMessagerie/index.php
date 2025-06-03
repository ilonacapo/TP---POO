<?php

include_once 'Notifiable.php';

$notifications = [
    new NotificationSMS(),
    new NotificationPush(),
    new NotificationEmail,
];

foreach($notifications as $notif) {
    $notif->envoyerNotification();
}