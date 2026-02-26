<?php
require_once('database.php');
class Watch
{
    public $watches_id;
    public $watches_code;
    public $watches_name;
    public $watches_description;
    public $watchesMaterial;
    public $watchesWaterResistance;
    public $watches_type_id;
    public $watches_buy_price;
    public $watches_sell_price;
    function __construct(
        $watches_id,
        $watches_code,
        $watches_name,
        $watches_description,
        $watchesMaterial,
        $watchesWaterResistance,
        $watches_type_id,
        $watches_buy_price,
        $watches_sell_price
    ) {
        $this->watches_id = $watches_id;
        $this->watches_code = $watches_code;
        $this->watches_name = $watches_name;
        $this->watches_description = $watches_description;
        $this->watchesMaterial = $watchesMaterial;
        $this->watchesWaterResistance = $watchesWaterResistance;
        $this->watches_type_id = $watches_type_id;
        $this->watches_buy_price = $watches_buy_price;
        $this->watches_sell_price = $watches_sell_price;
    }
    static function findWatch($watches_id)
    {
        $db = getDB();
        $query = "SELECT * FROM watches WHERE watches_id = $watches_id";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $watch = new Watch(
                $row['watches_id'],
                $row['watches_code'],
                $row['watches_name'],
                $row['watches_description'],
                $row['watchesMaterial'],
                $row['watchesWaterResistance'],
                $row['watches_type_id'],
                $row['watches_buy_price'],
                $row['watches_sell_price']
            );
            $db->close();
            return $watch;
        } else {
            $db->close();
            return NULL;
        }
    }
    function __toString()
    {
        $output = "<h2>Watch : $this->watches_id</h2>" .
            "<h2>Name: $this->watches_name</h2>\n";
        "<h2>Type ID: $this->watches_type_id at $this->watches_sell_price</h2>\n";
        return $output;
    }
    function saveWatch()
    {
        $db = getDB();
        $query = "INSERT INTO watches VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "isssssids",           // data types: integer, string, string, string, string, string, integer, decimal/float, string
            $this->watches_id,              // integer data type
            $this->watches_code,            // string data type
            $this->watches_name,            // string data type
            $this->watches_description,     // string data type
            $this->watchesMaterial,         // string data type
            $this->watchesWaterResistance,  // string data type
            $this->watches_type_id,         // integer data type
            $this->watches_buy_price,       // decimal/float data type
            $this->watches_sell_price       // decimal/float data type
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    static function getWatches()
    {
        $db = getDB();
        $query = "SELECT * FROM watches";
        $result = $db->query($query);
        if (mysqli_num_rows($result) > 0) {
            $watches = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $watch = new Watch(
                    $row['watches_id'],
                    $row['watches_code'],
                    $row['watches_name'],
                    $row['watches_description'],
                    $row['watchesMaterial'],
                    $row['watchesWaterResistance'],
                    $row['watches_type_id'],
                    $row['watches_buy_price'],
                    $row['watches_sell_price']
                );
                array_push($watches, $watch);
            }
            $db->close();
            return $watches;
        } else {
            $db->close();
            return NULL;
        }
    }
    function updateWatch()
    {
        $db = getDB();
        $query = "UPDATE watches SET watches_code= ?, " .
            "watches_name= ?, watches_description= ?, watchesMaterial= ?, " .
            "watchesWaterResistance= ?, watches_type_id= ?, watches_buy_price= ?, " .
            "watches_sell_price= ? WHERE watches_id = $this->watches_id";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssssidd",
            $this->watches_code,
            $this->watches_name,
            $this->watches_description,
            $this->watchesMaterial,
            $this->watchesWaterResistance,
            $this->watches_type_id,
            $this->watches_buy_price,
            $this->watches_sell_price
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    function removeWatch()
    {
        $db = getDB();
        $query = "DELETE FROM watches WHERE watches_id = $this->watches_id";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
}
