<?php
header("Content-Type:application/json");

require './db.php.inc';

if ( isset( $_SERVER['REQUEST_METHOD'] ) ) {
    switch ($_SERVER['REQUEST_METHOD'] ) {
      case 'GET':
        get();
        break;

      case 'POST':
        post();
        break;

      case 'DELETE':
        delete();
        break;

      case 'PUT':
        put();
        break;

      default:
	response(NULL, NULL, 400,"Invalid Request");

    }

}

function get()  {
	global $con;
	if ( isset($_GET['key']) && $_GET['key']!="" ) {
		include('db.php.inc');
		$key = $_GET['key'];
		$sqlStatement = "SELECT data.key,data.value FROM data WHERE data.key=$key;";
		$result = mysqli_query( $con, $sqlStatement);
		if(mysqli_num_rows($result)>0){
			$key = mysqli_fetch_array($result);
			$keyname = $key['key'];
			$value = $key['value'];
			$response_code = 200;
			$response_desc = "OK";
			response($keyname, $value, $response_code,$response_desc);
			mysqli_close($con);
		}
		else { response(NULL, NULL, 200,"No Record Found"); }
	}
}

function post() {
	global $con;
        if( $_SERVER['REQUEST_METHOD'] == "POST" ) {
                parse_str(file_get_contents("php://input"),$post_vars);
                if ( isset( $post_vars['key'] ) && isset( $post_vars['value'] ) ) {
                        $key = $post_vars['key'];
                        $value = $post_vars['value'];
                        $sqlStatement = "INSERT INTO data (data.key,data.value) VALUES ('{$key}','{$value}');";
			if ( mysqli_query( $con, $sqlStatement ) ) {
                        	response($key, $value, 200,"INSERTED");
			}
			else { print "Error"; }
                }
        }
}

function put() { }

function delete() {
	global $con;
        if( $_SERVER['REQUEST_METHOD'] == "DELETE" ) {
                parse_str(file_get_contents("php://input"),$post_vars);
                if ( isset( $post_vars['key'] ) ) {
                        $key = $post_vars['key'];
                        $sqlStatement = "DELETE FROM data WHERE data.key = $key;";
			if ( mysqli_query( $con, $sqlStatement ) ) {
	                        response($key, NULL, 200,"DELETED");
			}
                }
        }
}




function response( $key,$value,$response_code,$response_desc ) {
	$response['key'] = $key;
	$response['value'] = $value;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;

	$json_response = json_encode($response);
	echo $json_response;
}

?>