<?php

	require 'vendor/autoload.php';
	include '../php/config.php';
	session_start();
    $_SESSION['success'] = '';
	use Aws\S3\S3Client;
	use Aws\S3\Exception\S3Exception;
	$bucketName = 'webappuam';
	$IAM_KEY = '';
	$IAM_SECRET = '';

    $s3 = S3Client::factory(
        array(
            'credentials' => array(
                'key' => $IAM_KEY,
                'secret' => $IAM_SECRET
            ),
            'version' => 'latest',
            'region' => 'us-east-2'
        )
    );
    try {
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }

    $keyName = 'test_example1/' . basename($_FILES["fileToUpload"]['name']);
    $pathInS3 = 'https://s3.us-east-2.amazonaws.com/' . $bucketName . '/' . $keyName;

    try {

        $file = $_FILES["fileToUpload"]['tmp_name'];
        $s3->putObject(
            array(
                'Bucket' => $bucketName,
                'Key' => $keyName,
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
    /*
    echo '<img src="';
    echo $pathInS3;
    echo '"></img>' . "<br>";
    echo $_SESSION['user_id'] . "<br>" . $pathInS3 . "<br>" . $_POST['title'];
    */
    $user_id = $_SESSION['user_id'];
    $title = stripcslashes($_POST['title']);
    $title = mysqli_real_escape_string($con, $title);
    $content = $pathInS3;
    $query = "INSERT INTO `articles` (user_id, title, content, post_date) VALUES ('$user_id', '$title', '$content', CURDATE())";
    $result = mysqli_query($con, $query);
    if ($result) {
       $_SESSION['success'] = "Your post has been added";
        header('Location: ../add_post.php');
    } else {
        die('no nie smiga ' . mysqli_error($result));
    }
?>
