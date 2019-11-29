<?php

class mailer extends ControllerBase {
    public function canAnonymus($action) {
        return true;
    }

    public function index() {

        $mail_data = $this->Render()->WriteHTML("", "mailer", "mail_order_adm");
        app::Current()->SendMail("mihail71bma@yandex.ru", "test2", $mail_data, "Content-type:text/plain; charset=UTF-8");
    }
}