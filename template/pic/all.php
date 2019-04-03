<?php foreach ($MODEL["pics"] as $v)
    echo $this->WriteHTML(["pic" => $v, "del" => $MODEL["del"]], "pic", "one"); ?>