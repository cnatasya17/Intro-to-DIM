<?php
    require_once '../../Connect/connection.php';

    class Crud { 
        private $name;

        public function __construct($table)
        {
            $this->name = $table;
        }

        public function show()
        {
            global $connect;
            $sql = "SELECT * FROM " . $this->name;
            $execute_query = mysqli_query($connect, $sql);
            return $execute_query;
        }

        public function className()
        {
            return get_class($this);
        }
    }
?>
