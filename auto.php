 <?php

class DB
{
    const DATABASE = 'car';
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = 'enachi59';
    
    static private $pdo;
    
    static public function singleton()
    {
        if (!is_object(self::$pdo))
        {
            self::$pdo = new PDO('mysql:dbname=' . self::DATABASE . ';host=' . self::HOST, 
                                    self::USERNAME, 
                                    self::PASSWORD);
        }
        return self::$pdo;
    }
    
    private function __construct()
    {
        
    }
    
    public function __clone()
    {
        throw new Exception('You may not clone the DB instance');
    }
}

if (!isset($_REQUEST['term']))
{
    die('([])');
}

$st = DB::singleton()
        ->prepare(
            'select par, name ' .
            'from PAR ' .
            'where par like :par ' .
            'order by par asc ' .
            'limit 0,5');

$searchpar = $_REQUEST['term'] . '%';
$st->bindParam(':par', $searchpar, PDO::PARAM_STR);

$data = array();
if ($st->execute())
{
    while ($row = $st->fetch(PDO::FETCH_OBJ))
    {
        $data[] = array(
            'value' => $row->par ,
            'nume' => $row->nume
                    );
    }
}
echo json_encode($data);
flush(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>jQuery auto-complete, populate related fields</title>
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>
	<script type="text/javascript">

		jQuery(document).ready(function(){
			$('.parsearch').autocomplete({
				source:'jQueryAutocompleteRelatedFields.php', 
				minLength:2,
				select:function(evt, ui)
				{
					// when a zipcode is selected, populate related fields in this form
					this.form.nume.value = ui.item.nume;
				
				}
			});
		});

	</script>
	<link rel="stylesheet" href="/jquery/css/smoothness/jquery-ui-1.8.2.custom.css" />
	<style type="text/css"><!--
	
	        /* style the auto-complete response */
	        li.ui-menu-item { font-size:12px !important; }
	
	--></style>
</head>

<body>

<form onsubmit="return false;">
	partida:
	<input id="parsearch" type="text" class="parsearch" />
	
	nume: 
	<input id="city" type="text" disabled />
	
	</form>

</body>
</html>
