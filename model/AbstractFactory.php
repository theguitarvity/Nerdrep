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

    /**
     * Persiste um objeto no banco. Executa um SQL "Insert into..."     
     * @param Object $obj - Objeto a ser persistido.
     * @return boolean - se conseguiu salvar ou não.
     */
    abstract public function salvar($obj);

    /**
     * Lista os objetos persistidos no banco, ou seja, executa um 
     * SQL "Select - From"
     * @return array -  Array de objetos da classe.
     */
    
     
    protected function queryRowsToListOfObjects
    (PDOStatement $result, $nameObject) {
        $list = array();
        $r = $result->fetchAll(PDO::FETCH_NUM);
        foreach ($r as $row) {
            //unset($row[0]);
            $ref = new ReflectionClass($nameObject);
            $list[] = $ref->newInstanceArgs($row);
        }
        return $list;
    }

}

?>
