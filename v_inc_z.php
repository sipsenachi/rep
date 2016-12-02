 <?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Partida</th><th>NUME</th><th>Data</th><th>Perioada</th><th>NR.Ch</th><th>Txins</th><th>Cotizatie</th><th>rest</th><th>RATA</th><th>CHAD</th><th>DEP.ben</th></tr>";
$data=DATE();
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}
$data=date('Y-m-d');
$servername = "localhost";
$username = "root";
$password = "enachi59";
$dbname = "car";

try {
    $cnx = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $cnx->prepare("SELECT  par,nume,data,per,nrch,txins,cot,rest,rata,chad,cotd,txcar,depb,dob,ainc FROM INC WHERE DATA='$data'");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$cnx = null;
echo "</table>";
?>

