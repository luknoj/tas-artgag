<?php
	require 'vendor/autoload.php';
	require 'config.php';
	session_start();

	use Aws\S3\S3Client;
	use Aws\S3\Exception\S3Exception;

	$bucketName = 'webappuam';
	$IAM_KEY = 'AKIAI7QPJUJ2TV73YPBA';
	$IAM_SECRET = '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';
	$title = "";
	$content = "";
	$sucess = "";

	try {
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
	} catch (Exception $e) {

		die("Error: " . $e->getMessage());
	}

	if (isset($_POST['submit-post'])) {
	$user_id = $_SESSION['user_id'];
	$title = stripcslashes($_POST['title']);
	$title = mysqli_real_escape_string($con,$title);	
	$keyName = 'test_example1/' . basename($_FILES["fileToUpload"]['name']);
	$pathInS3 = 'https://s3.us-east-2.amazonaws.com/' . $bucketName . '/' . $keyName;

	try {

		$file = $_FILES["fileToUpload"]['tmp_name'];
		$s3->putObject(
			array(
				'Bucket'=>$bucketName,
				'Key' =>  $keyName,
				'SourceFile' => $file,
				'StorageClass' => 'REDUCED_REDUNDANCY',
				'ACL' => 'public-read'
			)
		);
	} catch (S3Exception $e) {
		die('Error:' . $e->getMessage());
	} catch (Exception $e) {
		die('Error:' . $e->getMessage());
	}
	$content=$pathInS3;
	$query = "INSERT INTO articles (user_id, title, content, post_date) VALUES ('$user_id', '$title', '$content', CURDATE())";
	if ($result) {
		$success="Your post has been added";
		header('Location: ./add_post.php');
	  }else {
		die('no nie smiga ' . mysqli_error());
	  }
	}else{}
	
	// Now that you have it working, I recommend adding some checks on the files.
	// Example: Max size, allowed file types, etc.
?>
