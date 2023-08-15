const music= new Audio('music/1.mp3');

// wave functioning
let wave= document.getElementById('wave');
// play button
let masterPlay = document.getElementById('masterPlay');
masterPlay.addEventListener('click',()=>{
    if(music.paused||music.currentTime<=0){
        music.play();
        wave.classList.add('active1');
        masterPlay.classList.remove('bi-play-fill'); 
        masterPlay.classList.add('bi-pause-fill');
        //play button is replaced with pause button
    }//music play and wave started
    else{
        music.pause();
        wave.classList.remove('active1');
        masterPlay.classList.remove('bi-pause-fill');
        masterPlay.classList.add('bi-play-fill');
    }//music paused and wave stopped
})

// background upon hover 
const makeAllBackground = ()=>{
    Array.from(document.getElementsByClassName('songItem')).forEach((el)=>{
       el.style.background='rgb(105,105,105,.0)';
    })
}

const makeAllplays = ()=>{
    Array.from(document.getElementsByClassName('playListPlay')).forEach((el)=>{
       el.classList.remove('bi-pause-circle-fill');
       el.classList.add('bi-play-circle-fill');
    })
}


let index=0;
let poster_master_play=document.getElementById('poster_master_play');
let download_music = document.getElementById('download_music');
let title= document.getElementById('title');
Array.from(document.getElementsByClassName('playListPlay')).forEach((e)=>{
    e.addEventListener('click',(el)=>{
        index=el.target.id;
        music.src=`music/${index}.mp3`;
        poster_master_play.src=`poster/${index}.jpeg`;
        music.play();
        masterPlay.classList.remove('bi-play-fill'); 
        masterPlay.classList.add('bi-pause-fill');

        // download music
        download_music.href= `music/${index}.mp3`;
        // match the index with the array of objects made above , the object which matches its songname will be title
        let songTitles= songs.filter((els)=>{
            return els.id==index;
        })
        songTitles.forEach(elss=>{
            let {songName}=elss;
            title.innerHTML=songName;
            download_music.setAttribute('download',songName);
            // we can also update poster from here instead of above
            // let {songName, poster}=elss;
            // title.innerHTML=songName;
            // poster_master_play.src=poster;
        });
        
        // background opacity changes
        makeAllBackground();
        Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105,105,105,.1)";
        makeAllplays();
        el.target.classList.remove('bi-play-circle-fill');
        el.target.classList.add('bi-pause-circle-fill');
        wave.classList.add('active1');
    })
})


let currentStart= document.getElementById('currentStart');
let currentEnd= document.getElementById('currentEnd');
let seek=document.getElementById('seek');
let bar2=document.getElementById('bar2');
let dot=document.getElementsByClassName('dot')[0];

music.addEventListener('timeupdate', ()=>{
    let music_curr=music.currentTime;
    let music_dur=music.duration;
    
    let min1=Math.floor(music_dur/60);
    let sec1=Math.floor(music_dur%60);
    if(sec1<10)
    sec1=`0${sec1}`;
    currentEnd.innerText= `${min1}:${sec1}`;

    let min2=Math.floor(music_curr/60);
    let sec2= Math.floor(music_curr%60);
    if(sec2<10)
    sec2=`0${sec2}`;
    currentStart.innerText=`${min2}:${sec2}`;



    let progressBar = parseInt((music_curr/music_dur)*100);
    seek.value= progressBar;
    let seekbar=seek.value;
    bar2.style.width = `${seekbar}%`;
    dot.style.left = `${seekbar}%`;
})


seek.addEventListener('change',()=>{
  music.currentTime = seek.value * music.duration/100;
})

let vol_icon= document.getElementById('vol_icon');
let vol = document.getElementById('vol');
let vol_bar = document.getElementsByClassName('vol_bar')[0];
let vol_dot = document.getElementById('vol_dot');

vol.addEventListener('change',()=>{
    if(vol.value==0){
        vol_icon.classList.remove('bi-volume-up-fill');
        vol_icon.classList.remove('bi-volume-down-fill');
        vol_icon.classList.add('bi-volume-off-fill');
    }
    if(vol.value>0){
        vol_icon.classList.remove('bi-volume-up-fill');
        vol_icon.classList.add('bi-volume-down-fill');
        vol_icon.classList.remove('bi-volume-off-fill');
    }
    if(vol.value>50){
        vol_icon.classList.add('bi-volume-up-fill');
        vol_icon.classList.remove('bi-volume-down-fill');
        vol_icon.classList.remove('bi-volume-off-fill');
    }
    let vol_a =vol.value;
    vol_bar.style.width=`${vol_a}%`;
    vol_dot.style.left=`${vol_a}%`;

    music.volume = vol_a/100;
});

