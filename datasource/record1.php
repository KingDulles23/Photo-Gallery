<?php

// This recordset is for the first picture


$content = array  // an array is a set of related information. Ex: multiple pieces of info about one photo
  (

    array (   // the first array inside "content":: child array #1
      'id'                => "1",
      'metatitle'         => "Pendfield Rooftop",
      'metadescription'   => "Pendfield Rooftop at John Abbott",
      'h1title'           => "Pendfield Rooftop at john Abbott",
      'imagepath'         => "/img/002-Addoquaye-Dulles-01-1.jpg",
      'caption'           => "Portrait of G.W.D student walking inside the Penfield building",
      'copyright'         => "&copy Dulles Addoquaye, 2021"),  // last line ends with a ),
    // last line ends with a ),

);
?>  


<header>
    <nav>
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/datasource/nav.php"; 
        // require the navigation file to be loaded here
        ?>
    </nav>
</header>