<?php
include "../config/db_connect.php";

/* comment the following lines to run this query */ 
$sql= "CREATE TABLE  utopia.customer (email VARCHAR(255) PRIMARY KEY,firstname VARCHAR(50) NOT NULL,lastname VARCHAR(30),password VARCHAR(255) NOT NULL,phonenumber VARCHAR(50) NOT NULL,job VARCHAR(50) NOT NULL,gender VARCHAR (50) NOT NULL,birthdate VARCHAR(30) NOT NULL,profile_photo_path VARCHAR (255),address VARCHAR (255),cust_status INT)";

/* comment the following lines to run this query */
$sql= "CREATE TABLE utopia.created_survey (survey_title VARCHAR (255) PRIMARY KEY,survey_creater VARCHAR(255),description varchar(255),participant_limit INT,prefered_gender VARCHAR (30),created_date DATE,dead_line  DATE,target_job Varchar (30),target_age Varchar (30),target_place Varchar (30),category VARCHAR (30),CONSTRAINT fk_customr FOREIGN KEY(survey_creater) REFERENCES customer (email))";

/* comment the following line to run this query */ 
$sql= "CREATE TABLE utopia.answered_survey (file_url  VARCHAR(255) PRIMARY KEY,survey_title VARCHAR (255), survey_taker VARCHAR(255),number_of_question INT,CONSTRAINT fk_answere FOREIGN KEY (survey_title) REFERENCES created_survey (survey_title),CONSTRAINT fk_canswer FOREIGN KEY(survey_taker) REFERENCES customer (email))";

//  $sql= "CREATE TABLE utopia.payment(payment_id INT PRIMARY KEY AUTO_INCREMENT,survey_title VARCHAR (255),email VARCHAR(255),file_url  VARCHAR(255),CONSTRAINT fk_psurvey FOREIGN KEY (survey_title) REFERENCES created_survey (survey_title),CONSTRAINT fk_pcustomr FOREIGN KEY(email) REFERENCES customer (email),CONSTRAINT fk_panswer FOREIGN KEY (file_url) REFERENCES answered_survey(file_url))";
$sql= "CREATE TABLE utopia.answeres(answer_id INT PRIMARY KEY AUTO_INCREMENT,answer VARCHAR(255),survey_title VARCHAR (255),answered_by VARCHAR(255),file_url  VARCHAR(255),question_number INT,CONSTRAINT fk_asurvey FOREIGN KEY (survey_title) REFERENCES created_survey (survey_title),CONSTRAINT fk_acustomr FOREIGN KEY(answered_by) REFERENCES customer (email),CONSTRAINT fk_aanswer FOREIGN KEY (file_url) REFERENCES answered_survey(file_url))";

 $sql = "SET FOREIGN_KEY_CHECKS=0";
 mysqli_query($conn, $sql);
$sql="DELETE  FROM customer where email='meharithegreat@gmail.com'";
if(mysqli_query($conn, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);
?>
?>