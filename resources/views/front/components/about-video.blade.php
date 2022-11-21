<div class="video-sec vid-bg">
    <div class="card">
        <div class="card-body">
            <a href="{{ $item->link }}" class="video-thumbnail" data-fancybox="">
                <div class="play-icon">
                    <i class="fa-solid fa-play"></i>
                </div>
                <img class="img-fluid video-thumb" src="{{ asset('/') }}assets/images/thumbnail/{{ $item->thumbnail }}"
                  alt="">
            </a>
        </div>
    </div>
</div>