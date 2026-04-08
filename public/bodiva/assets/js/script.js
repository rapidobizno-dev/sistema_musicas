
// Update: 11/10/2020
// I created this pen since a long time and I didn't uupdate anything, so I don't recommend you to work with this code, you may consider it as an inspiration dashboard UI only.

// Other important pens.
// Map: https://codepen.io/themustafaomar/pen/ZEGJeZq
// Navbar: https://codepen.io/themustafaomar/pen/VKbQyZ

$(function () {

  'use strict';

  var aside = $('.side-nav'),
      showAsideBtn = $('.show-side-btn'),
      contents = $('#contents'),
      _window = $(window)

  showAsideBtn.on("click", function () {
    $("#" + $(this).data('show')).toggleClass('show-side-nav');
    contents.toggleClass('margin');
  });

  if (_window.width() <= 767) {
    aside.addClass('show-side-nav');
  }

  _window.on('resize', function () {
    if ($(window).width() > 767) {
      aside.removeClass('show-side-nav');
    }
  });

  // dropdown menu in the side nav
  var slideNavDropdown = $('.side-nav-dropdown');

  $('.side-nav .categories li').on('click', function () {

    var $this = $(this)

    $this.toggleClass('opend').siblings().removeClass('opend');

    if ($this.hasClass('opend')) {
      $this.find('.side-nav-dropdown').slideToggle('fast');
      $this.siblings().find('.side-nav-dropdown').slideUp('fast');
    } else {
      $this.find('.side-nav-dropdown').slideUp('fast');
    }
  });

  $('.side-nav .close-aside').on('click', function () {
    $('#' + $(this).data('close')).addClass('show-side-nav');
    contents.removeClass('margin');
  });


  // Start chart
  var chart = document.getElementById('myChart');
  Chart.defaults.global.animation.duration = 2000; // Animation duration
  Chart.defaults.global.title.display = false; // Remove title
  Chart.defaults.global.title.text = "Chart"; // Title
  Chart.defaults.global.title.position = 'bottom'; // Title position
  Chart.defaults.global.defaultFontColor = '#999'; // Font color
  Chart.defaults.global.defaultFontSize = 10; // Font size for every label

  // Chart.defaults.global.tooltips.backgroundColor = '#FFF'; // Tooltips background color
  Chart.defaults.global.tooltips.borderColor = 'white'; // Tooltips border color
  Chart.defaults.global.legend.labels.padding = 0;
  Chart.defaults.scale.ticks.beginAtZero = true;
  Chart.defaults.scale.gridLines.zeroLineColor = 'rgba(255, 255, 255, 0.1)';
  Chart.defaults.scale.gridLines.color = 'rgba(255, 255, 255, 0.02)';
  Chart.defaults.global.legend.display = false;

  var myChart = new Chart(chart, {
    type: 'bar',
    data: {
      labels: ["January", "February", "March", "April", "May", 'Jul'],
      datasets: [{
        label: "Lost",
        fill: false,
        lineTension: 0,
        data: [45, 25, 40, 20, 45, 20],
        pointBorderColor: "#4bc0c0",
        borderColor: '#4bc0c0',
        borderWidth: 2,
        showLine: true,
      }, {
        label: "Succes",
        fill: false,
        lineTension: 0,
        startAngle: 2,
        data: [20, 40, 20, 45, 25, 60],
        // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
        backgroundColor: "transparent",
        pointBorderColor: "#ff6384",
        borderColor: '#ff6384',
        borderWidth: 2,
        showLine: true,
      }]
    },
  });

  //  Chart ( 2 )
  var Chart2 = document.getElementById('myChart2').getContext('2d');
  var chart = new Chart(Chart2, {
    type: 'line',
    data: {
      labels: ["January", "February", "March", "April", 'test', 'test', 'test', 'test'],
      datasets: [{
        label: "My First dataset",
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 79, 116)',
        borderWidth: 2,
        pointBorderColor: false,
        data: [5, 10, 5, 8, 20, 30, 20, 10],
        fill: false,
        lineTension: .4,
      }, {
        label: "Month",
        fill: false,
        lineTension: .4,
        startAngle: 2,
        data: [20, 14, 20, 25, 10, 15, 25, 10],
        // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
        backgroundColor: "transparent",
        pointBorderColor: "#4bc0c0",
        borderColor: '#4bc0c0',
        borderWidth: 2,
        showLine: true,
      }, {
        label: "Month",
        fill: false,
        lineTension: .4,
        startAngle: 2,
        data: [40, 20, 5, 10, 30, 15, 15, 10],
        // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
        backgroundColor: "transparent",
        pointBorderColor: "#ffcd56",
        borderColor: '#ffcd56',
        borderWidth: 2,
        showLine: true,
      }]
    },

    // Configuration options
    options: {
      title: {
        display: false
      }
    }
  });

  var chart = document.getElementById('chart3');
  var myChart = new Chart(chart, {
    type: 'line',
    data: {
      labels: ["One", "Two", "Three", "Four", "Five", 'Six', "Seven", "Eight"],
      datasets: [{
        label: "Lost",
        fill: false,
        lineTension: .5,
        pointBorderColor: "transparent",
        pointColor: "white",
        borderColor: '#d9534f',
        borderWidth: 0,
        showLine: true,
        data: [0, 40, 10, 30, 10, 20, 15, 20],
        pointBackgroundColor: 'transparent',
      },{
        label: "Lost",
        fill: false,
        lineTension: .5,
        pointColor: "white",
        borderColor: '#5cb85c',
        borderWidth: 0,
        showLine: true,
        data: [40, 0, 20, 10, 25, 15, 30, 0],
        pointBackgroundColor: 'transparent',
      },
                 {
                   label: "Lost",
                   fill: false,
                   lineTension: .5,
                   pointColor: "white",
                   borderColor: '#f0ad4e',
                   borderWidth: 0,
                   showLine: true,
                   data: [10, 40, 20, 5, 35, 15, 35, 0],
                   pointBackgroundColor: 'transparent',
                 },
                 {
                   label: "Lost",
                   fill: false,
                   lineTension: .5,
                   pointColor: "white",
                   borderColor: '#337ab7',
                   borderWidth: 0,
                   showLine: true,
                   data: [0, 30, 10, 25, 10, 40, 20, 0],
                   pointBackgroundColor: 'transparent',
                 }]
    },
  });

});




