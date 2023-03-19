<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TpMod9_1303204073</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function tambahData() {
            $.ajax({
                url: 'session.php',
                type: 'post',
                data: $('form').serialize(),
                success: function(result) {
                    $('ul').append(result);
                }
            })
        }
    </script>
</head>
<body>
    <h1>TP MODUL 9</h1>
    <form>
        <input type="text" name="tambah">
        <button type="button" onclick="tambahData()">Tambah</button>
    </form>
    <div style="border: 1px dotted #000;">
        <ul style="list-style-type: none;">
        <?php
			if (isset($_SESSION['data'])) {
				foreach ($_SESSION['data'] as $data) {
					echo "<div>$data</div>";
				}
			}
		?>
        </ul>
    </div>
</body>
</html>