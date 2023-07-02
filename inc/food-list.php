<div id="food_list">
    <table>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Cost</th>
        </tr>

                    <?php
                        $sql = "SELECT * FROM food_list";
                        $result = $mysqli->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                    ?>

        <tr>
            <td><?php echo $row["name"];?></td>
            <td><?php echo $row["type"];?></td>
            <td><?php echo $row["cost"];?></td>
        </tr>

                    <?php 
                            }
                        } else {
                        echo "EMPTY";
                        }
                        $mysqli->close();
                    ?>
    </table>
</div>