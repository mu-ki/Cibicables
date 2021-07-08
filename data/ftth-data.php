<?php 

    if (empty($_POST)) {
        die("Permission denied.");
    }
    include_once("library/library.php");
    ini_set("display_errors", "0");
    

//check for send as attachment

        $attachment_fields = json_decode('[]', true);
$attachments = getAttachments($attachment_fields);
if( 1 ){
$output = array("success" => 1, 
                    "redirect" => 0, 
                    "msg" => "User Added Sucessfully"
                );
echo json_encode($output); exit;
    } else {
$output = array("success" => 0, 
                    "error" => "Email error",
                    "msg" => "Something went wrong, please try again.",
                );
            echo json_encode($output); exit;
}
?>