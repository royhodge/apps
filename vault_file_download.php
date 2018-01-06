<?php
	session_start();
    ob_start();
    require_once('check-login.php');
	require_once('dbhelper.php');
	require_once('resources.php');
	require_once('helperFunctions.php');
    require_once('config.php');

	try
	{
		if (isset($_GET['txid']))
		{
			
			$txId = $_GET['txid'];
			$uploader_address = $_SESSION['address'];
			$dbHelper = new DBHelper();

			if (isset($_GET['v_n']))
			{
				$vOut_n = intval($_GET['v_n']);
				$dataHex = $dbHelper->getTransactionMetadata($txId, $vOut_n);
			}
			else
			{
				$transaction = $dbHelper->getAddressTransaction($uploader_address, $txId);
				$dataHex = $dbHelper->getDataFromDataItem($transaction['data'][0]);
			}

			$dataArr = json_decode(hex2bin($dataHex));
			$fileContentHex = $dataArr->file_hex;

			$binData = hex2bin($fileContentHex);
			$file = bin_data_to_file($binData);
				
			if (is_array($file)) 
				{

					if (strlen($file['mimetype']))
						header('Content-Type: '.$file['mimetype']);
					
					if (strlen($file['filename'])) 
						{
							// for compatibility with HTTP headers and all browsers
							$filename=preg_replace('/[^A-Za-z0-9 \\._-]+/', '', $file['filename']);
							header('Content-Disposition: attachment; filename="'.$filename.'"');
						}
				
				echo $file['content'];
			
			} else
				echo 'File not formatted as expected';
			
		}
		else
		{
			throw new Exception("No Transaction ID found.");
		}
	}
	catch(Exception $e)
	{
		echo "<h3 style='color:red'>".$e->getMessage()."</h3>";
	}

?>