<x-app-layout>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/list.css') }}">
    @endpush

    
        <div class="">
            <img src="/img/other/page-kv.jpg" alt="BLOG & NEWS">
        </div>
 
     <div class="blog-content">
        <div class="post-list">
            @foreach ($posts as $post)
                <div class="post-card">
                    <div class="post-img-container">
                        <img class="post-img" src="{{ $post->image }}" alt=post >
                    </div>
                    <div class="post-text">
                        <p class="post-text-date english-text">{{ $post->created_at->format('Y/m/d') }}</p>
                        <p class="post-text-content">{{ $post->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>






</x-app-layout>