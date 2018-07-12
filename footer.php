<div id="footer">
<!-- お問い合わせ start --> 
<div class="wrap_contact">
  <div class="contact_area">
    <h2>Contact | <span>お問い合わせ</span></h2>
      <p class="txt_ctc">デザインの悩み、ご依頼、事業の流れや料金などの詳しいご相談は、お問い合わせフォームをご活用ください。</p>
        
        <div class="box_ctc">
          <div class="txt_entry">
            <p>
              <span>お仕事のご依頼・ご相談</span>
              <span class="m">(受付時間：10:00 - 18:00 日祝日除く)</span>
            </p>
          </div>

          <div class="btn_tell">
            <a href="tel:092232188">
                <span>092-23-2188</span>
            </a>
          </div>

          <div class="btn_form">
            <a href="/contact/">
              <span>ご相談・お問い合わせ</span>
            </a>
          </div>
        </div>
  </div>
</div>
<!-- お問い合わせ end --> 

<!-- フッターinfo start --> 
<div class="ftrinfo_area">
  <div class="clear_fix">
    
    <div class="ftr_sns_box box_r clear_fix">
      
      <div class="ftr_fb_area box_l">
        <div class="fb-page" data-href="https://www.facebook.com/RUBY-DESIGN-276841105839928/" data-tabs="timeline" data-width="280" data-height="300" data-small-header="true" data-adapt-container-width="false" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/RUBY-DESIGN-276841105839928/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RUBY-DESIGN-276841105839928/">Smoll - webデザイン</a></blockquote></div>
      </div>
      
      <div class="ftr_twr_area box_r">
        <a class="twitter-timeline" data-lang="ja" data-width="280" data-height="300" data-theme="light" data-link-color="#E81C4F" href="https://twitter.com/ruby_matsui?ref_src=twsrc%5Etfw">Tweets by ruby_matsui</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
      </div>
    
    </div>
   
    <div class="ftr_info_box box_l"> 
      <p class="ftr_logo"><span>RUBYDESIGN.</span></p>
      <p class="txt_add"><span>ルビーデザイン</span><span>〒812-0401</span><span>福岡市博多区吉塚3丁目5-20-807</span>  <!-- tel. 092-23-2188  --><span> mail. thankyou@rubydesign.jp</span></p>
      <ul class="sitemap_r">
        <li><a href="/about/">事務所について</a></li> 
        <li><a href="/privacy/">プライバシーポリシー</a></li>
      </ul>
    </div>
  
  </div>
</div>
 <!-- フッターinfo end --> 
<p class="txt_copyright">
    Copyright &copy;
    <script type="text/javascript">document.write(new Date().getFullYear());</script>
    <a href="<?php echo home_url();?>" target="blank">RUBYDESIGN</a>. All rights reserved.
</p>
</div>

<div class="ftr_fixbtn">
  <p><a href="/contact/" target="_blank"><span>ご相談・お問い合わせ</span></a></p>
</div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">
$(function(){
   $(window).on('load',function(){
     $("#fv_logo_ruby .icn_logo_ruby").fadeIn('slow');
     $("#fv_logo_ruby .icn_logo_ruby").delay(1300).fadeOut('slow');
     $("#fv-loading-wrap").delay(2500).fadeOut('slow');
   });
   function loaderClose(){
     $("#fv-loading-wrap").fadeOut('slow');
   }
   setTimeout(loaderClose,8000);
});
</script>

<?php wp_footer(); ?>
</body>
</html>