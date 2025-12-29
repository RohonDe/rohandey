document.querySelectorAll(".section").forEach(sec=>{
  sec.style.opacity=0;
  sec.style.transform="translateY(30px)";
  setTimeout(()=>{
    sec.style.transition="all .6s ease";
    sec.style.opacity=1;
    sec.style.transform="translateY(0)";
  },300);
});
