// const music= new Audio('music/06_qafirana.mp3');
// music.play();

// music bajne pe ek poster chahiye ... kuch title wagerah
const songs=[
    {
        id: 1,
        songName: `Hello <br><div class="subtitle">Adele</div>`,
        poster: "img/01_hello.jpeg"
    },
    {
        id: 2,
        songName: `On my way <br><div class="subtitle">Alan Walker</div>`,
        poster: "img/02_on_my_way.jpeg"
    },
    {
        id: 3,
        songName: `Tu Jhoom<br><div class="subtitle">Abida Praveen, Naseebo Lal</div>`,
        poster: "img/03_tu_jhoom.jpeg"
    },
    {
        id: 4,
        songName: `runaway <br><div class="subtitle">Aurora</div>`,
        poster: "img/04_runaway.jpeg"
    },
    {
        id: 5,
        songName: `someone like you <br><div class="subtitle">Adele</div>`,
        poster: "img/05_someone_like_you.png"
    },
    {
        id: 6,
        songName: `Qafirana <br><div class="subtitle">Arijit Singh, Nikhita</div>`,
        poster: "img/06_qafirana.jpg"
    },
    {
        id: 7,
        songName: `Deva Deva<br><div class="subtitle">Arijit singh, Jonita Gandhi</div>`,
        poster: "img/07_deva_deva.jpg"
    },
    {
        id: 8,
        songName: `Doobey<br><div class="subtitle">Lothika Jha</div>`,
        poster: "img/08_doobey.jpg"
    },
    {
        id: 9,
        songName: `Kun Faya Kun<br><div class="subtitle">AR Rehman, Javed Ali, Mohit Chauhan</div>`,
        poster: "poster/9.jpeg"
    },
    {
        id: 10,
        songName: `Lukka chupi bahut hui<br><div class="subtitle">Lata Mangeshkar, AR Rehman</div>`,
        poster: "img/10_lukka_chupi_bahut_hui.jpeg"
    },
    {
        id: 11,
        songName: `kon disha me <br><div class="subtitle">Varsha singh Dhanoa</div>`,
        poster: "poster/11.jpeg"
    },
    {
        id: 12,
        songName: `Agar tum sath ho<br><div class="subtitle">Alka Yagnik,Arijit singh</div>`,
        poster: "poster/12.jpeg"
    },
    {
        id: 13,
        songName: `Tere hawale <br><div class="subtitle">Arijit singh, Shilpa Rao</div>`,
        poster: "poster/13.jpeg"
    },
    {
        id: 14,
        songName: `Chandelier<br><div class="subtitle">Sia</div>`,
        poster: "poster/14.jpeg"
    },
    {
        id: 15,
        songName: `Nazm Nazm<br><div class="subtitle">Arko</div>`,
        poster: "img/15_nazm_nazm.jpeg"
    },
    {
        id: 16,
        songName: `Aise Kyun<br><div class="subtitle">Rekha Bhardwaj</div>`,
        poster: "img/16_aise_kyun.jpeg"
    },
    {
        id: 17,
        songName: `Falak tak<br><div class="subtitle">Udit Narayan, Mahalakshmi Iyer</div>`,
        poster: "poster/17.jpeg"
    },
    {
        id: 18,
        songName: `Ek din aap yun<br><div class="subtitle">Alka Yagnik, Kumar Sanu</div>`,
        poster: "img/18_ek_din_aap_yun.jpeg"
    }
]

// made array of items present in songitem class .... changes the image with poster... and also subtilte and title
Array.from(document.getElementsByClassName('songItem')).forEach((e,i)=>{
    e.getElementsByTagName('img')[0].src=songs[i].poster;
    e.getElementsByTagName('h5')[0].innerHTML=songs[i].songName;
})

// song-side-play

// using left-right button of the popular songs
let pop_song_left=document.getElementById('pop_song_left');
let pop_song_right=document.getElementById('pop_song_right');
let pop_song=document.getElementsByClassName('pop_song')[0];

// to use the left-right button of popular songs
pop_song_right.addEventListener('click',()=>{
    pop_song.scrollLeft+=330;
})

pop_song_left.addEventListener('click',()=>{
    pop_song.scrollLeft-=330;
})

// using left-right button of the popular artists
let pop_art_left=document.getElementById('pop_art_left');
let pop_art_right=document.getElementById('pop_art_right');
let item=document.getElementsByClassName('item')[0];

pop_art_right.addEventListener('click',()=>{
    item.scrollLeft+=330;
})

pop_art_left.addEventListener('click',()=>{
    item.scrollLeft-=330;
})




