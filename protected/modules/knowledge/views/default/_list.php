<ul class="knowledgedata">
    <li>
        <div  class="knowledgeimg" style="background: url('/file/knowledge/<?php echo $data->image; ?>') center center;
              height:150px; background-size: auto 150px; border-bottom: 1px solid #ccc; background-repeat: no-repeat;">
            <a href="/knowledge/default/view/id/<?php echo $data->id; ?>"></a>
        </div> 

        <img src="/img/tri.png" class="arrow" /> 

        <div class="textpad">
            <h3><a href="/knowledge/default/view/id/<?php echo $data->id; ?>"><?php echo Tool::limitString($data->subject); ?></a></h3>
            <span>
                <?php
                echo Tool::limitString(preg_replace('/(<[^>]+) style=".*?"/i', '$1', ereg_replace('&nbsp;', ' ', $data->detail)), 150);
                ?>
            </span>
        </div>
    </li>
</ul>