let back= document.getElementById('back');
let next= document.getElementById('next');

back.addEventListener('click',()=>{
    index-=1;
    if(index<1){
        index = Array.from(document.getElementsByClassName('songItem')).length;
    }
    music.src=`music/${index}.mp3`;
        poster_master_play.src=`poster/${index}.jpeg`;
        music.play();
        masterPlay.classList.remove('bi-play-fill'); 
        masterPlay.classList.add('bi-pause-fill');

        // match the index with the array of objects made above , the object which matches its songname will be title
        let songTitles= songs.filter((els)=>{
            return els.id==index;
        })
        songTitles.forEach(elss=>{
            let {songName}=elss;
            title.innerHTML=songName;

            // we can also update poster from here instead of above
            // let {songName, poster}=elss;
            // title.innerHTML=songName;
            // poster_master_play.src=poster;
        });
        
        // background opacity changes
        makeAllBackground();
        Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105,105,105,.1)";
        makeAllplays();
        el.target.classList.remove('bi-play-circle-fill');
        el.target.classList.add('bi-pause-circle-fill');
        wave.classList.add('active1');
});

next.addEventListener('click',()=>{
    index+=1;
    if(index>Array.from(document.getElementsByClassName('songItem')).length){
        index = 1;
    }
    music.src=`music/${index}.mp3`;
        poster_master_play.src=`poster/${index}.jpeg`;
        music.play();
        masterPlay.classList.remove('bi-play-fill'); 
        masterPlay.classList.add('bi-pause-fill');

        // match the index with the array of objects made above , the object which matches its songname will be title
        let songTitles= songs.filter((els)=>{
            return els.id==index;
        })
        songTitles.forEach(elss=>{
            let {songName}=elss;
            title.innerHTML=songName;

            // we can also update poster from here instead of above
            // let {songName, poster}=elss;
            // title.innerHTML=songName;
            // poster_master_play.src=poster;
        });
        
        // background opacity changes
        makeAllBackground();
        Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105,105,105,.1)";
        makeAllplays();
        el.target.classList.remove('bi-play-circle-fill');
        el.target.classList.add('bi-pause-circle-fill');
        wave.classList.add('active1');
});

// shuffle button
let shuffle = document.getElementsByClassName('shuffle')[0];

shuffle.addEventListener('click',()=>{
let a = shuffle.innerHTML;
switch(a){
case "next":
    shuffle.classList.add('bi-arrow-repeat');
    shuffle.classList.remove('bi-music-note-beamed');
    shuffle.classList.remove('bi-shuffle');
    shuffle.innerHTML='repeat';
    break;

case "repeat":
    shuffle.classList.remove('bi-arrow-repeat');
    shuffle.classList.remove('bi-music-note-beamed');
    shuffle.classList.add('bi-shuffle');
    shuffle.innerHTML='random';
    break;

case "random":
    shuffle.classList.remove('bi-arrow-repeat');
    shuffle.classList.add('bi-music-note-beamed');
    shuffle.classList.remove('bi-shuffle');
    shuffle.innerHTML='next';
    break;
    
}
});


// next, random, repeat shuffle music
const temp_music=()=>{
    music.src=`music/${index}.mp3`;
    poster_master_play.src=`poster/${index}.jpeg`;
    music.play();
    masterPlay.classList.remove('bi-play-fill'); 
    masterPlay.classList.add('bi-pause-fill');

    // download music
    download_music.href= `music/${index}.mp3`;
    // match the index with the array of objects made above , the object which matches its songname will be title
    let songTitles= songs.filter((els)=>{
        return els.id==index;
    })
    songTitles.forEach(elss=>{
        let {songName}=elss;
        title.innerHTML=songName;
        download_music.setAttribute('download',songName);
    });
    
    // background opacity changes
    makeAllBackground();
    Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105,105,105,.1)";
    makeAllplays();
    el.target.classList.remove('bi-play-circle-fill');
    el.target.classList.add('bi-pause-circle-fill');
    wave.classList.add('active1');
}


music.addEventListener('ended',()=>{
    let b= shuffle.innerHTML;
    switch(b){
        case "repeat":
            index;
            temp_music();
            break;
        case "next":
            if(index==songs.length){
                index=1;
            }
            else
            index++;
            temp_music();
            break;
        case "random":
            if(index==songs.length)
            index=1;
            else
            index=Math.floor((Math.random()*songs.length)+1);
            temp_music();
            break;
    }
});

