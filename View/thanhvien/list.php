<div class="danhsach">
    <h3 style="text-align: center; margin-top: 50px; color: #fff; background-color:green">Danh sách thành viên - Quản lý thành viên</h3>
    <table border="1px" style="margin: auto; min-width: 800px">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên thành viên</th>
                <th>Năm sinh</th>
                <th>Quê quán</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt=1;
                foreach($data as $value) {

                
            ?>
            <tr>
                <td><?php echo $stt; ?></td>
                <td><?php echo $value['hoten']; ?></td>
                <td><?php echo $value['namsinh']; ?></td>
                <td><?php echo $value['quequan']; ?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
            <?php
                $stt++;
                }
            ?>
        </tbody>
    </table>
</div>