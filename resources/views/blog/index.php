<ul >
    <?php foreach ($list as $link): ?>
        <li>
            <div class="row">
                <div class="" >
                    <small>【<?=$link["type"]?>】</small>
                </div>
                <div class="" >
                    <a href="<?= $link['href'] ?>" style="text-decoration: none;color: #000;:visited:#fff;"><small><?= $link['title'] ?></small></a>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
