<div>
    <table class="table">
        <tr>
            
            <th>Имя</th>
            <th>e-mail</th>
            <th>телефон</th>
            <th>Привью текста</th>
            <th>Действия</th>
        </tr>
        <?php foreach($MODEL as $key => $value): ?>
          <?php foreach($value as $k => $v): ?>
          <tr>
            <td><?= $v["user"] ?></td>
            <td><?= $v["email"]?></td>
            <td><?= $v["phone"]?></td>
            <td><?= substr(strip_tags($v["text"]), 0, 50) ?></td>
            <td>
                <a href="/admin/feedback/Look/<?= $k ?>">Прочитать</a>
                <a href="/admin/feedback/delete/<?= $k ?>">Удалить</a>
            </td>
          </tr>
          <?php endforeach; ?>
        <?php endforeach; ?>
        <tfoot>
            <tr>
                <td colspan="4">
                    <a href="/admin/feedback/edit">Добавить</a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

