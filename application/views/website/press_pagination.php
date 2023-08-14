<?php
	$pageno = $pagination["page"];
	$total_count = $pagination["total_count"];
	$lastpage = $pagination["last_page"];

	if ($pageno == 1) {
        $startLoop = 1;
        $endLoop = ($lastpage < 5) ? $lastpage : 5;
    } else if ($pageno == $lastpage) {
        $startLoop = (($lastpage - 5) < 1) ? 1 : ($lastpage - 5);
        $endLoop = $lastpage;
    } else {
        $startLoop = (($pageno - 3) < 1) ? 1 : ($pageno - 3);
        $endLoop = (($pageno + 3) > $lastpage) ? $lastpage : ($pageno + 3);
    }
?>
<ul class="pagination justify-content-center">
    <?php  if ($pageno > 1) { ?>
    <li class="page-item">
      <a class="page-link" href="javascript:void(0)" data-page="<?php echo ($pageno - 1); ?>" tabindex="-1">Previous</a>
    </li>
    <?php } for ($i = $startLoop; $i <= $endLoop; $i++) {
        if ($i == $pageno) {
    ?>
    <li class="page-item"><a class="page-link selected" href="javascript:void(0)"><?php echo $i; ?></a></li>
    <?php }else{ ?>
    <li class="page-item"><a class="page-link" data-page="<?php echo $i; ?>" href="javascript:void(0)"><?php echo $i; ?></a></li>
    <?php } } if ($pageno < $lastpage) { ?>
    <li class="page-item">
      <a class="page-link" data-page="<?php echo ($pageno + 1); ?>" href="javascript:void(0)">Next</a>
    </li><?php } ?>
</ul>