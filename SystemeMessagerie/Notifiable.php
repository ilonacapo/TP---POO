<?php

interface Notifiable {
    public function envoyerNotification();
}

class NotificationEmail implements Notifiable{
    public function envoyerNotification()
    {
        echo "Envoi d'un email de notification\n";
    }
    final public function configurerServeurSTMP(){
        echo "essai final";
    }
}

final class NotificationSMS implements Notifiable{
    public function envoyerNotification()
    {
        echo "Envoi d'un SMS de notification\n";
        
    }
}

final class NotificationPush implements Notifiable{
    public function envoyerNotification()
    {
        echo "Envoi d'une notification push\n";
        
    }
}

final class NotificationSystem {
    public function log($message) {
        echo "Le log : $message\n";
    }
}

class essaiHeritage extends NotificationSystem{
//Message "class essaiHeritage cannot extend final class NotificationSystem
}

class NotificationEmailAvancee extends NotificationEmail{
    public function configurerServeurSTMP();
    //erreur Method 'NotificationEmailAvancee' cannot ovverride final method
}