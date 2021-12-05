<?php $this->start('content'); ?>
<div class="d-flex justify-content-between align-items-center">
   <h2>Vos articles</h2>
   <a class="btn btn-primary" href="<?= ROOT?>admin/article/new">Nouvelle Article</a>
</div>

<div class="poster">
    <table class="table table-striped table-hover table-sm">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date de création</th>
                <th>Status</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->articles as $article): ?>
                <tr>
                    <td><?= $article->title?></td>
                    <td><?= date("M j, Y ~ g:i a", strtotime($article->created_at))?></td>
                    <td><?= $article->status?></td>
                    <td class="text-right">
                        <a href="<?=ROOT?>admin/article/<?=$article->id?>" class="btn btn-sm btn-info">Editer</a>
                        <button class="btn btn-sm btn-danger" onclick="deleteArticle('<?=$article->id?>')">Suprimmer</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php $this->partial('partials/pager');?>
</div>

<script>
    function deleteArticle(id){
        if(window.confirm("Est-tu sûr de vouloir supprimer cet article? Cela ne peut pas être annulé!")){
            window.location.href = `<?=ROOT?>admin/deleteArticle/${id}`;
        }
    }
</script>

<?php $this->end(); ?>