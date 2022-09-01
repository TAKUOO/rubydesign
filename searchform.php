<div class="searchArea">
    <div class="container-2 flex">
        <form action="<?php echo home_url(); ?>" method="get" class="seachform">
            <button type="submit" value="" class="icon"><i class="fa fa-search"></i></button>
            <input type="text" id="search" value="<?php the_search_query(); ?>" name="s" placeholder="例: サービス　始め方" />
        </form>
    </div>
</div>