<div class="comman-space bdr-bottom-line">
    <div class="instruct-review-blk ">
        <div class="review-item">
            <div class="row">
                <div class="col-lg-2 col-12"><img src="{{ asset('/assets/images/book') }}/{{ $item->image }}" alt="img"
                      class="img-fluid">
                </div>
                <div class="col-lg-10 col-12">
                    <div class="instructor-wrap border-0 m-0">
                        <div class="about-instructor">
                            <div class="instructor-detail">
                                <h5><a href="instructor-profile.html">{{ $item->name }}</a></h5>
                                <p> <span><strong>Price :</strong></span>$ {{ $item->price }}</p>
                            </div>
                        </div>
                    </div>
                    <p class="rev-info">“ {{ $item->description }} “</p>
                    <a href="{{ route('book-cart',$item->id) }}" class="btn btn-success"> Buy Now</a>

                    @if($item->link == null)

                    @else
                    <a href="{{ $item->link }}" class="btn btn-primary">Alternative</a>
                    @endif

                </div>

            </div>

        </div>
    </div>
</div>
