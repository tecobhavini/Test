<?php 
  header("Access-Control-Allow-Origin: *");

  $shop = $_GET['shop'];
  if($shop != ""){
  $api_key = "2fb25ec956ed6d241c5cc10fc3ce1ab2";
  $scopes = "read_orders,write_products,write_script_tags,read_orders";
  $redirect_uri = "https://bvn-test-app.herokuapp.com/generate_token.php";

  // Build install/approval URL to redirect to
  $install_url = "https://" . $shop . "/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

  // Redirect
  header("Location: " . $install_url);
  die();
  
}else{
  echo "Welcome !!!";
}
