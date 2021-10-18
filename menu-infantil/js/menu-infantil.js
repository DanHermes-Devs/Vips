// function openDaypart(dayPartName) {
//     var i;
//     var x = document.getElementsByClassName("daypart");
//     for (i = 0; i < x.length; i++) {
//         x[i].style.display = "none";
//     }
//     document.getElementById(dayPartName).style.display = "block";
// }

function openDaypart(evt, dayPartName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("daypart");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tab__links");
    for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace("tab-active", "");
    }
    document.getElementById(dayPartName).style.display = "block";
    evt.currentTarget.className += " tab-active";
  }