@extends('main.master')


@section('content')
<div class="container">
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <p>Artikel dibuat oleh : </p>
         <h4 class="border-bottom border-gray pb-2 mb-0">
         <a href="{{ url('/profile/' . $articles->user_id . '/profile') }}">{{ $articles->getPostUsername() }}</a></h4>
          <br>
           <h2><center>{{ $articles->judul_content }}</center></h2>
               <center><img src="/storage/app/public/images/'.{{ $articles['image'] }}" height="30px" width="30px"></center>
            <div class="media text-muted pt-3">
               <br>
                {{ $articles->content }}
      </div>
</div>

<div class="my-3 p-3 bg-white rounded shadow-sm">
        <h4 class="border-bottom border-gray pb-2 mb-0">Diskusi</h4>
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    
var disqus_config = function () {
this.page.url = '{{ Request::url() }}'  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier ='{{ $articles->id }}' // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
    
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://forum-smk-bpi.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>                         
</div>
@endsection