<?php
$this->debug($join);
?>
<ul>
<?php
foreach ($join as $value){
    if($value->answer == NULL){
        echo '<li> L\'utilisateur :'. $value->name . ' ' .$value->firstname.'</li>';

        echo '<li> A poser la question suivante ->' . $value->message . '</li>';
        echo '<li><a href="index.php?page=answer">' . $value->importance = 'La traité'. '</a><li>';

    }

}
?>
</ul>
