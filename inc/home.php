<?php if (isset($_SESSION['valid'])): ?>
<h1>Home
    <span class="pull-right">
        <a class="btn btn-success" href="?home" title="Refresh jSonStats">
            <i class="glyphicon glyphicon-refresh"></i> Refresh jSonStats
        </a>
    </span>
</h1>
<?php endif; ?>

<!-- Fash Message -->
<?php if(isset($_SESSION['flash'])): ?>
    <?php foreach($_SESSION['flash'] as $type => $message): ?>
        <div class="alert alert-<?php echo $type; ?> alert-anim">
            <?php echo $message; ?>
        </div>
    <?php endforeach; ?>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>

<!-- Login Form -->
<?php if (!isset($_SESSION['valid'])): ?>
<form class="form-signin" role="form" action="?login" method="post" >
<h2 class="form-signin-heading">Please login</h2>
    <label for="username" class="sr-only">User name</label>
    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
    <label for="password" class="sr-only">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>        
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">
        <i class="glyphicon glyphicon-log-in"></i> Log-in
    </button>
</form>
<?php endif; ?>

<?php 
function curl_get_contents($url) {
	$ch = curl_init();
	$timeout = 1;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

if (isset($_SESSION['valid'])) 
{
    // $json = @file_get_contents($jsonURL, FILE_USE_INCLUDE_PATH);
    $json = curl_get_contents($jsonURL);

    if ($json)
    {
        $json = json_decode($json, true);
        
        if (isset($json['Version']))
        {
            echo "<div>Simulator : ".$json['Version']."</div>";
            echo '<div class="table-responsive">';
            echo '<table class="table table-hover">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Name</th>';
            echo '<th class="text-right">Value</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            foreach ($json as $key => $value)
            {
                if ($key <> "Version")
                {
                    echo '<tr>';
                    echo '<td><strong>'.$key.'</strong></td>';
                    echo '<td class="text-right"><span class="label label-primary">'.$value.'</span></td>';
                    echo '</tr>';
                }
            }

            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        }

        else
        {
            echo '<div class="alert alert-success alert-anim-off">';
            echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
            echo '<i class="glyphicon glyphicon-ok"></i> Server is being started ...';
            echo '</div>';
        }
        unset($sql);
    }

    else
    {
        echo '<div class="alert alert-danger alert-anim-off">';
        echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
        echo '<i class="glyphicon glyphicon-remove"></i> Server is currently done ...';
        echo '</div>';
    }
}
?>
