<?php 
include_once "partials/header.php"; 
$students = [
                ["Shadhin","017*******1","Dhaka"],
                ["Hasan","018*******2","Jhenaidaha"],
                ["Rocky","015*******3","Borishal"],
                ["Habib","016*******4","Rajshe"],
                ["Rakib","014*******5","Chottogram"],
                ["Hasib","013*******6","Khulna"]
            ];
            // echo $students[2][0];


?> 
    <div class="container contant-wraper">
        <?php include_once "partials/left-sidebar.php"; ?>
        <div class="main-contant floatleft">
            <article class="article clearfix">
                <h2 class="text-bold">
                    <img src="images/bars-icon.png" alt="images" class="icon-img floatleft">
                    <span>This is a Student list</span>
                </h2>
                <table border="2">
                    <tr>
                        <td>Name</td>
                        <td>Phon Number</td>
                        <td>Address</td>
                    </tr>
                    <?php for ($i=0; $i < count($students) ; $i++) { ?>
                        <tr>
                            <?php for ($j=0; $j < count($students[$i]); $j++) { ?>
                                <td><?php echo $students[$i][$j]; ?></td>
                            <?php  } ?>
                        </tr>
                      <?php  } ?>
                   

                </table>
                <?php //print_r($students);?>
            </article>
        </div>
        <?php include_once "partials/right-sidebar.php"; ?>
    </div>
   <?php include_once "partials/footer.php"; ?>