function showMore() {
  var moreText = document.getElementById("more");
  var extraText = document.getElementById("extra");
  var btnText = document.querySelector(".read-more");

  if (moreText.style.display === "none") {
    moreText.style.display = "inline";
    extraText.style.display = "none";
    btnText.innerHTML = "Read More";
  } else {
    moreText.style.display = "none";
    extraText.style.display = "inline";
    btnText.innerHTML = "Read Less";
  }
}
