<!doctype html>
<html>
    <head>
        <title>Admin Update</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <link rel="stylesheet" href= "css/style.css">        
        <script src="jquery.js"></script>
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
            <form class="form my-5 p-4 rounded" data-aos="zoom-in" action="do_adminupdate.php" method="post">
            <h2 class="text-center display-5" style="color:white;">Update Admin Data</h2>
                <div class="form-group my-4">
                    <label for="fname">New First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
                </div>
                <div class="form-group my-4">
                    <label for="lname">New Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
                </div>
                <?php
                    if(!isset($_COOKIE['loggedin']))
                        header('Location:adminlogin.php');
                    else if(isset($_GET['rid'])){
                        $id = $_GET['rid'];
                        if($id == 2){
                            echo "<div class=\"alert alert-danger alert-dismissible fade show\" id=\"email-alert\" role=\"alert\">
                                <strong>oops! </strong> Something Went Wrong <br> Try Again.
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>";
                        }
                    }
                ?>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary rounded-pill px-3 fw-500">Save Changes</button>  
                    <a href="showadmin.php" class="btn btn-outline-primary rounded-pill" role="button"><i class="fa-solid fa-arrow-left"></i> Back</a>
                </div>
            </form>
        </div>
        <?php
            if(isset($_GET['rid'])){
                $id = $_GET['rid'];
                if($id == 1){
                    echo "
                        <div class=\"container pop-up-box d-flex justify-content-center data-aos=\"zoom-in\" data-aos-delay=\"2000\" mt-5\">
                            <div class=\"pop-up text-center p-2\">
                                <img src=\"logos/tick1.png\" class=\"tick-img\" style=\"width:50%;\" alt=\"tick-logo\">
                                <div class=\"pop-up-body\">
                                    <h3 class=\"pop-up-title\">Updation Successfull!</h3>
                                    <p class=\"pop-up-desc\">Admin data updated succesfully.</p>
                                    <div class=\"my-4 d-flex justify-content-center\">
                                        <a href=\"showadmin.php\"><button type=\"submit\" class=\"btn btn-danger updated rounded-pill px-5 fw-bold\">Ok</button></a>  
                                    </div>
                                </div>
                            </div>
                        </div>";
                    }
                }
            ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 500
            });
        </script>
    </body>
</html>
