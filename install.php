<?php
if(isset($_POST['cmd'])){
    ob_start();
    ?>
[ Main settings ]
; Possible DATABASE_DRIVER: 'mysql', 'pgsql', 'dblib'.
; Please use 'dblib' for Microsoft SQL Server
DATABASE_DRIVER = <?=$_POST['DATABASE_DRIVER']?>

DATABASE_ENCODING = utf8
SAMPLE_DATA_LENGTH = 100

[ Primary connection params ]
DATABASE_HOST = <?=$_POST['DATABASE_HOST1']?>

DATABASE_PORT = <?=$_POST['DATABASE_PORT1']?>

DATABASE_NAME = <?=$_POST['DATABASE_NAME1']?>

DATABASE_USER = <?=$_POST['DATABASE_USER1']?>

DATABASE_PASSWORD = <?=$_POST['DATABASE_PASSWORD1']?>

DATABASE_DESCRIPTION = <?=$_POST['DATABASE_DESCRIPTION1']?>


[ Secondary connection params ]
DATABASE_HOST_SECONDARY = <?=$_POST['DATABASE_HOST2']?>

DATABASE_PORT_SECONDARY = <?=$_POST['DATABASE_PORT2']?>

DATABASE_NAME_SECONDARY = <?=$_POST['DATABASE_NAME2']?>

DATABASE_USER_SECONDARY = <?=$_POST['DATABASE_USER2']?>

DATABASE_PASSWORD_SECONDARY = <?=$_POST['DATABASE_PASSWORD2']?>

DATABASE_DESCRIPTION_SECONDARY = <?=$_POST['DATABASE_DESCRIPTION2']?> 
  
    <?php
    $content = ob_get_clean();
    file_put_contents('.environment.old',file_get_contents('.environment'));
    file_put_contents('.environment',$content);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Install</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</head>
<body class="container">
    <form method="post">
        <div class="row">
            <?php if(isset($_POST['cmd'])): ?>
                <div class="col-md-12">
                    <div class="alert alert-primary m-2" role="alert">
                    Configuration applied successfully, see the result in <a target="_blank" href="index.php">click here</a>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-12">
                <fieldset class="border m-2 p-2">
                    <legend class="w-auto">Main settings</legend>
                    <div class="form-group">
                        <label for="DATABASE_DRIVER">Database Driver</label>
                        <select name="DATABASE_DRIVER" id="DATABASE_DRIVER" class="form-control">
                            <option value="mysql">Mysql</option>
                            <option value="pgsql">PGsql</option>
                            <option value="dblib">SQL SERVER(dblib)</option>
                        </select>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <fieldset class="border m-2 p-2">
                    <legend class="w-auto">Primary</legend>
                    <div class="form-group">
                        <label for="DATABASE_DESCRIPTION1">Description</label>
                        <input name="DATABASE_DESCRIPTION1" id="DATABASE_DESCRIPTION1" value="Developer" type="text" class="form-control">
                    </div>                    
                    <div class="form-group">
                        <label for="DATABASE_HOST1">Host</label>
                        <input name="DATABASE_HOST1" id="DATABASE_HOST1" value="127.0.0.1" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="DATABASE_PORT1">Port</label>
                        <input name="DATABASE_PORT1" id="DATABASE_PORT1" value="3306" type="text" class="form-control">
                    </div>                   
                    <div class="form-group">
                        <label for="DATABASE_NAME1">DB Name</label>
                        <input name="DATABASE_NAME1" id="DATABASE_NAME1" value="test" type="text" class="form-control">
                    </div>     
                    <div class="form-group">
                        <label for="DATABASE_USER1">User</label>
                        <input name="DATABASE_USER1" id="DATABASE_USER1" value="root" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="DATABASE_PASSWORD1">Password</label>
                        <input name="DATABASE_PASSWORD1" id="DATABASE_PASSWORD1" value="" type="text" class="form-control">
                    </div>                                    
                </fieldset>
            </div>
            <div class="col-md-6 col-sm-12">
                <fieldset class="border m-2 p-2">
                    <legend class="w-auto">Secondary</legend>
                    <div class="form-group">
                        <label for="DATABASE_DESCRIPTION2">Description</label>
                        <input name="DATABASE_DESCRIPTION2" id="DATABASE_DESCRIPTION2" value="Production" type="text" class="form-control">
                    </div>                          
                    <div class="form-group">
                        <label for="DATABASE_HOST2">Host</label>
                        <input name="DATABASE_HOST2" id="DATABASE_HOST2" value="127.0.0.1" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="DATABASE_PORT2">Port</label>
                        <input name="DATABASE_PORT2" id="DATABASE_PORT2" value="3306" type="text" class="form-control">
                    </div>                   
                    <div class="form-group">
                        <label for="DATABASE_NAME2">DB Name</label>
                        <input name="DATABASE_NAME2" id="DATABASE_NAME2" value="test" type="text" class="form-control">
                    </div>     
                    <div class="form-group">
                        <label for="DATABASE_USER2">User</label>
                        <input name="DATABASE_USER2" id="DATABASE_USER2" value="root" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="DATABASE_PASSWORD2">Password</label>
                        <input name="DATABASE_PASSWORD2" id="DATABASE_PASSWORD2" value="" type="text" class="form-control">
                    </div>                       
                </fieldset>
            </div>
            <div class="col-2 offset-10 d-flex justify-content-end mb-4">
                <button name="cmd" value="save" class="btn btn-primary mr-2"> Save </button>
            </div>
        </div>
    </form>
</body>
</html>
