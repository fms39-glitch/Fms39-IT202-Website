<?php
require_once('database.php');
class WatchType
{
    public $watches_type_id;
    public $watches_type_code;
    public $watches_type_name;
    public $watches_ShelfNumber;
    function __construct($watches_type_id, $watches_type_code, $watches_type_name, $watches_ShelfNumber)
    {
        $this->watches_type_id = $watches_type_id;
        $this->watches_type_code = $watches_type_code;
        $this->watches_type_name = $watches_type_name;
        $this->watches_ShelfNumber = $watches_ShelfNumber;
    }
    function __toString()
    {
        $output = "<h2>$this->watches_type_id - $this->watches_type_code, $this->watches_type_name, $this->watches_ShelfNumber</h2>\n";
        return $output;
    }
    static function findWatchType($watches_type_id)
    {
        $db = getDB();
        $query = "SELECT * FROM watches_types WHERE watches_type_id = $watches_type_id";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $watchType = new WatchType(
                $row['watches_type_id'],
                $row['watches_type_code'],
                $row['watches_type_name'],
                $row['watches_ShelfNumber']
            );
            $db->close();
            return $watchType;
        } else {
            $db->close();
            return NULL;
        }
    }
    function saveWatchType()
    {
        $db = getDB();
        $query = "INSERT INTO watches_types (watches_type_id, watches_type_code, watches_type_name, watches_ShelfNumber) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issi",                          // data types: integer, string, string, integer
            $this->watches_type_id,          // integer data type
            $this->watches_type_code,        // string data type
            $this->watches_type_name,        // string data type
            $this->watches_ShelfNumber       // integer data type
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    static function getWatchTypes()
    {
        $db = getDB();
        $query = "SELECT* FROM watches_types";
        $result = $db->query($query);
        if (mysqli_num_rows($result) > 0) {
            $watchTypes = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $watchType = new WatchType(
                    $row['watches_type_id'],
                    $row['watches_type_code'],
                    $row['watches_type_name'],
                    $row['watches_ShelfNumber']
                );
                array_push($watchTypes, $watchType);
                unset($watchType);
            }
            $db->close();
            return $watchTypes;
        } else {
            $db->close();
            return NULL;
        }
    }
    function updateWatchType()
    {
        $db = getDB();
        $query = "UPDATE watches_types SET watches_type_code = ?, " .
            "watches_type_name = ?, " .
            "watches_ShelfNumber = ? " .
            "WHERE watches_type_id = $this->watches_type_id";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssi",
            $this->watches_type_code,
            $this->watches_type_name,
            $this->watches_ShelfNumber
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    function removeWatchType()
    {
        $db = getDB();
        $query = "DELETE FROM watches_types WHERE watches_type_id = $this->watches_type_id";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
}
