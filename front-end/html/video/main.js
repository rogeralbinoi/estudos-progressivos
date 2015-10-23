// Buttons
var $btn_play = document.querySelector('.btn-play'),
    $controls = document.querySelector('.my-player-controls'),
    $btn_stop = document.querySelector('.btn-stop');

var VideoPlayer = function () {
	this.video = document.querySelector('.my-player-video');
	this.btn_play = document.querySelector('.btn-play');
	this.video.removeAttribute('controls');
}
// VideoPlayer
VideoPlayer.prototype._play_pause = function () {
  if(this.video.paused) {
    this.video.play();
    $controls.classList.remove('paused');
  }else {
  	this.video.pause();
  	$controls.classList.add('paused');
  }
}
VideoPlayer.prototype._pause = function () {
  if(!this.video.paused) {
    this.video.pause();
    $controls.classList.add('paused');
  }
}
VideoPlayer.prototype._stop = function () {
	this._pause();
	this.video.currentTime = 0;
}

var videoTeste = new VideoPlayer();

$btn_play.addEventListener('click', function () {
	videoTeste._play_pause();
});

$btn_stop.addEventListener('click', function () {
	videoTeste._stop();
});