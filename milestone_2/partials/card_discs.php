<div id="root">
    <div class="cards">
        <div class="card" v-for="album in albums">
            <img :src="album['poster']" alt="">

            <span class="song_title"> {{album.title}} </span>
            <span class="author"> {{album.author}} </span>
            <span class="year">{{album.year}} </span>
        </div>
    </div>
</div>