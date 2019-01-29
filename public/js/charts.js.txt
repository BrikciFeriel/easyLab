
$(function () {
    getMessage();
   // getMessage1();
    getMessage2();
    getMessage3();

    function getMessage() {
        $.getJSON('charts', function(data) {
           
         console.log(data);
            var dataPoints2 = [];
            var datasets = [];
            var date = [];
            var color = ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"];
            var i = 0;
            /*$.each(data, function(key, value) {
                color.push(dataset);
            });*/
            $.each(data, function(key, value) {
                if (key != 'date') {
                    dataPoints2.push(key);
                    var tmp = key;
                    var dataPoints = [];
                    $.each(value, function(key, value2) {
                        dataPoints.push(value2);
                    });
                    var dataset = {
                        label: tmp,
                        backgroundColor: color[i++],

                        data: dataPoints
                    }
                    datasets.push(dataset);
                } else {
                    $.each(value, function(key, value3) {
                        date.push(value3['annee']);
                    });

                }

            });

            //console.log(color);
            //console.log(dataPoints);
            new Chart(document.getElementById("bar-chart-grouped"), {


                type: 'bar',
                data: {
                    labels: date,
                    datasets: datasets
                },
                options: {
                    title: {
                        display: true,

                        text: ' Nombre des articles publiés par équipe '
                    },
                    animationEnabled: true,
                    exportEnabled: true,
                }
            });


        });


    } 
 function getMessage2() {
        $.getJSON('charts2', function(data1) {
           
         console.log(data1);
            var dataPoints2 = [];
            var datasets = [];
            var type = [];
            var cmp = [];
            var tmp = ["Poster", "Livre", "Article court", "Article long", "Publication(Revue)","Chapitre d un livre","Brevet"];
            var color = ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#558529","#2A2985"];
            var i = 0;
            $.each(data1, function(key, value) {
                $.each(value, function(key, value) {

                type.push(value['type']);
                cmp.push(value['cmp']);
                
                });
            });


            //console.log(type);
            //console.log(cmp);

            

new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: type,
      datasets: [{
       
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: cmp
      }]
    },
    options: {
      title: {
        display: true,
        text: 'articles publiés'
      }
    }
});


        });
    }

    function getMessage3() {
        $.getJSON('charts3', function(data1) {
           
         console.log(data1);
            var dataPoints2 = [];
            var datasets = [];
            var intitule = [];
            var nbr = [];
            var tmp = ["Poster", "Livre", "Article court", "Article long", "Publication(Revue)","Chapitre d un livre","Brevet"];
            var color = ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#558529","#2A2985"];
            var i = 0;
            $.each(data1, function(key, value) {
                $.each(value, function(key, value) {

                intitule.push(value['intitule']);
                nbr.push(value['nbr']);
                
                });
            });


            console.log(intitule);
            console.log(nbr);

            

new Chart(document.getElementById("pie-chart2"), {
    type: 'pie',
    data: {
      labels: intitule,
      datasets: [{
       
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: nbr
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Membres de laboratoire par équipe'
      }
    }
});


        });
    }
 
});/*

      function getMessage1() { 
        $.getJSON('charts', function(data) {
           
         console.log(data);
            var dataPoints2 = [];
            var datasets = [];
            var date = [];
            var color = ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"];
            var i = 0;
            /*$.each(data, function(key, value) {
                color.push(dataset);
            });*/
       /*     $.each(data, function(key, value) {
                if (key != 'date') {
                    dataPoints2.push(key);
                    var tmp = key;
                    var dataPoints = [];
                    $.each(value, function(key, value2) {
                        dataPoints.push(value2);
                    });
                    var dataset = {
                        label: tmp,
                        backgroundColor: color[i++],

                        data: dataPoints
                    }
                    datasets.push(dataset);
                } else {
                    $.each(value, function(key, value3) {
                        date.push(value3['annee']);
                    });

                }

            });

            //console.log(color);
            //console.log(dataPoints);
            new Chart(document.getElementById("bar-chart-grouped2"), {


                type: 'bar',
                data: {
                    labels: date,
                    datasets: datasets
                },
                options: {
                    title: {
                        display: true,
                        text: 'Nombre des projets publiés par équipe'
                    },
                    animationEnabled: true,
                    exportEnabled: true,
                }
            });


        });


    }*/
       /* function getMessage2() {
        $.getJSON('charts2', function(data1) {
           
         console.log(data1);
            var dataPoints2 = [];
            var datasets = [];
            var type = [];
            var cmp = [];
            var tmp = ["Poster", "Livre", "Article court", "Article long", "Publication(Revue)","Chapitre d un livre","Brevet"];
            var color = ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#558529","#2A2985"];
            var i = 0;
            $.each(data1, function(key, value) {
                $.each(value, function(key, value) {

                type.push(value['type']);
                
                cmp.push(value['cmp']);
            });
            });


            console.log(type);
            console.log(cmp);

             var dataset = {
                        label: type,
                        backgroundColor: color[i++],

                        data: cmp
                    }
                    datasets.push(dataset);


            new Chart(document.getElementById("pie-chart"), {
              type: 'pie',
    data: {
      labels: type;
      datasets: [{
        
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#558529","#2A2985"],
        data: cmp
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Articles publiés'
      },
       animationEnabled: true,
       exportEnabled: true,
    }
});


        });

*/
   
