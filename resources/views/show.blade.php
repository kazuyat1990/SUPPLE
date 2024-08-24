<x-app-layout>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    @endpush

    
        <div class="">
            <img src="/img/other/page-kv.jpg" alt="BLOG & NEWS">
        </div>
 
     <div class="blog-content">
        <div class="post-list">
           
                <div class="post_show">
                    <div class="">
                        <img class="post_show_img" src="{{ asset('/' . $post['image'] )}}" alt=post >
                    </div>
                    <div class="post-text">
                        <p class="post-text-date english-text">{{ $post['created_at'] }}</p>
                        <p class="post-text-title">{{ $post['title'] }}</p>
                        <p class="post-text-contents">{{ $post['content'] }}</p>
                    </div>
                </div>
            
        </div>
    </div>






</x-app-layout>