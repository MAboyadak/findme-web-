<div class="row posts">

    <div class="col-sm-9">
        <p> Name : <?php echo $post['fullName']; ?> </p>
        <p> Age :<?php echo $post['age']; ?> </p>
        <p> City : <?php echo $post['city']; ?> </p>
        <p> Area : <?php echo $post['area']; ?> </p>
        <p> Gender : <?php echo $post['gender']; ?> </p>
        <p> Parent Number : <?php echo '010' ?> </p>
        <p> More Details :<?php echo $post['personData']; ?> </p>
    </div>   

    <div class="col-sm-3 img-col">
        <img src="/uploads/<?php echo $post['img1']; ?>" class="img-fluid rounded" alt="">
    </div>

</div>
<hr>
