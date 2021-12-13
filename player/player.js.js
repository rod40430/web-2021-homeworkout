const myplayer = document.querySelector(`.myplayer`);
const player = document.querySelector(`.player`);
const play_btn = document.querySelector(`.play`);
const play_stop = document.querySelector(`.stop`);
const prev = document.querySelector(`.prev`);
const next = document.querySelector(`.next`);
const back = document.querySelector(`.back`);
const all = document.querySelector(`.all`);
const timehead = document.querySelector(`.timehead`);
const timelineCurrent = document.querySelector(`.timelineCurrent`);
const timelineAll = document.querySelector(`.timelineAll`);
const sound = document.querySelector(`.sound`);
const soundlayout = document.querySelector(`.soundlayout`);
const sound__head = document.querySelector(`.sound__head`);
const soundbar = document.querySelector(`.soundbar`);
const current = document.querySelector(`.current`);
const viewportAll = document.querySelector(`.viewportAll`);
const vleft = document.querySelector(`.left`);
const vright = document.querySelector(`.right`);
const loopstart = document.querySelector(`.loopstart`);
const loopend = document.querySelector(`.loopend`);
const con = document.querySelectorAll(`.con`);
let ismousedown = false;
let ismousedown2 = false;
let mm = false;

myplayer.addEventListener(`timeupdate`, () => {
    let percent = (myplayer.currentTime / myplayer.duration) * 100;
    timehead.style.left = `${percent}%`;
    timelineCurrent.style.width = `${percent}%`;
});

timelineAll.addEventListener(`mousedown`, (e) => {
    let mp = (e.clientX / timelineAll.offsetWidth) * myplayer.duration;
    myplayer.currentTime = mp;
    ismousedown = true;
})

player.addEventListener(`mouseup`, () => {
    ismousedown = false;
})

player.addEventListener(`mousemove`, (e) => {
    if(ismousedown == true){
        let mp = (e.clientX / timelineAll.offsetWidth) * myplayer.duration;
        myplayer.currentTime = mp;
        let percent = (myplayer.currentTime / myplayer.duration) * 100;
        timehead.style.left = `${percent}%`;
        timelineCurrent.style.width = `${percent}%`;
    }
})

play_btn.addEventListener(`click`, () => {
    if(myplayer.paused){
        myplayer.play();
    }else{
        myplayer.pause();
    }
})

viewportAll.addEventListener(`click`, () => {
    if(myplayer.paused){
        myplayer.play();
    }else{
        myplayer.pause();
    }
})

play_stop.addEventListener(`click`, () => {
    myplayer.currentTime = 0;
    myplayer.pause();
})

vleft.addEventListener(`dblclick`, () => {
    myplayer.currentTime -= 10;
})

vright.addEventListener(`dblclick`, () => {
    myplayer.currentTime += 10;
})

prev.addEventListener(`click`, () => {
    myplayer.currentTime -= 10;
})

next.addEventListener(`click`, () => {
    myplayer.currentTime += 10;
})

back.addEventListener(`click`, () => {
    history.back();
})

all.addEventListener(`click`, () => {
    if (!document.fullscreenElement){
        player.requestFullscreen();
        con[0].style.display = `none`;
        con[1].style.display = `none`;
    }else{
        document.exitFullscreen();
    }
})

sound.addEventListener(`mouseover`, () => {
    soundlayout.style.width = `7vmin`;
    soundlayout.style.margin = `0 2vmin`;
    sound__head.style.display = `flex`;
})

sound.addEventListener(`mouseleave`, () => {
    soundlayout.style.width = `0`;
    soundlayout.style.margin = `0`;
    sound__head.style.display = `none`;
})

soundlayout.addEventListener(`mousedown`, (e) => {
    ismousedown2 = true;
    let vl = (e.offsetX / soundbar.offsetWidth);
    sound__head.style.left = `${vl * 100}%`;
    current.style.width = `${vl * 100}%`;
    myplayer.volume = vl;
})

player.addEventListener(`mouseup`, () => {
    ismousedown2 = false;
})

soundlayout.addEventListener(`mousemove`, (e) => {
    if(ismousedown2 == true){
        let vl = (e.offsetX / soundbar.offsetWidth);
        sound__head.style.left = `${vl * 100}%`;
        current.style.width = `${vl * 100}%`;
        myplayer.volume = vl;
    }
})

player.addEventListener(`mouseover`, () => {
    mm = true;
    if(mm == true){
        con[0].style.display = `flex`;
        con[1].style.display = `flex`;
    }
})

player.addEventListener(`mouseleave`, () => {
    mm = false;
    if(mm == false){
        con[0].style.display = `none`;
        con[1].style.display = `none`;
    }
})

let start = 0;
let end = 999999;
loopstart.addEventListener(`click`, () => {
    start = myplayer.currentTime;
});

loopend.addEventListener(`click`, () => {
    end = myplayer.currentTime; 
});

myplayer.addEventListener(`timeupdate`, () => {
    if(myplayer.currentTime > end){
        myplayer.currentTime = start;
    }
});