// Playlist

// https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji&maxResults=50&key=AIzaSyBcNwIfR2Wduk0eQdtJD4-us2PkR1jFnkE

// API Key AIzaSyBcNwIfR2Wduk0eQdtJD4-us2PkR1jFnkE

// playlist

const urlApi = "https://www.googleapis.com/youtube/v3/playlistItems?";
const part = "part=snippet&playlistId=";
const playlistIdNow = localStorage.getItem("playlist") ; //"PLDoPjvoNmBAw_t_XWUFbBX-c9MafPk9ji"
const maxRes = "&maxResults=50&";
const key = "key=AIzaSyBcNwIfR2Wduk0eQdtJD4-us2PkR1jFnkE";

console.log(playlistIdNow)

const url = urlApi + part + playlistIdNow + maxRes + key;
const btn = document.querySelector(".btn");
const video = document.getElementById("player");
const main = document.getElementById("videos");
const allVids = document.getElementById("videos");

const loadVids = function () {
  fetch(url)
    .then((res) => res.json())
    .then((data) => {
      console.log(data.items);
      const id = data.items[0].snippet.resourceId.videoId;
      const title = data.items[0].snippet.title;
      const des = data.items[0].snippet.description;
      mainVid(id,title,des);

      resultsLoop(data);
      console.log(id);
      console.log(id);




      const vidLength = `<div class="vidNum"> Videos <Span>${data.items.length}</Span></div>`;
      console.log(vidLength)
      allVids.insertAdjacentHTML("afterbegin", vidLength)
    });
};

const mainVid = function (id,title,des) {
  video.innerHTML = `<iframe
  width="102%"
  height="450rem"
  src="https://www.youtube.com/embed/${id}"
  title="YouTube video player"
  frameborder="0"
  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
  allowfullscreen
></iframe>
<h3 class="title">${title}</h3>
<div class="description">${des}</div>`;
};



const resultsLoop = function (data) {
  let html;
  data.items.forEach((item, i) => {
    const thumb = item.snippet.thumbnails.medium.url;
    const title = item.snippet.title;
    const des = item.snippet.description;
    const vid = item.snippet.resourceId.videoId;
    html = `<article class="videoBox" data-key="${vid}">
      <img
        src="${thumb}"
        alt="img"
        class="thumb"
      />
      <div class="details">
        <h4>${title}</h4>
        <h6>${des}</h6>
      </div>
    </article>`;

    main.insertAdjacentHTML("beforeend", html);
  });

  main.addEventListener("click", function (e) {
    const id = e.target.closest(".videoBox").getAttribute("data-key");
    const title = e.target.closest(".videoBox").querySelector(".details h4").innerText;
    const des = e.target.closest(".videoBox").querySelector(".details h6").innerText;
    if (id, title, des) {
      mainVid(id,title,des);
    }
  });

};
loadVids();




