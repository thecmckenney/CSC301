<?php


if(!function_exists('query')){
function query($sqlFilePath,$database,$QueryParams){
	
	$sql = file_get_contents($sqlFilePath);
		$statement = $database->prepare($sql);
		$statement->execute($QueryParams);
	
	$results = $statement->fetchAll(PDO::FETCH_ASSOC);
	
	return $results;
}
}

if(!function_exists('get')){
function get($var_key){
	return isset($_GET[$var_key])? $_GET[$var_key] : '';
}
}

if(!function_exists('removePost')){
    function removePost($memberid, $productid, $database){

        $sql = file_get_contents('sql/removePost.sql');
        $params = array(
            'memberid' => $memberid,
            'productid' => $productid
        );
        $statement = $database->prepare($sql);
        $statement->execute($params);
    }
    
}
if (!function_exists('searchProducts')){
    function searchProducts($term, $database){
        if (is_null($term) || strcmp($term,'') == 0){
            return array();
        }

        $params = array(
            'pattern' => '%' . $term . '%'
        );
        
        $sql = file_get_contents('sql/searchProducts.sql');
        $params = array(
            'pattern' => '%' . $term . '%'
        );
        $statement = $database->prepare($sql);
        $statement->execute($params);
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $products;
        
    }
}



if(!function_exists('getMember')){
    function getMember($MEMNBR,$database){
        $sql = file_get_contents('getMember.sql');
        $params = array(
            'memberid' => $MEMNBR
        );
        $statement = $database->prepare($sql);
        $statement->execute($params);
        $member = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $member;
}
}