/*****/









function sliceSize(dataNum, dataTotal) {
  return (dataNum / dataTotal) * 360;
}

function addSlice(id, sliceSize, pieElement, offset, sliceID, color) {
  $(pieElement).append("<div class='slice "+ sliceID + "'><span></span></div>");
  var offset = offset - 1;
  var sizeRotation = -179 + sliceSize;

  $(id + " ." + sliceID).css({
    "transform": "rotate(" + offset + "deg) translate3d(0,0,0)"
  });

  $(id + " ." + sliceID + " span").css({
    "transform"       : "rotate(" + sizeRotation + "deg) translate3d(0,0,0)",
    "background-color": color
  });
}

function iterateSlices(id, sliceSize, pieElement, offset, dataCount, sliceCount, color) {
  var
    maxSize = 179,
    sliceID = "s" + dataCount + "-" + sliceCount;

  if( sliceSize <= maxSize ) {
    addSlice(id, sliceSize, pieElement, offset, sliceID, color);
  } else {
    addSlice(id, maxSize, pieElement, offset, sliceID, color);
    iterateSlices(id, sliceSize-maxSize, pieElement, offset+maxSize, dataCount, sliceCount+1, color);
  }
}

function createPie(id) {
  var
    listData      = [],
    listTotal     = 0,
    offset        = 0,
    i             = 0,
    pieElement    = id + " .c-graphic__circle--donut__inner__pie",
    dataElement   = id + " .c-graphic__circle--donut__inner__legend",

    color         = [
      "cornflowerblue",
      "olivedrab",
      "orange",
      "tomato",
      "crimson",
      "purple",
      "turquoise",
      "forestgreen",
      "navy"
    ];

  color = shuffle( color );

  $(dataElement+" span").each(function() {
    listData.push(Number($(this).html()));
  });

  for(i = 0; i < listData.length; i++) {
    listTotal += listData[i];
  }

  for(i=0; i < listData.length; i++) {
    var size = sliceSize(listData[i], listTotal);
    iterateSlices(id, size, pieElement, offset, i, 0, color[i]);
    $(dataElement + " li:nth-child(" + (i + 1) + ")").css("border-color", color[i]);
    offset += size;
  }
}

function shuffle(a) {
    var j, x, i;
    for (i = a.length; i; i--) {
        j = Math.floor(Math.random() * i);
        x = a[i - 1];
        a[i - 1] = a[j];
        a[j] = x;
    }

    return a;
}

function createPieCharts() {
  createPie('.c-graphic__delivery' );
}

createPieCharts();

/***/

