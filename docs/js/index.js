function setValidationLinks() {
  var script = document.createElement("script");
  script.src = "https://cdn.jsdelivr.net/gh/gracehoppercenter/validate@1.0.5/validate.js";
  script.async = false;
  document.head.appendChild(script);
}

function toggleContent() {
  const article = document.getElementById("main_article")
  const nav = document.getElementById("main_nav")
  article.className = article.className === "desktop" ?
    "mobile" : "desktop";
  nav.className = article.className === "desktop" ?
    "mobile" : "desktop";
}
