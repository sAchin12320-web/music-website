<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="masterplay_style.css">
    <link rel="stylesheet" href="song_side_style.css">
    <title>Music Website</title>
</head>
<body>
    <header>
        <div class="menu_side">
            <h1>Playlist</h1>
            <div class="playlist">
            <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i>Playlist</h4>
            <h4><span></span><i class="bi bi-music-note-beamed"></i>Last listening</h4>
            <h4><span></span><i class="bi bi-music-note-beamed"></i>Recommended</h4>
        </div>
        <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/01_hello.jpeg" alt="">
                    <h5>Hello <br><div class="subtitle">Adele</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="img/02_on_my_way.jpeg" alt="">
                    <h5>On my way <br><div class="subtitle">Alan Walker</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="img/03_tu_jhoom.jpeg" alt="">
                    <h5>Tu Jhoom<br><div class="subtitle">Abida Praveen, Naseebo Lal</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="img/04_runaway.jpeg" alt="">
                    <h5>runaway <br><div class="subtitle">Aurora</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="img/05_someone_like_you.png" alt="">
                    <h5>someone like you <br><div class="subtitle">Adele</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="img/06_qafirana.jpg" alt="">
                    <h5>Qafirana <br><div class="subtitle">Arijit Singh, Nikhita</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                </li>
                <li class="songItem">
                    <span>07</span>
                    <img src="img/07_deva_deva.jpg" alt="">
                    <h5>Deva Deva<br><div class="subtitle">Arijit singh, Jonita Gandhi</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                </li>
                <li class="songItem">
                    <span>08</span>
                    <img src="img/08_doobey.jpg" alt="">
                    <h5>Doobey<br><div class="subtitle">Lothika Jha</div></h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                </li>
            </div>
        </div>







<!--   song side container -->
        <div class="song_side">
            <nav>
                <ul>
                    <li>Discover <span></span></li>
                    <li>My Library</li>
                    <li>Radio</li>
                </ul>

                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search music...">
                    <div class="search_results">
                        <!-- <img src="img/01_hello.jpeg" alt="">
                            <div class="content">
                                Hello
                                <div class="subtitles">
                                    Adele
                                </div>
                            </div> -->
                    </div>
                </div>

                <div class="user">
                    <img src="img/dp.jpg" alt="">
                </div>
            </nav>

            <div class="content">
              <h1>Alan Walker-Fade</h1>
              <p>You were the shadow to my light did you feel us another start you fade <br>
                 Away afraid our aim is out of sight wanna see us Alive
              </p>
              <div class="buttons">
                <button>Play</button>
                <button>Follow</button>
              </div>
            </div>

            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                        <img src="img/09_kun_faya_kun.jpeg" alt="">
                        <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                    </div>
                    <h5>Kun Faya Kun<br><div class="subtitle">AR Rehman, Javed Ali, Mohit Chauhan</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                        <img src="img/10_lukka_chupi_bahut_hui.jpeg" alt="">
                        <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                    </div>
                    <h5>Lukka chupi bahut hui<br><div class="subtitle">Lata Mangeshkar, AR Rehman</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                        <img src="img/11_kon_disha_me.jpeg" alt="">
                        <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                    </div>
                    <h5>kon disha me <br><div class="subtitle">Varsha singh Dhanoa</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                        <img src="img/12_agar_tum_sath_ho.jpeg" alt="">
                        <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                    </div>
                    <h5>Agar tum sath ho<br><div class="subtitle">Alka Yagnik,Arijit singh</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                        <img src="img/13_tere_hawale.jpeg" alt="">
                        <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                    </div>
                    <h5>Tere hawale <br><div class="subtitle">Arijit singh, Shilpa Rao</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                        <img src="img/14_chandelier.jpeg" alt="">
                        <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                    </div>
                    <h5>Chandelier<br><div class="subtitle">Sia</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                        <img src="img/15_nazm_nazm.jpeg" alt="">
                        <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                    </div>
                    <h5>Nazm Nazm<br><div class="subtitle">Arko</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                        <img src="img/16_aise_kyun.jpeg" alt="">
                        <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
                    </div>
                    <h5>Aise Kyun<br><div class="subtitle">Rekha Bhardwaj</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                        <img src="img/17_falak_tak.jpeg" alt="">
                        <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                    </div>
                    <h5>Falak tak<br><div class="subtitle">Udit Narayan, Mahalakshmi Iyer</div></h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                        <img src="img/18_ek_din_aap_yun.jpeg" alt="">
                        <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
                    </div>
                    <h5>Ek din aap yun<br><div class="subtitle">Alka Yagnik, Kumar Sanu</div></h5>
                    </li>
                </div>
            </div>

<!-- artist -->
            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artist</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_art_left" ></i>
                        <i class="bi bi-arrow-right-short" id="pop_art_right"></i>
                    </div>
                </div>

                <div class="item">
                    <li>
                        <a href="arijit.php"><img src="img/arijit.jpeg" alt=""></a>
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                    <li>
                        <img src="img/arijit.jpeg" alt="">
                    </li>
                </div>
            </div>
        </div>
        









<!-- master_play bottom side container -->
        <div class="master_play">
         <div class="wave" id="wave">
            <div class="wave1"></div>
            <div class="wave1"></div>
            <div class="wave1"></div>
         </div>
         <img src="img/03_tu_jhoom.jpeg" alt="" id="poster_master_play">
         <h5 id="title">
            Tu jhoom
            <div class="subtitle">
                Abida Praveen, Naseebo Lal
            </div>
         </h5>
         <div class="icon">
            <i class="bi shuffle bi-music-note-beamed">next</i>
            <i class="bi bi-skip-start-fill" id="back"></i>
            <i class="bi bi-play-fill" id="masterPlay"></i>
            <i class="bi bi-skip-end-fill" id="next"></i>
            <a href="" download id="download_music" ><i class="bi bi-cloud-arrow-down-fill" ></i></a>
         </div>
         <span id="currentStart">0:00</span>
         <div class="bar">
            <input type="range" id="seek" min="0" max="100">
            <div class="bar2" id="bar2"></div>
            <div class="dot"></div>
         </div>

         <span id="currentEnd">0:30</span>
         <div class="vol">
            <i class="bi bi-volume-up-fill" id="vol_icon"></i>
            <input type="range" min="0" max="100" id="vol">
            <div class="vol_bar"></div>
            <div class="dot" id="vol_dot"></div>
         </div>
        </div>
    </header>
    <script src="app.js"></script>
    <script src="masterPlay.js"></script>
    <script src="search_results.js"></script>
</body>
</html>