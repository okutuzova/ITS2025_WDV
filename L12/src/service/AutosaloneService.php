<?php

require_once SRC . 'repos/AutomobileDAO.php';
class AutosaloneService {
    private $dao;

    public function __construct() {
        $this->dao = new AutomobileDAO();
    }

    public function getAutomobili() {
        return $this->dao->getAutomobili();
    }

    public function getAutomobileById($id) {
        foreach($this->dao->getAutomobili() as $automobile) {
            if($automobile->id == $id) {
                return $automobile;
            }
        }
        return null;
    }

}