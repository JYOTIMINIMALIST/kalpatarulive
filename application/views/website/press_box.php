<?php if(isset($press_news) && !empty($press_news)):
foreach($press_news as $pressKey=>$pressVal): ?>
<div class="col-md-6">
    <div class="pressBox text-center">
        <div class="pressDate History-Pro mb-4"><?php echo date('F d, Y',strtotime($pressVal->article_date)); ?></div>
        <p class="pressDesc mb-4"><?php echo stripslashes($pressVal->title); ?></p>
        <?php 
            $link = $pressVal->external_link;
            if(isset($pressVal->pdf_file) && !empty($pressVal->pdf_file)){
                $link = $pressVal->pdf_file;
            }
        ?>
        <a class="icon-button d-inline-flex" target="_blank" href="<?php echo $link; ?>">
            <div class="round-button">
                <div class="circle"></div><i class="kalpataru-icon-arrow-right"></i>
            </div>READ MORE
        </a>
    </div>
</div>
<?php endforeach;
endif; ?>