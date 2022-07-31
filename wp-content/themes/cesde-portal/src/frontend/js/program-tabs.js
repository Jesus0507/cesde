const programasTabs = document.querySelector("section.programas-tabs");

const programasTabsTriggers = document.querySelectorAll(".tab-title h2");
const tabContents = document.querySelectorAll(".tab-content");
const tabElementDesktop = document.querySelectorAll(".tab-element-desktop");
if (programasTabs) {
  programasTabsTriggers.forEach(function (programasTabsTrigger, i) {
    programasTabsTrigger.addEventListener("click", () => {
      if (!programasTabsTrigger.classList.contains("active")) {
        programasTabsTriggers.forEach((tabs, index) => {
          tabs.classList.remove("active");
          tabContents[index].classList.remove("open");
          tabElementDesktop[index].classList.remove("open");
        });
        programasTabsTrigger.classList.add("active");
        tabContents[i].classList.add("open");
        tabElementDesktop[i].classList.add("open");
      }
    });
  });
}
document.addEventListener("DOMContentLoaded", function () {
  tabContents[0].classList.add("open");
  tabElementDesktop[0].classList.add("open");
  programasTabsTriggers[0].classList.add("active");
});
