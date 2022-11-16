<a href="{{ route('category.courses',$item->id) }}">
    <div class="feature-box text-center ">
        <div class="feature-bg">
            <div class="feature-header">
                <div class="feature-cont">
                    <div class="feature-text">{{ $item->name }}</div>
                </div>
                <div class="feature-icon">
                    <img src="{{ asset('/') }}assets/images/category/{{ $item->image }}" alt="">
                </div>

            </div>
            {{-- <p>45 Instructors</p> --}}
        </div>
    </div>
</a>
