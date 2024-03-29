<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../lib/phpmailer/src/Exception.php';
require __DIR__ . '/../lib/phpmailer/src/PHPMailer.php';
require __DIR__ . '/../lib/phpmailer/src/SMTP.php';

require_once __DIR__ . "/request.php";
require_once __DIR__ . "/render.php";
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/user.php";

require_once __DIR__ . "/../controller/controller_base.php";
require_once __DIR__ . "/../model/base/model_base.php";


//Основной класс нашего приложения
//С него происходит запуск, и именно этот 
//Класс доступен везде в качестве синглтона
class app {

    const baseAddress = __DIR__ . "/../";

    //#####################################
    //Request
    //#####################################
    /**
     * @var request $request
     */
    private $request;

    /**
     * @return request
     */
    public function getRequest() {
        return $this->request;
    }

    //#####################################
    //Render
    //#####################################
    /**
     * @var render $render
     */
    private $render;

    /**
     * @return render
     */
    public function getRender() {
        return $this->render;
    }


    //#####################################
    //Config
    //#####################################
    /**
     * @var config $config
     */
    private $config;

    /**
     * @return config
     */
    public function getConfig() {
        return $this->config;
    }


    //#####################################
    //Database
    //#####################################
    /**
     * @var DB $db
     */
    private $db;

    /**
     * @return DB
     */
    public function getDB() {
        return $this->db;
    } 
    
    
    //#####################################
    //Отслеживание пользователя
    //#####################################
    /**
     * @var User $user
     */
    private $user;

    /**
     * @return User
     */
    public function getUser() {
        return $this->user;
    }       

    /**
     * @return User
     */
    public function getRealUser() {
        return $this->db->selectOne("SELECT * FROM `user` WHERE `id` = :id;", ["id" => $this->user->getUserID()]);
    }


    private static $current;
    /**
     * @return app
     */
    public static function Current() {
        return self::$current;
    }
    
    public function __construct()
    {
        session_start();

        self::$current = $this;

        $this->request = new request();
        $this->render = new render();
        $this->config = new config();
        $this->db     = new DB();
        $this->user   = new User();

        $this->db->selectDB("db");

        // echo $this->drawRoute(
        //     $this->request->Controller(),
        //     $this->request->Action()
        // );

        $this->render->renderPage();
    }


    /**
     * Получение класса контроллера
     */
    public function ControllerClass(string $controller) {
        $file = __DIR__ . "/../controller/" . $controller . ".php";
        if (!file_exists($file)) {
            echo $this->render->WriteError("Файла не существует!");
            die();
        }

        require_once $file;

        if (!class_exists($controller)) {
            echo $this->render->WriteError("Класса не существует!");
            die();
        }

        $cl = new $controller();
        $cl->setRender($this->render);
        $cl->setController($controller);

        return $cl;
    }

    public function ModelClass(string $controller, string $model) {
        $file = __DIR__ . "/../model/" . $controller . "/" . $model . "_model.php";
        if (!file_exists($file)) {
            echo $this->render->WriteError("Файла не существует!");
            die();
        }

        require_once $file;

        $classname = $model . "_model";

        if (!class_exists($classname)) {
            echo $this->render->WriteError("Класса не существует!");
            die();
        }

        $cl = new $classname();
        $cl->setDB($this->getDB());

        return $cl;
    }
     
    //выполнить метод внутри контроллера
    //C ПРОВЕРКОЙ ВАЛИДНОСТИ
    public function execMethod($class, $method, $param) {

        if (!method_exists($class, $method)) {
            echo $this->render->WriteError("Не могу вызвать контроллер!");
            die();
        }

        if (!is_callable([$class, $method])) {
            echo  $this->render->WriteError("Метод не доступен");
            die();
        }

        return $class->$method($param);
    }


    public function getZones() {
        $zones = [
            "test",
            "ttt"
        ];
    }

    public function SendMail($to, $subject, $body) {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.yandex.ru';                       // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'mihail71bma@yandex.ru';                     // SMTP username
            $mail->Password   = 'Qwerty_12345';                               // SMTP password
            $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 465;                                    // TCP port to connect to
            $mail->CharSet = "UTF-8";
            
            //Recipients
            $mail->setFrom('mihail71bma@yandex.ru', 'Волшебная Нить');
            $mail->addAddress($to);     // Add a recipient

            $mail->addReplyTo('mihail71bma@yandex.ru', 'Information');

            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
        
            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $body;
            $mail->AltBody = strip_tags($body);
        
            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }
}