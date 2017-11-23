<?php

abstract class AbstractFactory {

    protected $db;

    public function AbstractFactory() {

        try {
            $this->db = new PDO("sqlite:model/DB_nerdrep.sqlite");

            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

    abstract public function salvar($obj);

    protected function queryRowsToListOfObjects(PDOStatement $result, $nameObject) {
        $list = array();
        $r = $result->fetchAll(PDO::FETCH_NUM);
        foreach ($r as $row) {
            $ref = new ReflectionClass($nameObject);
            $list[] = $ref->newInstanceArgs($row);
        }
        return $list;
    }

}

?>
