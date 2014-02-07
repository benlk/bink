<?php ?>
<div id="disqus_thread"></div>
<!-- Disqus comment code from http://disqus.com/admin/universalcode/ -->
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'benlk'; // required: replace example with your forum shortname

    /* * * More information available at http://help.disqus.com/customer/portal/articles/472098-javascript-configuration-variables */
    var disqus_identifier = <?php echo( "'" . $slug . "'" ) ?>; // optional . this line sets a unique identifier that disqus uses to track comments by post. Change it to something else if you want to. 
    var disqus_title = <?php echo( "'" . $post_title . "'" ) ?>; // this sets the post title, for Disqus\' purposes.
    var disqus_url = <?php echo ( "'" . $post_link . "'" ) ?>; // this sets the post URL, for Disqus\' purposes. 
    var disqus_category_id = <?php echo ( "'" . $post_category . "'" ) ?>; // this sets the post category, for Disqus\' purposes.

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>