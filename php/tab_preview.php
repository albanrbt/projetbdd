<?php

function tab_preview(){

    include("connection.php");
echo " <link href=\"../projetbdd/CSS/calendar.css\" rel=\"stylesheet\">";

    $sql = "SELECT * FROM `seances`";
    $result = mysqli_query($con , $sql);

    echo "<tr class='semaine'>
                <td class='ordre' ></td>
                <td class='jour'>Lundi</td>
                <td class='jour'>mardi</td>
                <td class='jour'>Mercredi</td>
                <td class='jour'>Jeudi</td>
                <td class='jour'>Vendredi</td>
                <td class='jour'>Samedi</td>
        </tr>";

    for ($i=8; $i<=20; $i+=1){
        for ($h=0; $h<31; $h+=30){
            if ($h == 0 && $i+$h != 50){
                echo "<tr class = 'horaires'> <td class='heures'>".$i."h".$h."0</td>";}
            else if($i+$h != 50) {
                echo "<tr class = 'horaires'> <td class='heures'>".$i."h".$h."</td>";
            }

        if($i+$h != 50){
        for ($j=1; $j<=6; $j++){
            echo "<td class='champs'>";
            while ($rows = mysqli_fetch_array($result)){
                if (($rows['heure']=="$i")&&($rows['jour']=="$j")){
                    echo $rows['medicament']."  ".$rows['dosage']."mg <a href='remove_and_modify.php?id=".$rows['tid']."' class='close'></a></br>";
                }
            }
            echo "</td>";

            mysqli_data_seek($result, 0);
        }
        }
    }

    }
}

function medic_preview(){

    include("library/connection.php");

    $sql = "SELECT DISTINCT `medicament` FROM `tableau`";
    $result = mysqli_query($con, $sql);

    if ($result) {
        while ($rows = mysqli_fetch_array($result)) {
            echo "<form action='remove_and_modify.php' method='post'>
                    <td><input type='text' value='" . $rows['medicament'] . "' name='to_modify' readonly class='ancien_medicament'></td>
                    <td><input type='text' name='new_name_medic' required='required'></td>
                    <td><input type='submit' value='modify' name='modify' class='modify_btn'></td>
                    <td><input type='submit' value='delete' name='delete_medic' class='red_btn' onClick='removeRequired(this.form)'></td>
                </form>
            </tr>";
        }
    }
}