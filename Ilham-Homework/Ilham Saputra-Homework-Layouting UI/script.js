function toggleSidebar() {
  const sidebar = document.getElementById("mySidebar");
  const mainContent = document.getElementById("main");
  const hamburgerBtn = document.getElementById("hamburgerBtn");

  sidebar.classList.toggle("show");

  if (sidebar.classList.contains("show")) {
    mainContent.style.marginLeft = "250px";
    hamburgerBtn.style.display = "none";
  } else {
    mainContent.style.marginLeft = "0";
    hamburgerBtn.style.display = "inline-block";
  }
}

function closeSidebar() {
  const sidebar = document.getElementById("mySidebar");
  const mainContent = document.getElementById("main");
  const hamburgerBtn = document.getElementById("hamburgerBtn");

  sidebar.classList.remove("show");
  mainContent.style.marginLeft = "0";
  hamburgerBtn.style.display = "inline-block";
}
