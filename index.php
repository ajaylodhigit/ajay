<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PHP Application - AWS Elastic Beanstalk</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster+Two" type="text/css">
    <link rel="icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <link rel="shortcut icon" href="https://awsmedia.s3.amazonaws.com/favicon.ico" type="image/ico" >
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/styles.css" type="text/css">
</head>
<body>
    <section class="">
        <h1>It's our ContinuumInnovation PHP test pagessss!!</h1>
        <p>One of the best IT industry >>> <em>CIPL</em> Latest&nbsp;CloudWorld</p>
        <p>We are tested at PHP version <?= phpversion() ?></p>
        <p>This environment is launched with Elastic Beanstalk PHP Platform.........</p>
    </section>

    <section class="instructions">
        <h2>Know 12345665665About Us?</h2>
        <ul>
            <li><a href="">ContinuumInnovations_updated2022</a></li>
        </ul>

        <h2>Also follow</h2>
        <ul>
            <li><a href="https://github.com/aws/aws-sdk-php">Official Site</a></li>
        </ul>
    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
