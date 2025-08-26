document.addEventListener("DOMContentLoaded", function () {
  console.log("DOM fully loaded and parsed");
  const menuLinks = document.querySelectorAll(".sidebar-items");
  let currentPath = window.location.pathname.split("/").pop();

  // Default to index.php if path is empty (root)
  if (!currentPath) currentPath = "index.php";

  menuLinks.forEach((link) => {
    const linkPath = link.getAttribute("href");
    if (linkPath === currentPath) {
      console.log(linkPath);
      link.classList.add("selected");
    } else {
      link.classList.remove("selected");
    }
  });
});
