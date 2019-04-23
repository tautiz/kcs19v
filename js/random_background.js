let backgrounds = [
    'video/DeafeningClearcutCanvasback.webm',
    'video/rain.mp4',
];

let randNr = Math.floor(Math.random() * backgrounds.length);

let bgVideo = document.getElementById('bgVideo');

let videoSource = bgVideo.getElementsByTagName('source');

videoSource[0].src = backgrounds[randNr];
bgVideo.load();
bgVideo.play();
