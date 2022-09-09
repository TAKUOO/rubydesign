<?php
$url_encode=urlencode(get_permalink());
$title_encode=urlencode(get_the_title()).'｜'.get_bloginfo('name');
?>

<ul class="sns-list flex">
    <li><a class="flowbtn1 fl_tw1" href="//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fab fa-twitter"></i></a></li>
    <li><a class="flowbtn1 fl_fb1" href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fab fa-facebook-f"></i></a></li>
    <li><a class="flowbtn1 fl_hb1" href="//b.hatena.ne.jp/entry/<?php echo $url_encode ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;"><i class="fas fa-bold"></i></a></li>
    <!-- <li><a class="flowbtn1 fl_li1" href="//social-plugins.line.me/lineit/share?url=<?php echo $url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;"><i class="fab fa-line"></i></a></li> -->
</ul>

