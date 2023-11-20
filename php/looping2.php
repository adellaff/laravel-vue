<table border="1"> 
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo $i . "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "Nama ke $i" . "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                for ($i = 10; $i >= 1; $i--) {
                    echo "Kelas $i" . "<br>";
                }
                ?>
            </td>
        </tr>
    </tbody>
</table>
