
    @foreach ($result as $post)
        <div class="post-list">
            <p>{{$post['author']}}</p>
        </div>
    @endforeach

    <div>
        <h2>No posts found</h2>
    </div>
