<ul class="pagination">
    <?php
        /** @var \Application\Model\SearchResults $results */
    for ($i = 1; $i <= $results->getPage(); $i++) { ?>
    <li <?= ($i == $results->getPage() ? 'class="active"' : '') ?>><a href="<?= $this->url('search', array('query'=>$query, 'page'=>$i)) ?>"><?= $i ?></a></li>
    <?php } ?>
	<?php if($results->getHasMore()) { ?>
		<li><a href="<?= $this->url('search', array('query'=>$query, 'page'=>$results->getPage()+1)) ?>">Next Page</a></li>
	<?php } ?>
</ul>
