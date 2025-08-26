document.addEventListener("DOMContentLoaded", function () {
  const menuLinks = document.querySelectorAll(".sidebar-items");
  let currentPath = window.location.pathname.split("/").pop();
  if (!currentPath) currentPath = "index.php";

  // Find the current menu link
  let currentLink = null;
  menuLinks.forEach((link) => {
    const linkPath = link.getAttribute("href");
    if (linkPath === currentPath) {
      link.classList.add("selected");
      currentLink = link;
    } else {
      link.classList.remove("selected");
    }

    link.addEventListener("mouseenter", function () {
      menuLinks.forEach((l) => l.classList.remove("selected"));
    });

    link.addEventListener("mouseleave", function () {
      if (currentLink) currentLink.classList.add("selected");
    });
  });
});
