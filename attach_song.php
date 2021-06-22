<?php
    require 'db_configuration.php';
    $movie_id = $_POST['movie_id'];
    $total_elements = $_POST['total_elements'];
    for($i=1 ; $i<$total_elements ; $i++){
      if(!empty($_POST['song_id'.$i.''])){
      $song_id[$i] = $_POST['song_id'.$i.''];
      $query = "INSERT INTO `movie_song`(`id`, `movie_id`, `song_id`) VALUES ('','$movie_id','$song_id[$i]')";
    $result = mysqli_query($db,$query);
    }
    else{
      // break;
    }
        // I am not seeing any problems regarding to how  we are finishing up this iteration.  After careful look and some considerations, I believe this should work.  
    }
     header("location:add_song.php?movie_id=$movie_id");

?>
