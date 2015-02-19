<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Log In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            input{
                border-radius: 10px;
            }
/*            .width{
                width:30%;
            }    */
            .glyphicon{
                color:#CC3366;
            }
        </style>
    </head>
    <body>
        <?php //require_once 'head.php';?>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3"> 
                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                    <form role="form">
                        <fieldset>
                        <div class="form-group col-md-12">
                            <div class="form-group col-md-1">
                                <i class="glyphicon glyphicon-envelope"></i> </div>
                                <div class="form-group col-md-11">
                            <input type="text" id= "email" class="form-control width" placeholder="Enter Your Email Address">
                                
                                </div> </div>
                         <div class="form-group col-md-12">
                            <div class="form-group col-md-1">
                                <i class="glyphicon glyphicon-pencil"></i> </div>
                                <div class="form-group col-md-11">
                            <input type="text" class="form-control width" placeholder="Enter Your Password">
                                </div> </div>
                            <div class="form-group col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-lg btn-default">LogIn</button>
                            </div>
                        </fieldset>
                    </form>
                    </div>
                    </div>
                </div>
            </div> 
        </div>
    </body>
</html>
