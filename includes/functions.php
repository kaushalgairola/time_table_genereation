<?php
	//require_once 'db.php';
	function mysql_prep( $value ) {
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists( "mysql_real_escape_string" ); // i.e. PHP >= v4.3.0
		if( $new_enough_php ) { // PHP v4.3.0 or higher
			// undo any magic quote effects so mysql_real_escape_string can do the work
			if( $magic_quotes_active ) { $value = stripslashes( $value ); }
			$value = mysql_real_escape_string( $value );
		} else { // before PHP v4.3.0
			// if magic quotes aren't already on then add slashes manually
			if( !$magic_quotes_active ) { $value = addslashes( $value ); }
			// if magic quotes are active, then the slashes already exist
		}
		return $value;
	}

function confirm_query($result_set){
if(!$result_set){
	die("database connection failed ".mysql_error());
}
}
function redirect_to($location = NULL){
    if ($location!=NULL){
        header("Location:{$location}");
        exit;
    }
}
function menu_set(){
	$query = "SELECT * 
			  FROM menu 
			  ORDER BY position ASC";
	$menu_items = mysql_query($query);
	confirm_query($menu_items);
	return $menu_items;				
}
function client_set(){
	$query = "SELECT *
			  FROM clients
			  ORDER BY position ASC";
	$clients = mysql_query($query);
	confirm_query($clients);
	return $clients;
}
function get_from_result($id ){
    global $result;
    if (isset ($id)){}
    else{$id = 1;}
    while ($sel_row = mysql_fetch_array($result)){
        if ($id == $sel_row['id'])
        {return $sel_row;}
    }
}


//****************************
		
?>