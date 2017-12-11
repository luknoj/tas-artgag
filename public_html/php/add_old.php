<?php
require('config.php');
require 'vendor/autoload.php';
session_start();
$title = "";
$content = "";
$success = "";
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
$bucketName = 'webappuam';
$IAM_KEY = 'AKIAIV7KJ7BKPJIR6Q5A';
$IAM_SECRET ='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';
if (isset($_POST['submit-post'])) {
    $user_id = $_SESSION['user_id'];
    $title = stripcslashes($_POST['title']);
    $title = mysqli_real_escape_string($con,$title);
    $s3 = S3Client::factory(
        array(
            'credentials' => array(
                'key' => $IAM_KEY,
                'secret' => $IAM_SECRET
            ),
            'version' => 'latest',
            'region'  => 'us-east-2'
        )
    );
    try {} catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
    $keyName = 'test_example1/' . basename($_FILES["fileToUpload"]['name']);
    $pathInS3 = 'https://s3.us-east-2.amazonaws.com/' . $bucketName . '/' . $keyName;
    // Add it to S3
    try {
        // Uploaded:
        $file = $_FILES["fileToUpload"]['tmp_name'];
        $s3->putObject(
            array(
                'Bucket'=>$bucketName,
                'Key' =>  $keyName,
                'SourceFile' => $file,
                'ACL' => 'public-read',
                'StorageClass' => 'REDUCED_REDUNDANCY'
            )
        );
    } catch (S3Exception $e) {
        die('Error:' . $e->getMessage());
    } catch (Exception $e) {
        die('Error:' . $e->getMessage());
    }
    $content = $pathInS3;
    $query = "INSERT INTO articles (user_id, title, content, post_date) VALUES ('$user_id', '$title', '$content', CURDATE())";
    $result = mysqli_query($con, $query);
    if ($result) {
        $success="Your post has been added";
        header('Location: ./add_post.php');
    }else {
        die('no nie smiga ' . mysqli_error($result));
    }
}else{}
?>