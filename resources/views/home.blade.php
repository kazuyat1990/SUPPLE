<x-app-layout>

   
        <div class="mainvisual">
            <img class="main_img" src="/img/top/bg-top-kv 1.jpg" alt="main visual">
        </div>
    <div class=main-content>
        <h2 class="h2-concept">CONCEPT</h2>
        <div>
            <img class="concept-img" src="/img/top/pic-top-consept 2.jpg" alt="main visual">
        </div>
        <div class="concept-text">
            <p class="text-20">一杯一杯まごころをこめて調製し、新鮮な香りと豊かな 風味のコーヒーを提供します。</p>
            <div class="p-text-2">
                <p>親譲りの無鉄砲で小供の時から損ばかりしている。<br>
                小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。<br class="br_text">
                なぜそんな無闇をしたと聞く人があるかも知れぬ。</p>
            </div>
        </div>
    
        <div class="concept-button">
            <a href="#" class="button-bk english-text">MORE</a>
        </div>
    </div>

    <div class="menu-container">
            <h2 class="menu-title">MENU</h2>
        <div class="menu-table">

            <div class="menu">
                <div>
                    <h3 class="h3-menu">DRIP</h3>
                </div>
                <div class="cafe-menu">
                    <div>エントランスブレンド</div>
                    <div>¥800</div>
                </div>
                <div class="cafe-menu">
                    <div>エチオピア ナチュラル</div>
                    <div>¥800</div>
                </div>
                <div class="cafe-menu"> 
                    <div>グアテマラ</div>
                    <div>¥800</div>
                </div>
                <div class="cafe-menu"> 
                    <div>ブラジル</div>
                    <div>¥800</div>
                </div>
                <div class="cafe-menu">
                    <div>タンザニア</div>
                    <div>¥800</div>
                </div>
                <div class="cafe-menu">
                    <div>フスクブレンド</div>
                    <div>¥800</div>
                </div>
            </div>

            <div class="menu">
                <div>
                    <h3 class="h3-menu">ESPRESSO</h3>
                </div>
                <div class="cafe-menu">
                    <div>エントランスブレンド</div>
                    <div>¥800</div>
                </div>
                <div class="cafe-menu">
                    <div>エチオピア ナチュラル</div>
                    <div>¥800</div>
                </div>
                <div class="cafe-menu"> 
                    <div>グアテマラ</div>
                    <div>¥800</div>
                </div>
                <div class="cafe-menu"> 
                    <div>ブラジル</div>
                    <div>¥800</div>
                </div>
                <div class="cafe-menu">
                    <div>タンザニア</div>
                    <div>¥800</div>
                </div>
                <div class="cafe-menu">
                    <div>フスクブレンド</div>
                    <div>¥800</div>
                </div>
            </div>
        </div>
        <div class="button-menu">
            <a href="#" class="button-wt english-text">MORE</a>
        </div>
    </div>
    <div class="shop-content">
        <div>
            <h2 class="shop-title">SHOP LIST</h2>
        </div>
        <div class="shop-text">
            <p>首都圏を中心に6店舗展開しています。<br>
            お近くの店舗でお待ちしています。</p>
        </div>
        
        <div class="shop-list">
            <a href="#" class="shop-item">北千住店</a>
            <a href="#" class="shop-item">代官山店</a>
            <a href="#" class="shop-item">新宿店</a>
            <a href="#" class="shop-item">銀座店</a>
            <a href="#" class="shop-item">渋谷店</a>
            <a href="#" class="shop-item">八王子店</a>
        </div>
        <div class="button-shop">
            <a href="#" class="button-bk english-text">MORE</a>
        </div>
    </div>

    <div class="separate">
        <img src="/img/top/bg-top-separate 1.jpg" alt="main visual">
    </div>

    <div class="blog-content">
        <h2 class="h2-blog">BLOG & NEWS</h2>

    
        <div class="post-new">
            @foreach ($posts as $post)
                <a href="{{ route('blog.show',['id' => $post['id']]) }}" class="post-card">
                    <div class="post-img-container">
                        <img class="post-img" src="{{ $post->image }}" alt=post >
                    </div>
                    <div class="post-text">
                        <p class="post-text-date english-text">{{ $post->created_at->format('Y/m/d') }}</p>
                        <p class="post-text-content">{{ $post->title }}</p>
                    </div>
                </a>
            @endforeach
        </div>
            
        <div class="button-blog">
            <a href="{{ route('list') }}" class="button-bk english-text">MORE</a>
        </div>
    </div>

</x-app-layout>