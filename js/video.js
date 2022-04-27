

const video = document.getElementById('video');
const play = document.getElementById('play');
const stop = document.getElementById('stop');
const progress = document.getElementById('progress');
const timestamp = document.getElementById('timestamp');




// Event listener


video.addEventListener('click', toggleVideoStatus);
video.addEventListener('pause', updatePlayIcon);
video.addEventListener('play', updatePlayIcon);
video.addEventListener('timeupdate', updateProgress);


play.addEventListener('click', toggleVideoStatus);

stop.addEventListener('click', stopVideo);

progress.addEventListener('change', setVideoProgress);



// play && pause video

function toggleVideoStatus() {
    if(video.paused) {
        play.setAttribute('data-icon','u');
        video.play();
      } else {
        play.setAttribute('data-icon','P');
        video.pause();
      }
  }
// update play/pause video

function updatePlayIcon(){

    if(video.paused){

        play.innerHTML  = `<i class="fas fa-play fa-2x"></i>`;

    }else{

        play.innerHTML  = `<i class="fas fa-pause fa-2x"></i>`;
    }

}

// update progress bar && timestamp

function updateProgress(){

progress.value = (video.currentTime / video.duration) * 100;


 // Get minutes
 let minutes = Math.floor(video.currentTime / 60);
 if (minutes < 10) {
    minutes = '0' + String(minutes);
 }

 // Get seconds
 let seconds = Math.floor(video.currentTime % 60);
 if (seconds < 10) {
    seconds = '0' + String(seconds);
 }

 timestamp.innerHTML = `${minutes}:${seconds}`;



   
}


// set video progress bar

function setVideoProgress(){

 video.currentTime = (+progress.value * video.duration) / 100;
   
}

// stop video 

function stopVideo(){
    video.pause();
    video.currentTime = 0;
    play.setAttribute('data-icon','P');
    
}