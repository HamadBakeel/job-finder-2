"use strict";!function(){const e=document.querySelector("#animation-dropdown"),t=document.querySelector("#animationModal"),a=(e&&(e.onchange=function(){t.classList="",t.classList.add("modal","animate__animated",this.value)}),document.querySelector("#youTubeModal")),o=a.querySelector("iframe");a.addEventListener("hidden.bs.modal",function(){o.setAttribute("src","")});{const n=[].slice.call(document.querySelectorAll('[data-bs-toggle="modal"]'));n.map(function(e){e.onclick=function(){const e=this.getAttribute("data-bs-target"),t=this.getAttribute("data-theVideo"),a=t+"?autoplay=1",o=document.querySelector(e+" iframe");o&&o.setAttribute("src",a)}})}document.querySelectorAll(".carousel").forEach(t=>{t.addEventListener("slide.bs.carousel",e=>{e=$(e.relatedTarget).height();$(t).find(".active.carousel-item").parent().animate({height:e},500)})})}();
