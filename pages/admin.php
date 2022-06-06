<?php
require '../php/direct_url_access.php';
urlaccess($_SERVER['REQUEST_METHOD'],realpath(__FILE__),$_SERVER['SCRIPT_FILENAME']);
include '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial,scale=1">
    <link rel="="display:none"sheet" href="../css/header-footer.css">
    <title>Create Survey</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body topmargin=0px leftmargin=0px rightmargin=0px bottommargin=0px>
    <!-- above navigation bar is completed -->

    
    <div class="container">
        <h2 ALIGN=CENTER>Generate Report About</h2>
        <form class="" action="../php/admin_reportor.php" method="POST">
        <select class="report_about" name="report_about" id="report_about" onChange='handleChange()'>
          <option value="customer">customer</option>
          <option value="survey">survey</option>
           <!-- <option value="answer">answer</option>  -->
           <option value="payment">payment</option>
        </select>
        <select id="type_select" name="type_select"></select> 
        <!-- <label for="query" id="query_lable">you can writ your own query</label> -->
        <!-- <input type="text"name="query" placeholder="your query here" id="query"> -->
        <input name="generate" value="generate" type="submit" id="generate">
        </form><br><br><br>

        <h2 ALIGN=CENTER>Modify Database</h2>
        <form method="post" action="../php/modify.php" enctype="multipart/form-data">
        <select class="" name="modify" id="modify" onChange='handleChange2()'>
          <option value="add_data">Add to database</option>
          <option value="delete_data">Delete form database</option>
          </select>
          <select name="modify_what" id="modify_what"></select>
          <input type="text" id="delete_name" name="delete_name" placeholder="customer_name/survey_titl to be deleted" style="display:none">
          <input type="file" id="file_input" name="file" style="display:none">
          <input type="submit" name="modify_input" id="modify_input" value="modify">
        </form>
    </div>
    
</body>
<?php
include "../includes/footer.php";
?>
  <script type="text/javascript" src="../scripts/admin.js"></script>
</html>